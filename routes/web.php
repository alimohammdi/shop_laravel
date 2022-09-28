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
Route::get('/',[\App\Http\Controllers\front\FrontController::class,'frontProduct']);

// Cart
Route::resource('cart',\App\Http\Controllers\front\CartController::class)->parameters(['cart'=>'id']);
//----------------------------------------------------------------------->>>>>

// products page
Route::get('Products-page',[\App\Http\Controllers\ProductFrontController::class,'allProducts'])->name('all.products.page');
Route::get('single-product/{product}',[\App\Http\Controllers\ProductFrontController::class,'showSingleProduct'])->name('single.products');
Route::post('send-comment',[\App\Http\Controllers\ProductFrontController::class,'sendComment'])->name('send.comment');
//----------------------------------------------------------------------->>>>>

// profile
Route::group(['prefix'=>"profile",'middleware'=>'auth'],function () {
    Route::get('/',[\App\Http\Controllers\front\profileController::class,'index'])->name('profile.home');
});
//----------------------------------------------------------------------->>>>>


// tow factor user
Route::get('towfactore',[\App\Http\Controllers\front\profileController::class,'towfactore'])->name('profile.towfactore');
Route::post('towfactore',[\App\Http\Controllers\front\profileController::class,'towfactoreAuth'])->name('request.towfactore');
Route::get('verify_phone_number',[\App\Http\Controllers\front\profileController::class,'verifyPage'])->name('verify.index');
route::post('verify_phone_number',[\App\Http\Controllers\front\profileController::class,'verifyPhoneNumber'])->name('verify.phone.number');
//----------------------------------------------------------------------->>>>>


// token code for authenticated
Route::get('send-token-code',[\App\Http\Controllers\Auth\AuthTokenController::class,'indexPage'])->name('send-token-code');
Route::post('send-token-code',[\App\Http\Controllers\Auth\AuthTokenController::class,'postToken']);
//----------------------------------------------------------------------->>>>>



//ADMIN

Route::middleware(['auth','auth.admin'])->prefix('/dashboard')->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard.home');
    //       Manage Users
    Route::resource('users',\App\Http\Controllers\Admin\UsersController::class)->parameters(['users'=>'id']);

    //     Manage Products
    Route::resource('products',\App\Http\Controllers\Admin\ProductController::class)->parameters(['products'=>'id']);


    //      Manage Comment
    Route::resource('comment',\App\Http\Controllers\Admin\CommentsController::class)->parameters(['comment'=>'id']);


    //    Manage Category
    Route::resource('category',\App\Http\Controllers\Admin\CategoryController::class)->parameters(['category'=>'id']);
//   Manage  Attribute
    Route::resource('attribute',\App\Http\Controllers\Admin\AttributeController::class)->parameters(['attribute'=>'id']);
    Route::get('attribute/value/{id}',[ App\Http\Controllers\Admin\AttributeController::class,'getAddValue' ])->name('attribute.get.value');
    Route::post('attribute/add-value/{id}',[ App\Http\Controllers\Admin\AttributeController::class,'postAddValue' ])->name('attribute.add.value');
    Route::delete('attribute/delete/{id}',[\App\Http\Controllers\Admin\AttributeController::class,'destroyValue'])->name('attribute.delete.value');
});
//----------------------------------------------------------------------->>>>>

// route auth
Auth::routes();
// google account
Route::get('/auth/redirect',[\App\Http\Controllers\Auth\GoogleAuthController::class,'redirect'])->name('google.redirect');
Route::get('/auth/google/callback',[\App\Http\Controllers\Auth\GoogleAuthController::class,'callback'])->name('google.callback');
