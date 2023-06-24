<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\CreatePendudukController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/coba', function () {
    return view('coba');
});

Route::get('/datapenduduk', [DataPendudukController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/creatependuduk', [CreatePendudukController::class, 'index']);
Route::get('/datapenduduk/creatependuduk', [DataPendudukController::class, 'create']);
Route::get('/datapenduduk/creatependuduk', 'DataPendudukController@create')->name('datapenduduk.creatependuduk');
Route::post('/datapenduduk', 'DataPendudukController@store')->name('datapenduduk.store');

Route::get('/datapenduduk', [DataPendudukController::class, 'index'])->name('index');
Route::get('/datapenduduk/create', [DataPendudukController::class, 'create'])->name('datapenduduk.create');
Route::post('/datapenduduk', [DataPendudukController::class, 'store'])->name('datapenduduk.store');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard/index', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/dashboard/penduduk', DashboardPendudukController::class);

Route::get('/tambahwarga', 'DataController@create')->name('data.create');

// Route::get('/profile', 'ProfileController@index')->name('profile');
