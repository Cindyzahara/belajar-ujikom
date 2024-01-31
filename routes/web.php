<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/template', function () {
    return view('template_back/layout');
});
Route::get('/', function () {
    return view('data-buku/index');
});
Route::get('/dashboard', function () {
    return view('dashboard/index');
});


// Route::get('/', [LoginController::class, 'index']);