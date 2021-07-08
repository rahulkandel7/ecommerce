<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/products/{product}', [App\Http\Controllers\HomeController::class, 'quicklook'])->name('quicklook');

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');

Route::get('/', [App\Http\Controllers\FrontController::class, 'home']);
Route::get('/shop', [App\Http\Controllers\FrontController::class, 'shop'])->name('shop');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');

Route::get('/search', [App\Http\Controllers\FrontController::class, 'search'])->name('search')->middleware('auth');
Route::get('/filter', [App\Http\Controllers\FrontController::class, 'filter'])->name('filter');
Route::get('/mens', [App\Http\Controllers\FrontController::class, 'men'])->name('men')->middleware('auth');
Route::get('/womens', [App\Http\Controllers\FrontController::class, 'women'])->name('women')->middleware('auth');
Route::get('/all-products', [App\Http\Controllers\FrontController::class, 'allProduct'])->name('allproduct')->middleware('auth');

Route::resource('favroites', App\Http\Controllers\FavroiteController::class)->middleware('auth');

Route::resource('carts', App\Http\Controllers\CartController::class)->middleware('auth');

Route::resource('orders', App\Http\Controllers\OrderController::class)->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('dashboard')->middleware('isAdmin', 'auth')->prefix('admin');
Route::middleware('auth', 'isAdmin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('orders', App\Http\Controllers\Admin\OrderController::class);
    Route::resource('users', App\Http\Controllers\Admin\UserController::class);
});

Route::get('/totalOrder', [App\Http\Controllers\Admin\OrderController::class, 'totalOrder'])->name('totalOrder')->prefix('admin/order');
Route::get('/product/search', [App\Http\Controllers\Admin\ProductController::class, 'search'])->name('admin.product.search')->prefix('admin');
Route::get('/category/search', [App\Http\Controllers\Admin\CategoryController::class, 'search'])->name('admin.category.search')->prefix('admin');
Route::get('/user/search', [App\Http\Controllers\Admin\UserController::class, 'search'])->name('admin.user.search')->prefix('admin');
