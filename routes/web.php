<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/riwayat', function () {
    return view('riwayat');
});

Route::get('/unggah', function () {
    return view('unggah');
});

Route::get('/kondef', function () {
    return view('kondef');
});

Route::get('/panduan', function () {
    return view('panduan');
});
