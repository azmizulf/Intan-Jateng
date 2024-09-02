<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index-jagung', function () {
    return view('index-jagung');
});

Route::get('/index-ubin', function () {
    return view('index-ubin');
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

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('/riwayat-jagung', function () {
    return view('riwayat-jagung');
});

Route::get('/unggah-jagung', function () {
    return view('unggah-jagung');
});

Route::get('/kondef-jagung', function () {
    return view('kondef-jagung');
});

Route::get('/panduan-jagung', function () {
    return view('panduan-jagung');
});

Route::get('/validasi-jagung', function () {
    return view('validasi-jagung');
});

Route::get('/potensi-ubin', function () {
    return view('potensi-ubin');
});

Route::get('/unggah-ubin', function () {
    return view('unggah-ubin');
});

Route::get('/riwayat-ubin', function () {
    return view('riwayat-ubin');
});