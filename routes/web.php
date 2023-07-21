<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\DashboardKetUmumController;
use App\Http\Controllers\DashboardDomisiliController;
use App\Http\Controllers\DashboardPendudukController;

Route::get('/datapenduduk', [DataPendudukController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/dashboard', function(){
    return view ('dashboard.index');
    });

// Route untuk Data Penduduk
Route::get('/dashboard/penduduk', [DashboardPendudukController::class, 'index'])->name('dashboard.penduduk.index');

Route::get('/creatependuduk', [DashboardPendudukController::class, 'create'])->name('dashboard.penduduk.create');

Route::post('/dashboard/penduduk', [DashboardPendudukController::class, 'store'])->name('dashboard.penduduk.store');

Route::get('/dashboard/penduduk/{penduduk}/edit', [DashboardPendudukController::class, 'edit'])->name('dashboard.penduduk.edit');

Route::put('/dashboard/penduduk/{penduduk}', [DashboardPendudukController::class, 'update'])->name('dashboard.penduduk.update');

Route::delete('/dashboard/penduduk/{penduduk}', [DashboardPendudukController::class, 'destroy'])->name('dashboard.penduduk.destroy');

// Route untuk Keterangan Umum
Route::get('/dashboard/df_surat_umum', [DashboardKetUmumController::class, 'index'])->name('dashboard.keteranganumum.index');

Route::get('/dashboard/create_umum', [DashboardKetUmumController::class, 'create'])->name('dashboard.keteranganumum.create');

Route::post('/dashboard/keteranganumum', [DashboardKetUmumController::class, 'store'])->name('dashboard.keteranganumum.store');

Route::get('/dashboard/keteranganumum/{keteranganUmum}/edit', [DashboardKetUmumController::class, 'edit'])->name('dashboard.keteranganumum.edit');
Route::put('/dashboard/keteranganumum/{keteranganUmum}', [DashboardKetUmumController::class, 'update'])->name('dashboard.keteranganumum.update');

Route::delete('/dashboard/keteranganumum/{keteranganUmum}', [DashboardKetUmumController::class, 'destroy'])->name('dashboard.keteranganumum.destroy');

// Route untuk Keterangan Domisili
Route::get('/dashboard/df_surat_domisili', [DashboardDomisiliController::class, 'index'])->name('dashboard.administrasi.index');

Route::get('/dashboard/create_domisili', [DashboardDomisiliController::class, 'create'])->name('dashboard.administrasi.create_domisili');

Route::post('/dashboard/administrasi', [DashboardDomisiliController::class, 'store'])->name('dashboard.administrasi.store');

Route::get('/dashboard/administrasi/{id}/edit', [DashboardDomisiliController::class, 'edit'])->name('dashboard.administrasi.edit');

Route::put('/dashboard/administrasi/{id}', [DashboardDomisiliController::class, 'update'])->name('dashboard.administrasi.update');

Route::delete('/dashboard/administrasi/{id}', [DashboardDomisiliController::class, 'destroy'])->name('dashboard.administrasi.destroy');

Route::get('/dashboard/administrasi/export/{id}', [DashboardDomisiliController::class, 'export'])->name('dashboard.administrasi.export');
