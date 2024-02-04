<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UlasanBukuController;

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

Route::get('/', function () {
    return view('template_back/layout');
});
Route::get('/', function () {
    return view('data-buku/index');
});
Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/data-buku/input', [BukuController::class, 'input'])->name('data-buku/input');
Route::get('/ulasanBuku', [UlasanBukuController::class, 'index'])->name('ulasanBuku');
Route::post('/data-buku/create', [BukuController::class, 'store'])->name('data-buku-create');


//pemijaman
Route::get('/data-peminjaman', [PeminjamController::class, 'index'])->name('data-peminjaman');
Route::get('/data-peminjaman/input', [PeminjamController::class, 'input'])->name('data-peminjaman/input');
Route::post('/data-peminjaman/create', [PeminjamController::class, 'store'])->name('data-peminjaman-create');