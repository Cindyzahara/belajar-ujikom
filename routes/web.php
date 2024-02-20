<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UlasanBukuController;


/*60_+
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

//route login 
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::match(['get','post'],'/logout', [LoginController::class, 'logout'])->name('logout');

//route registrasi
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

//route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// //route data-buku
Route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/data-buku/input', [BukuController::class, 'input'])->name('data-buku/input')->middleware(['auth','CekRole:administrator,petugas']);
Route::post('/data-buku/create', [BukuController::class, 'store'])->name('data-buku-create')->middleware(['auth','CekRole:administrator,petugas']);
Route::get('/data-buku/edit/{id}', [BukuController::class, 'edit'])->name('data-buku_edit')->middleware(['auth','CekRole:administrator,petugas']);
Route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('data-buku_update')->middleware(['auth','CekRole:administrator,petugas']);
Route::delete('/data-buku/destroy/{id}', [BukuController::class, 'destroy'])->name('data-buku_destroy')->middleware(['auth','CekRole:administrator,petugas']);
Route::get('/data_buku/export_excel', [BukuController::class, 'export_excel'])->name('data_buku.export_excel');
Route::get('/export_pdf_databuku', [BukuController::class, 'export_pdf'])->name('data-buku.export_pdf')->middleware(['auth','CekRole:administrator,petugas']);


//route peminjaman
Route::get('/data-peminjaman', [PeminjamController::class, 'index'])->name('data-peminjaman')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/data-peminjaman/input', [PeminjamController::class, 'input'])->name('data-peminjaman/input')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::post('/data-peminjaman/create', [PeminjamController::class, 'store'])->name('data-peminjaman-create')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/data-peminjaman/edit/{id}', [PeminjamController::class, 'edit'])->name('data-peminjaman_edit')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::put('/data-peminjaman/update/{id}', [PeminjamController::class, 'update'])->name('data-peminjaman_update')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::delete('/data-peminjaman/destroy/{id}', [PeminjamController::class, 'destroy'])->name('data-peminjaman_destroy')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/export_pdf_datapeminjaman', [PeminjamController::class, 'export_pdf'])->name('data-peminjaman.export_pdf')->middleware(['auth','CekRole:administrator,petugas,peminjam']);

//pengguna
// Route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
// Route::get('/data-pengguna/input', [PenggunaController::class, 'input'])->name('data-pengguna/input');
// Route::post('/data-pengguna/store', [PenggunaController::class, 'store'])->name('data-pengguna/store');
// Route::get('/data-pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('data-pengguna_edit');
// Route::put('/data-pengguna/update/{id}', [PenggunaController::class, 'update'])->name('data-pengguna_update');
// Route::delete('/data-pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('data-pengguna_destroy');
// Route::get('/export_pdf_datapengguna', [PenggunaController::class, 'export_pdf'])->name('data_pengguna.export_pdf');

// //kategori buku 
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/kategori/input', [KategoriController::class, 'input'])->name('kategori_input')->middleware(['auth','CekRole:administrator,petugas']);
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori/store')->middleware(['auth','CekRole:administrator,petugas']);

Route::get('/ulasanBuku', [UlasanBukuController::class, 'index'])->name('ulasanBuku');

// //koleksi pribadi
Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi')->middleware(['auth','CekRole:administrator,petugas,peminjam']);
Route::get('/koleksi/input', [KoleksiController::class, 'input'])->name('koleksi/input')->middleware(['auth','CekRole:administrator,petugas']);
Route::post('/koleksi/store', [KoleksiController::class, 'store'])->name('koleksi/store')->middleware(['auth','CekRole:administrator,petugas']);
Route::get('/koleksi/edit/{id}', [KoleksiController::class, 'edit'])->name('koleksi_edit')->middleware(['auth','CekRole:administrator,petugas']);
Route::put('/koleksi/update/{id}', [KoleksiController::class, 'update'])->name('koleksi_update')->middleware(['auth','CekRole:administrator,petugas']);
Route::delete('/koleksi/destroy/{id}', [KoleksiController::class, 'destroy'])->name('koleksi_destroy')->middleware(['auth','CekRole:administrator,petugas']);

//untuk mengauthentifikasi hak akses administrator
Route::group(['middleware' => ['auth','CekRole:administrator']], function () {
    //route data-pengguna
    route::get('/data-pengguna', [PenggunaController::class, 'index'])->name('data-pengguna');
    route::get('/data-pengguna/input', [PenggunaController::class, 'input'])->name('data-pengguna/input');
    route::post('/data-pengguna/store', [PenggunaController::class, 'store'])->name('data-pengguna/store');
    route::get('/data-pengguna/edit/{id}', [PenggunaController::class, 'edit'])->name('data-pengguna_edit');
    route::put('/data-pengguna/update/{id}', [PenggunaController::class, 'update'])->name('data-pengguna_update');
    route::delete('/data-pengguna/destroy/{id}', [PenggunaController::class, 'destroy'])->name('data-pengguna_destroy');
    route::get('/export_pdf_datapengguna', [PenggunaController::class, 'export_pdf'])->name('data_pengguna.export_pdf');

    //route data-buku
    // route::get('/data-buku', [BukuController::class, 'index'])->name('data-buku');
    // route::get('/data-buku/input', [BukuController::class, 'input'])->name('data-buku/input');
    // route::post('/data-buku/create', [BukuController::class, 'store'])->name('data-buku-create');
    // route::get('/data-buku/edit/{id}', [BukuController::class, 'edit'])->name('data-buku_edit');
    // route::put('/data-buku/update/{id}', [BukuController::class, 'update'])->name('data-buku_update');
    // route::delete('/data-buku/destroy/{id}', [BukuController::class, 'destroy'])->name('data-buku_destroy');
    // route::get('/data_buku/export_excel', [BukuController::class, 'export_excel'])->name('data_buku.export_excel');
    // route::get('/export_pdf_databuku', [BukuController::class, 'export_pdf'])->name('data-buku.export_pdf');

    //koleksi pribadi
    // route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi');
    // route::get('/koleksi/input', [KoleksiController::class, 'input'])->name('koleksi/input');
    // route::post('/koleksi/store/{id}', [KoleksiController::class, 'store'])->name('koleksi/store');
    // route::get('/koleksi/edit/{id}', [KoleksiController::class, 'edit'])->name('koleksi_edit');
    // route::put('/koleksi/update/{id}', [KoleksiController::class, 'update'])->name('koleksi_update');
    // route::delete('/koleksi/destroy/{id}', [KoleksiController::class, 'destroy'])->name('koleksi_destroy');

    //kategori buku 
    // route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
    // route::get('/kategori/input', [KategoriController::class, 'input'])->name('kategori_input');
    // route::post('/kategori/store', [KategoriController::class, 'store'])->name('kategori/store');

});

//untuk mengauthentifikasi hak akses Peminjam
// Route::group(['middleware' => ['auth','CekRole:peminjam']], function () { 
    //route peminjam
//     route::get('/data-peminjaman', [PeminjamController::class, 'index'])->name('data-peminjaman');
//     route::get('/data-peminjaman/input', [PeminjamController::class, 'input'])->name('data-peminjaman/input');
//     route::post('/data-peminjaman/create', [PeminjamController::class, 'store'])->name('data-peminjaman-create');
//     route::get('/data-peminjaman/edit/{id}', [PeminjamController::class, 'edit'])->name('data-peminjaman_edit');
//     route::put('/data-peminjaman/update/{id}', [PeminjamController::class, 'update'])->name('data-peminjaman_update');
//     route::delete('/data-peminjaman/destroy/{id}', [PeminjamController::class, 'destroy'])->name('data-peminjaman_destroy');
//     route::get('/export_pdf_datapeminjaman', [PeminjamController::class, 'export_pdf'])->name('data-peminjaman.export_pdf');
// });


