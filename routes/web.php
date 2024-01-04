<?php

use App\Helper\Cart;
use App\Http\Controllers\Admin\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Models\Order;
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
Route::get('/gioithieu',[HomeController::class,'gioithieu'])->name('gioithieu');
Route::get('/new',[HomeController::class,'new'])->name('new');
Route::get('/tracuu',[HomeController::class,'tracuu'])->name('tracuu');
Route::get('/product/spct/{value}',[HomeController::class,'spct'])->name('spct');

//Cart
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/add-cart',[CartController::class,'add'])->name('cart.add');
Route::get('/del-cart/{productID}',[CartController::class,'delete'])->name('cart.delete');
Route::get('/delAll',[CartController::class,'deleteAll'])->name('cart.deleteAll');
Route::post('/up-cart',[CartController::class,'update'])->name('cart.update');
Route::get('/pay',[OrderController::class,'pay'])->name('cart.pay');
Route::post('/paid',[OrderController::class,'paid'])->name('cart.paid');


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