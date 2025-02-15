<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/playing', [UserController::class, 'playing'])->name('playing');
Route::get('/coming', [UserController::class, 'coming'])->name('coming');
Route::get('/detail', [UserController::class, 'detail'])->name('detail');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
