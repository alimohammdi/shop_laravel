<?php

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



// FRONT
Route::get('/', function () {
    return view('front.index');
});
// profile

Route::group(['prefix'=>"profile",'middleware'=>'auth'],function () {
    Route::get('/',[\App\Http\Controllers\front\profileController::class,'index'])->name('profile.home');
});
// tow factor user
Route::get('towfactore',[\App\Http\Controllers\front\profileController::class,'towfactore'])->name('profile.towfactore');
Route::post('towfactore',[\App\Http\Controllers\front\profileController::class,'towfactoreAuth'])->name('request.towfactore');
Route::get('verify_phone_number',[\App\Http\Controllers\front\profileController::class,'verifyPage'])->name('verify.index');
route::post('verify_phone_number',[\App\Http\Controllers\front\profileController::class,'verifyPhoneNumber'])->name('verify.phone.number');



// token code for authenticated
Route::get('send-token-code',[\App\Http\Controllers\Auth\AuthTokenController::class,'indexPage'])->name('send-token-code');
Route::post('send-token-code',[\App\Http\Controllers\Auth\AuthTokenController::class,'postToken']);




//ADMIN

Route::middleware(['auth','auth.admin'])->prefix('/dashboard')->group(function () {
    //       Manage Users
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.home');
    Route::resource('users',\App\Http\Controllers\Admin\UsersController::class)->parameters(['users'=>'id']);
});


// route auth
Auth::routes();
// google account
Route::get('/auth/redirect',[\App\Http\Controllers\Auth\GoogleAuthController::class,'redirect'])->name('google.redirect');
Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\GoogleAuthController::class,'callback'])->name('google.callback');
