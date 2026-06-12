<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoothController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BoothController::class, 'home'])->name('home');
Route::get('/catalog', [BoothController::class, 'catalog'])->name('catalog');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [BoothController::class, 'customerDashboard'])->name('customer.dashboard')->middleware('auth');
Route::post('/reservations', [BoothController::class, 'storeReservation'])->name('reservations.store')->middleware('auth');
Route::get('/admin/dashboard', [BoothController::class, 'adminDashboard'])->name('admin.dashboard');
