<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/cashier', function () {
    return view('cashier');
});

Route::get('/chef', function () {
    return view('chef');
});

Route::get('/customer', function () {
    return view('customer');
});
