<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\CreatePendudukController;
use App\Http\Controllers\DashboardUsahaController;
use App\Http\Controllers\KeteranganUmumController;
use App\Http\Controllers\DashboardRekBbmController;
use App\Http\Controllers\DashboardKetUmumController;
use App\Http\Controllers\DashboardDomisiliController;
use App\Http\Controllers\DashboardPendudukController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/datapenduduk', [DataPendudukController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/dashboard', function(){
    return view ('dashboard.index');
    });

Route::resource('/dashboard/penduduk', DashboardPendudukController::class);
Route::post('/dashboard/penduduk', [DashboardPendudukController::class, 'store'])->name('dashboard.penduduk.store');
Route::get('/dashboard/penduduk', [DashboardPendudukController::class, 'index'])->name('dashboard.penduduk.index');
Route::get('/dashboard/penduduk/{penduduk}/edit', [DashboardPendudukController::class, 'edit'])->name('dashboard.penduduk.edit');
Route::post('/dashboard/penduduk/{penduduk}/edit', [DashboardPendudukController::class, 'edit'])->name('dashboard.penduduk.edit');
Route::put('/dashboard/penduduk/{penduduk}', [DashboardPendudukController::class, 'update'])->name('dashboard.penduduk.update');
Route::delete('/dashboard/penduduk/{penduduk}', [DashboardPendudukController::class, 'destroy'])->name('dashboard.penduduk.destroy');
Route::get('/creatependuduk', [DashboardPendudukController::class, 'create'])->name('dashboard.penduduk.create');

Route::resource('/dashboard/df_surat_umum', DashboardKetUmumController::class);
Route::get('/dashboard/create_umum', [DashboardKetUmumController::class, 'create'])->name('dashboard.administrasi.create');

Route::resource('/dashboard/df_surat_domisili', DashboardDomisiliController::class);
Route::post('/dashboard/administrasi', [DashboardDomisiliController::class, 'store'])->name('dashboard.administrasi.store');
Route::get('/dashboard/domisili', [DashboardDomisiliController::class, 'index'])->name('dashboard.administrasi.index');
Route::get('/dashboard/create_domisili', [DashboardDomisiliController::class, 'create'])->name('dashboard.administrasi.create');
Route::get('/dashboard/administrasi/{domisili}/edit', [DashboardDomisiliController::class, 'edit'])->name('dashboard.administrasi.edit');
Route::post('/dashboard/administrasi/{domisili}/edit', [DashboardDomisiliController::class, 'edit'])->name('dashboard.administrasi.edit');
Route::put('/dashboard/administrasi/{domisili}', [DashboardDomisiliController::class, 'update'])->name('dashboard.administrasi.update');
Route::delete('/dashboard/administrasi/{domisili}', [DashboardDomisiliController::class, 'destroy'])->name('dashboard.administrasi.destroy');


Route::resource('/dashboard/df_surat_usaha', DashboardUsahaController::class);
Route::get('/dashboard/create_usaha', [DashboardUsahaController::class, 'create'])->name('dashboard.administrasi.create');

Route::resource('/dashboard/df_surat_bbm', DashboardRekBbmController::class);
Route::get('/dashboard/create_bbm', [DashboardRekBbmController::class, 'create'])->name('dashboard.administrasi.create');

Route::get('/tampilan_domisili', function(){
    return view ('dashboard.administrasi.tampilan_domisili');
});