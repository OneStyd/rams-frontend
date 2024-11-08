<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminMapController;
use App\Http\Controllers\GuestMapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Page for Guest
Route::get('/', [GuestMapController::class, 'index'])->name('index');

// Login Page
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login/api', [AuthController::class, 'login'])->name('login.api');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Map Page
Route::get('/map', [AdminMapController::class, 'index'])->name('admin.map');
Route::post('/map/download', [AdminMapController::class, 'download'])->name('admin.map.download');
Route::post('/map/jalan_utama', [AdminMapController::class, 'jalanUtama'])->name('admin.map.jalan_utama');
Route::get('/map/jalan_utama_belakang', [AdminMapController::class, 'jalanUtamaBelakang'])->name('admin.map.jalan_utama_belakang');
Route::post('/map/jalan_utama_all', [AdminMapController::class, 'jalanUtamaAll'])->name('admin.map.jalan_utama_all');

//Leger Page
Route::get('/leger', [AdminMapController::class, 'leger'])->name('admin.leger');

// Input Page
Route::get('/input/ruas', [InputController::class, 'ruas'])->name('input.ruas');
Route::post('/input/ruas/store', [InputController::class, 'storeRuas'])->name('input.ruas.store');
Route::get('/input/aset', [InputController::class, 'aset'])->name('input.aset');
Route::post('/input/aset/store', [InputController::class, 'storeAset'])->name('input.aset.store');