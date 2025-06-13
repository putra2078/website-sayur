<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/setting', function () {
    return view('setting');
});

Route::get('/map', function() {
    return view('map');
});

Route::get('/virtual_account', function () {
    return view('virtual_account');
});

Route::get('/e-wallet', function() {
    return view('e-wallet');
});

Route::get('/convenience', function() {
    return view('convenience');
});

Route::get('/pembayaran', function() {
    return view('pembayaran');
});

Route::get('/e-wallet-payment', function() {
    return view('e-wallet-payment');
});