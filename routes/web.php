<?php

use App\Http\Controllers\BaseController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuickRequestController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BaseController::class, 'index'])->name('home');
Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')->header('Content-Type', 'application/xml');
})->name('sitemap');
Route::get('/products', [ProductController::class, 'index'])->name('product');
Route::get('/catalog', [ProductController::class, 'test'])->name('catalog');
Route::post('/quick-request', [QuickRequestController::class, 'store'])->name('quick-request');
Route::post('/order', [OrderController::class, 'store'])->name('order');
