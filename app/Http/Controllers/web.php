<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/jenis-product', [ProductController::class, 'index'])->name('jenis.product');
Route::get('/jenis-product/{id}', [ProductController::class, 'detailJenis'])->name('jenis.detail');
Route::get('/product/{id}', [ProductController::class, 'detailProduct'])->name('product.detail');
Route::get('/pembayaran', [ProductController::class, 'pembayaran'])->name('pembayaran');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');