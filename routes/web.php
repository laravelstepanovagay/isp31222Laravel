<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});
//
Route::redirect('/', '/register');
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->name('register.create');
