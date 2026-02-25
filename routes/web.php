<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuickRequestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BaseController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/catalog', [ProductController::class, 'test'])->name('catalog');
Route::post('/quick-request', [App\Http\Controllers\QuickRequestController::class, 'store'])->name('quick-request');
