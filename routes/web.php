<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\DashboardUsahaController;
use App\Http\Controllers\DashboardBeritaController;
use App\Http\Controllers\DashboardRekBbmController;
use App\Http\Controllers\DashboardKetUmumController;
use App\Http\Controllers\DashboardDomisiliController;
use App\Http\Controllers\DashboardPendudukController;
use App\Http\Controllers\DashboardKelahiranController;

Route::get('/datapenduduk', [DataPendudukController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);
// Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function(){
    return view ('dashboard.index');
    });

//Route untuk Home
Route::get('/', [HomeController::class, 'index'])->name('home.berita');
Route::get('/semua-berita', [HomeController::class, 'semuaBerita'])->name('semua-berita');
Route::get('/berita/show-berita/{id}', [HomeController::class, 'show'])->name('berita.show');


// Route untuk Data Penduduk
Route::get('/dashboard/penduduk', [DashboardPendudukController::class, 'index'])->name('dashboard.penduduk.index');
Route::get('/creatependuduk', [DashboardPendudukController::class, 'create'])->name('dashboard.penduduk.create');
Route::post('/dashboard/penduduk', [DashboardPendudukController::class, 'store'])->name('dashboard.penduduk.store');
Route::get('/dashboard/penduduk/{nik}/edit', [DashboardPendudukController::class, 'edit'])->name('dashboard.penduduk.edit');
Route::put('/dashboard/penduduk/{nik}', [DashboardPendudukController::class, 'update'])->name('dashboard.penduduk.update');
Route::delete('/dashboard/penduduk/{nik}', [DashboardPendudukController::class, 'destroy'])->name('dashboard.penduduk.destroy');

// Route untuk Keterangan Umum
Route::get('/dashboard/df_surat_umum', [DashboardKetUmumController::class, 'index'])->name('dashboard.keteranganumum.index');
Route::get('/dashboard/create_umum', [DashboardKetUmumController::class, 'create'])->name('dashboard.keteranganumum.create');
Route::post('/dashboard/keteranganumum', [DashboardKetUmumController::class, 'store'])->name('dashboard.keteranganumum.store');
Route::get('/dashboard/keteranganumum/{keteranganUmum}/edit', [DashboardKetUmumController::class, 'edit'])->name('dashboard.keteranganumum.edit');
Route::put('/dashboard/keteranganumum/{keteranganUmum}', [DashboardKetUmumController::class, 'update'])->name('dashboard.keteranganumum.update');
Route::delete('/dashboard/keteranganumum/{keteranganUmum}', [DashboardKetUmumController::class, 'destroy'])->name('dashboard.keteranganumum.destroy');
Route::get('/dashboard/administrasi/umum/export/{id}', [DashboardKetUmumController::class, 'export'])->name('dashboard.administrasi.umum.export');

// Route untuk Keterangan Domisili
Route::get('/dashboard/df_surat_domisili', [DashboardDomisiliController::class, 'index'])->name('dashboard.administrasi.index');
Route::get('/dashboard/create_domisili', [DashboardDomisiliController::class, 'create'])->name('dashboard.administrasi.create_domisili');
Route::post('/dashboard/administrasi', [DashboardDomisiliController::class, 'store'])->name('dashboard.administrasi.store');
Route::get('/dashboard/administrasi/{id}/edit', [DashboardDomisiliController::class, 'edit'])->name('dashboard.administrasi.edit');
Route::put('/dashboard/administrasi/{id}', [DashboardDomisiliController::class, 'update'])->name('dashboard.administrasi.update');
Route::delete('/dashboard/administrasi/{id}', [DashboardDomisiliController::class, 'destroy'])->name('dashboard.administrasi.destroy');
Route::get('/dashboard/administrasi/domisili/export/{id}', [DashboardDomisiliController::class, 'export'])->name('dashboard.administrasi.domisili.export');
Route::get('/get-data-by-nik/{nik}', [DashboardDomisiliController::class, 'getDataByNIK']);

