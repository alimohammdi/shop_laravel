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



//ADMIN
Route::middleware('auth')->prefix('/panel')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});


// route auth
Auth::routes();
// google account
Route::get('/auth/redirect',[\App\Http\Controllers\Auth\GoogleAuthController::class,'redirect'])->name('google.redirect');
Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\GoogleAuthController::class,'callback'])->name('google.callback');
