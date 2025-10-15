<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class);
Route::get('/signup', [SignupController::class, 'create'])->name('signup');
Route::get('/login', [SigninController::class, 'create'])->name('login');
