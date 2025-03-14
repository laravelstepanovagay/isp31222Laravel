<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('index');
//});
//
Route::redirect('/', '/register');

Route::middleware('guest')->group(function () {
    Route::prefix('/register')->name('register.')->group(function () {

    Route::get('/', [\App\Http\Controllers\RegisterController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\RegisterController::class, 'create'])->name('create');
});
    Route::prefix('/login')->name('login.')->group(function () {
        Route::get('/', [\App\Http\Controllers\LoginController::class, 'index'])->name('index');
        Route::post('/', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


Route::prefix('/profile')->name('profile.')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
    Route::post('/password/update', [ProfileController::class, "updatePassword"])->name('password.change');
});
});

