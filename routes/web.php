<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('base.base');
});
Route::get('/product', function () {
    return view('products.index');
});