//Route untuk Keterangan Usaha
Route::get('/dashboard/df_surat_usaha', [DashboardUsahaController::class, 'index'])->name('dashboard.usaha.index');
Route::get('/dashboard/create_usaha', [DashboardUsahaController::class, 'create'])->name('dashboard.usaha.create');
Route::post('/dashboard/usaha/store', [DashboardUsahaController::class, 'store'])->name('dashboard.usaha.store');
Route::get('/dashboard/usaha/administrasi/{id}/edit', [DashboardUsahaController::class, 'edit'])->name('dashboard.usaha.edit');
Route::put('/dashboard/usaha/administrasi/{id}', [DashboardUsahaController::class, 'update'])->name('dashboard.usaha.update');
Route::delete('/dashboard/usaha/administrasi/{id}', [DashboardUsahaController::class, 'destroy'])->name('dashboard.usaha.destroy');
Route::get('/dashboard/usaha/administrasi/export/{id}', [DashboardUsahaController::class, 'export'])->name('dashboard.usaha.export');
Route::get('/get-data-by-nik/{nik}', [DashboardUsahaController::class, 'getDataByNik']);



//Route untuk rekomendasi BBM
Route::get('/dashboard/df_surat_bbm', [DashboardRekBbmController::class, 'index'])->name('dashboard.bbm.index');
Route::get('/dashboard/create_bbm', [DashboardRekBbmController::class, 'create'])->name('dashboard.bbm.create');
Route::post('/dahboard/bbm/store', [DashboardRekBbmController::class, 'store'])->name('dashboard.bbm.store');
Route::get('/dashboard/bbm/administrasi/{id}/edit', [DashboardRekBbmController::class, 'edit'])->name('dashboard.bbm.edit');
Route::put('/dashboard/bbm/adminnistrasi/{id}', [DashboardRekBbmController::class, 'update'])->name('dashboard.bbm.update');
Route::delete('/dashboard/bbm/administrasi/{id}', [DashboardRekBbmController::class, 'destroy'])->name('dashboard.bbm.destroy');
Route::get('/dashboard/bbm/administrasi/export/{id}', [DashboardRekBbmController::class, 'export'])->name('dashboard.bbm.export');
Route::get('/get-data-by-nik{nik}', [DashboardRekBbmController::class, 'getDataByNik']);

//Route untuk kelahiran
Route::get('/dashboard/kelahiran', [DashboardKelahiranController::class, 'index'])->name('dashboard.adminduk.index');
Route::get('/dashboard/create_kelahiran', [DashboardKelahiranController::class, 'create'])->name('dashboard.adminduk.create_kelahiran');
Route::post('/dashboard/adminduk', [DashboardKelahiranController::class, 'store'])->name('dashboard.adminduk.store_kelahiran');
Route::get('/dashboard/adminduk/{id}/edit', [DashboardKelahiranController::class, 'edit'])->name('dashboard.adminduk.edit_kelahiran');
Route::put('/dashboard/adminduk/{id}', [DashboardKelahiranController::class, 'update'])->name('dashboard.adminduk.update');
Route::delete('/dashboard/adminduk/{id}', [DashboardKelahiranController::class, 'destroy'])->name('dashboard.adminduk.destroy_kelahiran');
Route::get('/dashboard/adminduk/export/{id}', [DashboardKelahiranController::class, 'export'])->name('dashboard.adminduk.export');





Route::get('/dashboard/berita/index', [DashboardBeritaController::class, 'index'])->name('dashboard.berita.index');
Route::get('/dashboard/berita/create', [DashboardBeritaController::class, 'create'])->name('dashboard.berita.create');
Route::post('/dashboard/berita/store', [DashboardBeritaController::class, 'store'])->name('dashboard.berita.store');


//Route untuk layanan
Route::get('/layanan/index', [LayananController::class, 'index'])->name('layanan.index');



//Route untuk Login
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
//ROute untuk Registrasi
Route::get('/registrasi', [RegistrasiController::class, 'index']);
Route::post('/registrasi', [RegistrasiController::class, 'store']);
// Route::post('/registrasi', [RegistrasiController::class, 'store']);




Route::get('/cetakdomisili', function(){
    return view ('dashboard.administrasi.tampilan_domisili');
});

Route::get('/cetaklahir', function(){
    return view ('dashboard.adminduk.tampilan_lahiran');
});

Route::get('/cetakumum', function(){
    return view ('dashboard.administrasi.tampilan_umum');
});

Route::get('/cetakbbm', function(){
    return view ('dashboard.administrasi.tampilan_bbm');
});






