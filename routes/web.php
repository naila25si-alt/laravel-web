<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/home', [Homecontroller::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

route::get('/home-question-respon', function(){
    return view('home-question-respon');
}) -> name('home-question-respon');

route::get('dashboard', [DashboardController::class, 'index']) ->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
