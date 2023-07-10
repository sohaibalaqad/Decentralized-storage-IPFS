<?php

use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\UserController;
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
         $files = \App\Models\File::where('folder_id', null)->orderBy('created_at', 'desc')->get();
         $folders = \App\Models\Folder::where('parent_id', null)->orderBy('created_at', 'desc')->get();
         return view('dashboard.Files', compact('files', 'folders'));
     })->name('Files');


     Route::get('/dashboard/user/settings', function () {
        return view('dashboard.settings');
    })->name('user_settings');

        // partner Routes
        Route::get('partner/dashboard', function () {
            return view('PartnerDashboard.index');
        })->name('partner_dashboard');

        Route::get('partner/nodes', function () {
            $nodes = \App\Models\Node::orderBy('created_at', 'desc')->get();
            return view('PartnerDashboard.nodes.index', compact('nodes'));
        })->name('nodes');

        Route::get('/partner/nodes/show', function () {
            return view('PartnerDashboard.nodes.show');
        })->name('nodes.show');

        Route::get('partner/getStart', function () {
            return view('PartnerDashboard.GetStarted');
        })->name('get_start');

        Route::get('partner/documentation', function () {
            return view('PartnerDashboard.documentation');
        })->name('documentation');



        // Admin Routes
        Route::get('/admin/dashboard', function () {

            return view('AdminDashboard.index');
        })->name('admin_dashboard');
        // Admin Users
        Route::resource('/admin/users', UserController::class);
         // Admin Partner
         Route::resource('/admin/partner', PartnerController::class);


        // Route::get('/admin/users/show', function () {
        //     return view('AdminDashboard.users.show');
        // })->name('admin_users_show');


        // Route::get('/partner/getStart', function () {
        //     return view('PartnerDashboard.GetStarted');
        // })->name('get_start');

        // Route::get('/partner/documentation', function () {
        //     return view('PartnerDashboard.documentation');
        // })->name('documentation');




 });

Route::get('/', function (){
    return view('welcome');
})->name('welcome');


Route::get('/folders/{id}', [\App\Http\Controllers\IpfsController::class, 'showFolder'])->name('folder.show');

Route::get('test', function (){


    $ip = '217.147.1.37';
    $community = 'public';

    $allocationUnitsOid = '1.3.6.1.2.1.25.2.3.1.4';
    $sizeOid = '1.3.6.1.2.1.25.2.3.1.5';
    $usedOid = '1.3.6.1.2.1.25.2.3.1.6';

    $session = new SNMP(SNMP::VERSION_2C, $ip, $community);
    $session->oid_output_format = SNMP_OID_OUTPUT_NUMERIC;
    $session->quick_print = true;

    $allocationUnits = array_sum($session->walk($allocationUnitsOid));
    $size = array_sum($session->walk($sizeOid));
    $used = array_sum($session->walk($usedOid));

//    dd($session->walk('1.3.6.1.2.1.25.2.3.1.3'));

    // Calculate disk information
    $diskSize = $allocationUnits * $size;
    $freeSpace = ($allocationUnits * $size) - ($allocationUnits * $used);

    $session->close();
    // Output the results
    return [
        'diskSize' => number_format($diskSize / 1024 /1024 / 1024, 2, '.', ''),
        'freeSpace' => number_format($freeSpace / 1024 /1024 / 1024, 2, '.', ''),
    ];




});
