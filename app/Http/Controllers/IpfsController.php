<?php

namespace App\Http\Controllers;

use App\Helpers\EncryptionHelper;
use App\Models\File;
use App\Models\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IpfsController extends Controller
{
    protected $baseUri = '';
    public function __construct()
    {
        $baseUrl = 'http://217.147.1.37';
        $port = '5001';
        $this->baseUri = $baseUrl . ":" . $port . "/api/v0/";
    }

    public function uploud(Request $request)
    {
        if ($request->has('file')) {
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();

            $encryptedContent = EncryptionHelper::encrypt(
                file_get_contents($file->path()),
                'jasubcui783ndsaicj934dfscd75fr2a2s8da8ef85ac45e3f',
                env('CIPHER_ALGORITHM')
            );

            $response = Http::attach(
                'file',
                $encryptedContent,
                $fileName
            )->post($this->baseUri . 'add');

            if ($response->ok()) {
                File::create([
                    'name' => $response->json()['Name'],
                    'hash' => $response->json()['Hash'],
                    'type' => $file->getMimeType(),
                    'size' => $response->json()['Size'],
                    'folder_id' => $request->folder_id,
                    'user_id' => 1
                ]);
                return response()->json(['response' => $response->json()]);
            } else {
                return response()->json(['error' => 'Failed to upload file'], $response->status());
            }

        } else {
            return response()->json(['error' => 'file is required']);
        }

       }

    public function showFile(Request $request, $hash)
    {
        $response = Http::get($this->baseUri . "cat?arg={$hash}");
        $encryptedData = $response->body();
        $decryptedValue = EncryptionHelper::decrypt($encryptedData,
            'jasubcui783ndsaicj934dfscd75fr2a2s8da8ef85ac45e3f',
            env('CIPHER_ALGORITHM')
        );

        if ($response->ok()) {
            $finfo = new \finfo(FILEINFO_MIME_TYPE);
            $contentType = $finfo->buffer($decryptedValue);
            $headers = [
                'Content-Type' => $contentType,
            ];
            return response($decryptedValue, 200, $headers);
        } else {
            return response()->json(['error' => 'Failed to retrieve file'], $response->status());
        }
    }

    public function createFolder(Request $request)
    {

        Folder::create([
            'name' => $request->folder_name,
            'hash' => null,
            'parent_id' => $request->parent_id,
            'user_id' => 1
        ]);

        return redirect()->back();

//        $response = Http::post($this->baseUri . 'files/mkdir?arg=' . $request->post('arg'), [
//            'parents' => true,
//        ]);
//
//        if ($response->ok()) {
//            $cid = $response->json()['Hash'];
//            return response()->json(['cid' => $cid]);
//        } else {
//            return response()->json(['error' => 'Failed to create folder: ' . $response->json()['Message']], $response->status());
//
//        }
    }

    public function showFolder(Request $request, $id)
    {
        $folder = Folder::findOrFail($id);

        $folders = Folder::where('parent_id', $folder->id)->orderBy('created_at', 'desc')->get();
        $files = File::where('folder_id', $folder->id)->orderBy('created_at', 'desc')->get();

        return view('dashboard.showFolder', compact('folder', 'folders', 'files'));

    }
    public function renameFolder(Request $request)
    {
        $folder = Folder::find($request->folder_id);
        if (!$folder) {
            return redirect()->back()->with('error', 'Folder not found.');
        }
        $folder->name = $request->new_folder_name;
        $folder->save();
        return redirect()->back()->with('success', 'Folder renamed successfully.');
    }

    public function moveToFolder(Request $request)
    {
        $newParentFolderId = $request->input('new_parent_folder_id');
        $Folder = Folder::find($request->folderId);

        $Folder->parent_id = $newParentFolderId;
        $Folder->save();

        return redirect()->back()->with('success', 'Folder moved successfully.');
    }

}
