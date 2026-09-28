<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/nama/{param1}', function ($Naila) {
    return 'Nama saya: '.$Naila;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301091') {
    return 'NIM saya: '.$param1;
});

Route::get('/mahasiswa/{param1}', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

