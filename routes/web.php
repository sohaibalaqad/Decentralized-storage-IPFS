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
    $files = \App\Models\File::all();
    return $files;
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
});

Route::get('/', function (){
    return view('welcome');
});
