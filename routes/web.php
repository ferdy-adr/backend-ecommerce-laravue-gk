<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\ProductController;
use \App\Http\Controllers\ProductGalleryController;
use \App\Http\Controllers\TransactionController;

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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Product
Route::get('/product/{id}/gallery', [ProductController::class, 'gallery'])->name('product.gallery');
Route::resource('product', ProductController::class);


// Product Gallery
Route::resource('product-gallery', ProductGalleryController::class);


// Transaction
Route::get('/transaction/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transaction.status'); // set Status
Route::resource('transaction', TransactionController::class);


Auth::routes(['register' => false]);
