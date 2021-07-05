<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\Membercontroller;
use App\Http\Controllers\MembershipTypeController;
use App\Http\Controllers\StateController;
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
// Route::resource('members', [Membercontroller::class]);
Route::group(['middleware'=>'auth'], function(){

Route::group(['prefix'=>'admin','as'=>'admin.',], function(){
Route::resource('admin', AdminController::class);
});
});
//country data
Route::get('get-country-data',[CountryController::class,'index']);
// Route::resource('/members', [Membercontroller::class]);
Route::get('/members',[Membercontroller::class, 'index']);
Route::get('/members/trash',[Membercontroller::class, 'trash']);
Route::get('/members/{id}',[Membercontroller::class, 'show']);
Route::get('members/restore/{id}',[Membercontroller::class,'restore']);

Route::post('/members/manage', [Membercontroller::class,'manageMemberRequest'] );
Route::post('update-member-status',[Membercontroller::class,'updateStatus']);

Route::delete('/members/{id}',[Membercontroller::class,'destroy']);
Route::delete('/members/trash/{id}',[Membercontroller::class,'deletePermanently']);
//state
Route::get('/get-state-data',[StateController::class,'index']);
Route::get('/get-district-data',[DistrictController::class,'index']);
Route::get('/get-membership-type-data',[MembershipTypeController::class,'index']);

Route::post('/members/apply',[Membercontroller::class,'store']);
Route::get('/logout', [LogoutController::class,'logout']);