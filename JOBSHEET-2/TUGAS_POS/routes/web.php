<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/menu', [MenuController::class, 'halaman']);

Route::prefix('/menu')->group(function () {
    Route::get('/food', [MenuController::class, 'food']);
    Route::get('/beauty', [MenuController::class, 'beauty']);
    Route::get('/kid', [MenuController::class, 'kid']);
    Route::get('/home', [MenuController::class, 'home']);
    Route::get('/profil/{id}/{name}', [MenuController::class, 'profil']);
    Route::get('/transaksi/{transaksi?}', [MenuController::class, 'transaksi']);
});