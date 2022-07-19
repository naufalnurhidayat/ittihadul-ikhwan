<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\UtilityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['guest'])->group(function () {
    // User
    Route::get('/', [UserController::class, 'index']);
    Route::get('/login', [UserController::class, 'login'])->name('login');
    Route::post('/login', [UserController::class, 'loginHandle']);
});

Route::middleware(['auth'])->group(function () {
    Route::middleware(['checkRole:Admin'])->group(function () {
        // Admin
        Route::get('/admin', [AdminController::class, 'index']);
        Route::post('/logout', [UserController::class, 'logout']);

        // Agenda
        Route::get('/admin/agenda', [KegiatanController::class, 'index']);
        Route::get('/admin/agenda/tambah', [KegiatanController::class, 'create']);
        Route::post('/admin/agenda/tambah', [KegiatanController::class, 'store']);
        Route::get('/admin/agenda/detail/{id}', [KegiatanController::class, 'show']);
        Route::get('/admin/agenda/ubah/{id}', [KegiatanController::class, 'edit']);
        Route::patch('/admin/agenda/ubah/{id}', [KegiatanController::class, 'update']);
        Route::delete('/admin/agenda/hapus/{id}', [KegiatanController::class, 'destroy']);

        // Laporan
        Route::get('/admin/laporan', [LaporanController::class, 'index']);
        Route::get('/admin/laporan/tambah', [LaporanController::class, 'create']);
        Route::post('/admin/laporan/tambah', [LaporanController::class, 'store']);
        Route::get('/admin/laporan/detail/{id}', [LaporanController::class, 'show']);
        Route::get('/admin/laporan/ubah/{id}', [LaporanController::class, 'edit']);
        Route::patch('/admin/laporan/ubah/{id}', [LaporanController::class, 'update']);
        Route::delete('/admin/laporan/hapus/{id}', [LaporanController::class, 'destroy']);

        // Lainnya
        Route::get('/admin/lainnya', [UtilityController::class, 'index']);
        Route::get('/admin/lainnya/tambah', [UtilityController::class, 'create']);
        Route::post('/admin/lainnya/tambah', [UtilityController::class, 'store']);
        Route::get('/admin/lainnya/detail/{id}', [UtilityController::class, 'show']);
        Route::get('/admin/lainnya/ubah/{id}', [UtilityController::class, 'edit']);
        Route::patch('/admin/lainnya/ubah/{id}', [UtilityController::class, 'update']);
        Route::delete('/admin/lainnya/hapus/{id}', [UtilityController::class, 'destroy']);

        // Akun
        Route::get('/admin/akun', [AdminController::class, 'show']);
        Route::get('/admin/akun/ubah', [AdminController::class, 'edit']);
        Route::patch('/admin/akun/ubah', [AdminController::class, 'update']);
        Route::get('/admin/registrasi', [AdminController::class, 'create']);
        Route::post('/admin/registrasi', [AdminController::class, 'store']);
    });
});
