<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});

route::get('/home', [Homecontroller::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');
