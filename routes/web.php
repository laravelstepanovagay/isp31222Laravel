<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});
//
Route::redirect('/', '/register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class])->name('register.index');
Route::get('/register', [\App\Http\Controllers\RegisterController::class])->name('register.create');
