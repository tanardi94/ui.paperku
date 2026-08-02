<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::view('/services', 'services');
Route::view('/products', 'products');
