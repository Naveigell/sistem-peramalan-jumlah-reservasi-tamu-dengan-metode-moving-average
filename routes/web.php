<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');
Route::get('/home', fn() => 'at home')->name('home');

Route::name('auth.')->prefix('auth')->group(function () {
    Route::name('login.')->prefix('login')->group(function () {
        Route::post('/', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('store');
        Route::view('/', 'auth.login')->name('index');
    });

    Route::match(['get', 'post'], 'logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
});
