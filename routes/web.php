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

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin'],function (){
    Route::get('home',[AdminController::class, 'index'])->name('dashboard');
});


Route::group(['as'=>'user.','prefix'=>'user', 'namespace'=>'User'],function (){
    Route::get('home',[UserController::class, 'index'])->name('dashboard');
});