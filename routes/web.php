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

Route::get('/datapenduduk', [DataPendudukController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);

Route::get('/datapenduduk/creatependuduk', [DataPendudukController::class, 'store']);
Route::get('/creatependuduk', [DataPendudukController::class, 'create']);
Route::get('/editpenduduk', [DataPendudukController::class, 'edit']);
Route::get('/datapenduduk/creatependuduk', 'DataPendudukController@create')->name('datapenduduk.creatependuduk');
Route::get('datapenduduk/{nik}/edit', 'DataPendudukController@edit')->name('datapenduduk.edit');

Route::get('/dashboard', function(){
    return view ('dashboard.index');
    });

Route::resource('/dashboard/penduduk', DashboardPendudukController::class);