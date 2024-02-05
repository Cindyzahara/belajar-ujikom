<?php

use Illuminate\Support\Facades\Route;
//LOAD CONTROLLER
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataBukuController;
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

Route::get('/dashboad', function () {
    return "berhasil login";
});

//INDEX
Route::get('/login', [LoginController::class, 'index']);

//AUTH MANUAL
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



//BACK OFFICE
Route::resource('/dashboard','DashboardController')->except(['show'])->middleware(['auth','roleaccess:administrator,operator']);
Route::match(['get','post'],'/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware(['auth','roleaccess:administrator,operator']);

// Route::resource('/data_barang','DataBarangController')->except(['show'])->middleware(['auth','roleaccess:administrator,operator']);
// Route::match(['get','post'],'/data_barang', [DataBarangController::class, 'index'])->name('data_barang')->middleware(['auth','roleaccess:administrator,operator']);
// Route::get('/data_barang/input', [DataBarangController::class, 'input'])->name('data_barang.input')->middleware(['auth','roleaccess:administrator,operator']);
// Route::post('/data_barang/create', [DataBarangController::class, 'create'])->name('data_barang.create')->middleware(['auth','roleaccess:administrator,operator']);
// Route::get('/data_barang/edit/{id}', [DataBarangController::class, 'edit'])->name('data_barang.edit')->middleware(['auth','roleaccess:administrator,operator']);
// Route::put('/data_barang/update/{id}', [DataBarangController::class, 'update'])->name('data_barang.update')->middleware(['auth','roleaccess:administrator,operator']);
// Route::delete('/data_barang/destroy/{id}', [DataBarangController::class, 'destroy'])->name('data_barang.destroy')->middleware(['auth','roleaccess:administrator,operator']);
// Route::post('/data_barang/import_excel', [DataBarangController::class, 'import_excel'])->name('data_barang.import_excel')->middleware(['auth','roleaccess:administrator,operator']);
// Route::get('/data_barang/export_excel', [DataBarangController::class, 'export_excel'])->name('data_barang.export_excel')->middleware(['auth','roleaccess:administrator,operator']);
// Route::get('/data_barang/export_pdf', [DataBarangController::class, 'export_pdf'])->name('data_barang.export_pdf')->middleware(['auth','roleaccess:administrator,operator']);

Route::group(['middleware'=>['auth','roleaccess:administrator']], function(){
Route::resource('/data_buku','DataBukuController')->except(['show']);
Route::match(['get','post'],'/data_buku', [DataBukuController::class, 'index'])->name('data_buku');
Route::get('/data_buku/input', [DataBukuController::class, 'input'])->name('data_buku.input');
Route::post('/data_buku/create', [DataBukuController::class, 'create'])->name('data_buku.create');
Route::get('/data_buku/edit/{id}', [DataBukuController::class, 'edit'])->name('data_buku.edit');
Route::post('/data_buku/update', [DataBukuController::class, 'update'])->name('data_buku.update');
Route::delete('/data_buku/destroy/{id}', [DataBukuController::class, 'destroy'])->name('data_buku.destroy');
Route::post('/data_buku/import_excel', [DataBukuController::class, 'import_excel'])->name('data_buku.import_excel');
Route::get('/data_buku/export_excel', [DataBukuController::class, 'export_excel'])->name('data_buku.export_excel');
Route::get('/data_buku/export_pdf', [DataBukuController::class, 'export_pdf'])->name('data_buku.export_pdf');
});