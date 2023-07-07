<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\CreatePendudukController;
use App\Http\Controllers\KeteranganUmumController;
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

Route::get('/dashboard/ket_umum', [KeteranganUmumController::class, 'index'])->name('dashboard.ket_umum.index');
Route::get('/ket.domisili', function () {
    return view('dashboard.administrasi.ket_domisili');
});