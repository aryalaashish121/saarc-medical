<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Membercontroller;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\UserController;
use App\Models\Member;
use App\Models\MembershipType;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/health-workers', function () {
    return view('healthWorkers');
})->name('health-workers');

Route::get('/previewUserDashboard', function () {
    return view('userDashboard');
})->name('user-Dashboard');

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');

Route::get('/resource', function () {
    return view('resource');
})->name('resource');

// Route::resource('members', [Membercontroller::class]);
Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('admin', AdminController::class);
    });
});
//country data
Route::get('get-country-data', [CountryController::class, 'index']);
Route::get('/members/data', [Membercontroller::class, 'index']);
Route::get('/members/trash', [Membercontroller::class, 'trash']);
Route::get('/members/{id}', [Membercontroller::class, 'show']);
Route::get('members/restore/{id}', [Membercontroller::class, 'restore']);
Route::get('/members/{id}/edit', [Membercontroller::class, 'edit']);

Route::post('/members/manage', [Membercontroller::class, 'manageMemberRequest']);
Route::post('update-member-status', [Membercontroller::class, 'updateStatus']);

Route::delete('/members/{id}', [Membercontroller::class, 'destroy']);
Route::delete('/members/trash/{id}', [Membercontroller::class, 'deletePermanently']);
//state
Route::get('/get-state-data', [StateController::class, 'index']);
Route::get('/get-district-data', [DistrictController::class, 'index']);
Route::get('/get-membership-type-data', [MembershipTypeController::class, 'index']);

Route::post('/members/apply', [Membercontroller::class, 'store']);
Route::put('/members/edit/{id}', [Membercontroller::class, 'update']);

Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('check-user', [UserController::class, 'index']);
Route::post('/media', [ImageController::class, 'store']);
Route::post('/uploadImage', [ImageController::class, 'handleUpload']);

Route::get('/test', [Membercontroller::class, 'create']);
Route::get('/getmedia', [ImageController::class, 'getMedia']);

Route::put('members/payment/{id}', [Membercontroller::class, 'addPayment']);
