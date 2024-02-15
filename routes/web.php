<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UlasanBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;

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

// Route::get('/', function () {
//     return view('template_back/layout');
// });
// Route::get('/', function () {
//     return view('data-buku/index');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard/index');
// });

//validasi
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::match(['get','post'],'/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//buku
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/data-buku/input', [BukuController::class, 'input'])->name('data-buku/input');
Route::post('/data-buku/create', [BukuController::class, 'store'])->name('data-buku-create');
Route::get('/data-buku/edit/{id}', [BukuController::class, 'edit'])->name('data-buku_edit');
Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('data-buku_update');
Route::delete('/data-buku/destroy/{id}', [BukuController::class, 'destroy'])->name('data-buku_destroy');


//ulasan buku
Route::get('/ulasan_buku', [UlasanBukuController::class, 'index'])->name('ulasan_buku');
Route::get('/ulasan_buku/input', [UlasanBukuController::class, 'input'])->name('ulasan_buku/input');
Route::post('/ulasan_buku/create', [UlasanBukuController::class, 'store'])->name('ulasan_buku-create');
Route::get('/ulasan_buku/edit/{id}', [UlasanBukuController::class, 'edit'])->name('ulasan_buku_edit');
Route::put('/ulasan_buku/update/{id}', [UlasanBukuController::class, 'update'])->name('ulasan_buku_update');
Route::delete('/ulasan_buku/destroy/{id}', [UlasanBukuController::class, 'destroy'])->name('ulasan_buku_destroy');


//koleksi pribadi
Route::get('/koleksi-pribadi', [KoleksiPribadiController::class, 'index'])->name('koleksi-pribadi');
Route::get('/koleksi-pribadi/input', [KoleksiPribadiController::class, 'input'])->name('koleksi-pribadi/input');
Route::post('/koleksi-pribadi/create', [KoleksiPribadiController::class, 'store'])->name('koleksi-pribadi-create');
Route::get('/koleksi-pribadi/edit/{id}', [KoleksiPribadiController::class, 'edit'])->name('koleksi-pribadi_edit');
Route::put('/koleksi-pribadi/update/{id}', [KoleksiPribadiController::class, 'update'])->name('koleksi-pribadi_update');
Route::delete('/koleksi-pribadi/destroy/{id}', [KoleksiPribadiController::class, 'destroy'])->name('koleksi-pribadi_destroy');


//pemijaman
Route::get('/data-peminjaman', [PeminjamController::class, 'index'])->name('data-peminjaman');
Route::get('/data-peminjaman/input', [PeminjamController::class, 'input'])->name('data-peminjaman/input');
Route::post('/data-peminjaman/create', [PeminjamController::class, 'store'])->name('data-peminjaman-create');

//pengguna
Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
Route::get('/data-pengguna/input', [PenggunaController::class, 'input'])->name('data-pengguna/input');
Route::post('/data-pengguna/store', [PenggunaController::class, 'store'])->name('data-pengguna/store');
Route::get('/data-pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('data-pengguna_edit');
Route::put('/data-pengguna/update/{id}', [PenggunaController::class, 'update'])->name('data-pengguna_update');
Route::delete('/data-pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('data-pengguna_destroy');

//kategori buku 
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/input', [KategoriController::class, 'input'])->name('kategori_input');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori/store');

