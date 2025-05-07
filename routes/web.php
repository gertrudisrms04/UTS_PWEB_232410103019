<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengelolaanController;

Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login'); })->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pengelolaan', [PengelolaanController::class, 'index'])->name('pengelolaan');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
