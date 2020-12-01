<?php

use App\Http\Controllers\Admin\AdminController;


use App\Http\Controllers\User\UserController;
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

//Admin route
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin'],function (){
    Route::get('home',[AdminController::class, 'index'])->name('dashboard');
    Route::resource('tags', '\App\Http\Controllers\Admin\TagController');
    Route::resource('roles', '\App\Http\Controllers\Admin\RoleController');
    Route::resource('categories', '\App\Http\Controllers\Admin\CategoryController');
    Route::resource('follower', '\App\Http\Controllers\Admin\FollowerController');
    Route::resource('social', '\App\Http\Controllers\Admin\SocialController');
    Route::resource('about', '\App\Http\Controllers\Admin\AboutController');


});

//User route
Route::group(['as'=>'user.','prefix'=>'user', 'namespace'=>'User'],function (){
    Route::get('home',[UserController::class, 'index'])->name('dashboard');

});
