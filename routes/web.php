<?php

use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('User.home');
});

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