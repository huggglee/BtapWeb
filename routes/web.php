<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;

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


//User
Route::get('/',[HomeController::class, 'index'])->name('index');
Route::get('/login',[UserController::class,'login'])->name('user.login');
Route::post('/login',[Usercontroller::class,'postLogin'])->name('postLogin');
Route::get('/register',[UserController::class,'register'])->name('user.register');
Route::post('/register',[Usercontroller::class,'postRegister'])->name('postRegister');
Route::get('/list-1',[Usercontroller::class,'list_1'])->name('list-1');
Route::get('/list-2',[Usercontroller::class,'list_2'])->name('list-2');
Route::get('/list-3',[Usercontroller::class,'list_3'])->name('list-3');
Route::get('/list-4',[Usercontroller::class,'list_4'])->name('list-4');
Route::get('/list-5',[Usercontroller::class,'list_5'])->name('list-5');
Route::get('/gioithieu',[Usercontroller::class,'gioithieu'])->name('gioithieu');
Route::get('/new',[Usercontroller::class,'new'])->name('new');
Route::get('/tracuu',[Usercontroller::class,'tracuu'])->name('tracuu');
Route::get('/spct',[Usercontroller::class,'spct'])->name('spct');
Route::get('/pay',[Usercontroller::class,'pay'])->name('pay');
Route::get('/form',[Usercontroller::class,'form'])->name('form');







Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/order',[AdminController::class,'order'])->name('admin.order');
    Route::post('/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::post('/product/find',[ProductController::class,'find'])->name('product.find');
    Route::resource('account',AccountController::class);
});