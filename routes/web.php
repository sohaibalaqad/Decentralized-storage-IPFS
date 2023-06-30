<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    $files = \App\Models\File::all();
//    return view('dashboard.index', compact('files'));
//})->middleware('auth');

Route::get('/', function (){
    return view('welcome');
});

Route::get('/get-files', function (){
    $files = \App\Models\File::orderBy('created_at', 'desc')->get();
    return $files;
})->middleware('auth');

Route::get('/get-folders', function (){
    $folders = \App\Models\Folder::orderBy('created_at', 'desc')->get();
    return $folders;
})->middleware('auth');

 Route::middleware([
     'auth:sanctum',
     config('jetstream.auth_session'),
     'verified'
 ])->group(function () {
     Route::get('/dashboard', function () {
         $files = \App\Models\File::all();
         return view('dashboard.index', compact('files'));
     })->name('dashboard');

     Route::get('/Files', function (){
         $files = \App\Models\File::orderBy('created_at', 'desc')->get();
         $folders = \App\Models\Folder::orderBy('created_at', 'desc')->get();
         return view('dashboard.Files', compact('files', 'folders'));
     })->name('Files');

     Route::get('/MyFiles', function (){
         $files = \App\Models\File::all();
         return view('dashboard.tableFile', compact('files'));
     })->name('MyFiles');

 });

Route::get('/', function (){
    return view('welcome');
})->name('welcome');


Route::get('/folders/{id}', [\App\Http\Controllers\IpfsController::class, 'showFolder'])->name('folder.show');
