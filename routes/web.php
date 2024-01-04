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
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');
Route::get('/product/{value}',[HomeController::class,'show'])->name('show.product');

Route::prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index'])->name('admin.index');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::post('/login',[AdminController::class,'login'])->name('admin.login');
    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
    Route::resource('category',CategoryController::class);
    Route::resource('product',ProductController::class);
    Route::post('/product/find',[ProductController::class,'find'])->name('product.find');
    Route::resource('account',AccountController::class);
});