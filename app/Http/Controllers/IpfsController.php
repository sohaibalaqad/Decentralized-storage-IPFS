<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IpfsController extends Controller
{
    protected $baseUri = '';
    public function __construct()
    {
        $baseUrl = 'http://217.147.1.178';
        $port = '5001';
        $this->baseUri = $baseUrl . ":" . $port . "/api/v0/";
    }

    public function uploud(Request $request)
    {
        if ($request->has('file')) {
            $file = $request->file('file');

            $response = Http::attach(
                'file', // Name of the form field that contains the file
                file_get_contents($file->path()), // Contents of the file
                $file->getClientOriginalName() // Name of the file
            )->post($this->baseUri . 'add');

            if ($response->ok()) {
                File::create([
                    'name' => $response->json()['Name'],
                    'hash' => $response->json()['Hash'],
                    'type' => $file->getMimeType(),
                    'size' => $response->json()['Size'],
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

    public function createFolder(Request $request)
    {
        // Use the HTTP client to make a request to the IPFS API
        $response = Http::post($this->baseUri . 'files/mkdir', [
            'arg' => $request->post('folder_name') // Specify the path of the folder to create
        ]);

        // Check if the request was successful
        if ($response->ok()) {
            // Get the CID of the created folder
            $cid = $response->json()['Hash'];
            return response()->json(['cid' => $cid]);
        } else {
            return response()->json(['error' => 'Failed to create folder'], $response->status());
        }
    }

    // Error  ----------------------------------------------------------------------------------------------------------------------------------
    public function showFile(Request $request, $hash)
    {
        // Use the HTTP client to make a request to the IPFS API
        $response = Http::get($this->baseUri . "cat?arg={$hash}");

        // Check if the request was successful
        if ($response->ok()) {
            dd($response);
            // Return the file contents as a response
            return response($response->body())->header('Content-Type', 'application/octet-stream');
        } else {
            return response()->json(['error' => 'Failed to retrieve file'], $response->status());
        }
    }
}
