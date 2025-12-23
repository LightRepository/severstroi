<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BaseController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/catalog', [ProductController::class, 'test'])->name('catalog');
