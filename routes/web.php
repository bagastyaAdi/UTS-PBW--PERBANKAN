<?php

use App\Http\Controllers\Admin\DashboaradController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pegawai\DashboaradController as PegawaiDashboaradController;
use App\Http\Controllers\NasabahController;
use Illuminate\Support\Facades\Route;

Route::post('/',[AuthController::class,'login_action']);
Route::get('/', [AuthController::class,'index'])->name('login');
Route::get('/logout',[AuthController::class,'index'])->name('logout');

Route::get('/admin/dashboard', [DashboaradController::class, 'index'])->name('admin.dashboard');

Route::get('/pegawai/dashboard', [PegawaiDashboaradController::class, 'index'])->name('pegawai.dashboard');

Route::get('/admin/nasabah/daftar_nasabah', [NasabahController::class, 'index'])->name('daftar');

