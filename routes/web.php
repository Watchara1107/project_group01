<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SellerController;
use App\Http\Controllers\Admin\UserController;
use App\Models\Product;
use App\Models\Seller;
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
    return view('welcome')
    ->with("seller", Seller::all())
    ->with("product", Product::all());
});
Route::get('/seller', function () {
    return view('forntend.seller')
    ->with("seller", Seller::all());
});
Route::get('/product', function () {
    return view('forntend.product')
    ->with("product", Product::all());
});
Route::get('/contact', function () {
    return view('forntend.contact');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user
Route::get('/admin/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/admin/user/update/{id}', [UserController::class, 'update']);
Route::get('/admin/user/delete/{id}', [UserController::class, 'delete']);


//product
Route::get('/admin/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/admin/product/insert', [ProductController::class, 'insert'])->name('product.insert');
Route::post('/admin/product/update/{id}', [ProductController::class, 'update']);
Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit']);
Route::get('/admin/product/delete/{id}', [ProductController::class, 'delete']);

//seller
Route::get('/admin/seller/index', [SellerController::class,'index'])->name('seller.index');
Route::get('/admin/seller/create', [SellerController::class,'create'])->name('seller.create');
Route::post('/admin/seller/insert', [SellerController::class,'insert'])->name('seller.insert');
Route::post('/admin/seller/update/{id}', [SellerController::class, 'update']);
Route::get('/admin/seller/edit/{id}', [SellerController::class, 'edit']);
Route::get('/admin/seller/delete/{id}', [SellerController::class,'delete']);