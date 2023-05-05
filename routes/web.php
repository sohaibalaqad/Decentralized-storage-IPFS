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


Route::middleware('auth:user')->group(function () {

    Route::get('/', function () {
        $files = \App\Models\File::all();
        return view('dashboard.index', compact('files'));
    });

    Route::get('/get-files', function (){
        $files = \App\Models\File::all();
        return $files;
    });
});


