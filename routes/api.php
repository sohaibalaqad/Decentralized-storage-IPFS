<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('upload', [\App\Http\Controllers\IpfsController::class, 'uploud'])->name('add.file');
Route::post('folder/create', [\App\Http\Controllers\IpfsController::class, 'createFolder'])->name('create.folder');
Route::post('folder/rename', [\App\Http\Controllers\IpfsController::class, 'renameFolder'])->name('rename.folder');
Route::post('folder/move', [\App\Http\Controllers\IpfsController::class, 'moveToFolder'])->name('move.folder');


Route::get('cat/{hash}', [\App\Http\Controllers\IpfsController::class, 'showFile'])->name('cat');
//Route::get('test', [\App\Http\Controllers\IpfsController::class, 'test']);
