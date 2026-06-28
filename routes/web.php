<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('v_dashboard');
});

Route::get('/DataHp', function () {
    return view('v_datahp');
});

Route::get('/Penjualan', function () {
    return view('v_penjualan');
});

Route::get('/Servis', function () {
    return view('v_servis');
});

Route::get('/Laporan', function () {
    return view('v_laporan');
});

Route::get('/Manajemen', function () {
    return view('v_manajemen');
});