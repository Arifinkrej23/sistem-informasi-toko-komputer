<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiPenjualanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
     return view('welcome');
});


Route::get('/login',
[UserController::class,'login'])
->name('login');


Route::post('/login',
[UserController::class,'prosesLogin']);


Route::post('/logout',
[UserController::class,'logout'])
->middleware('auth');


Route::get('/dashboard',
[DashboardController::class,'index'])
->middleware('auth');

Route::resource(
    'kategori',
    KategoriProdukController::class
)->middleware('auth');

Route::resource(
    'produk',
    ProdukController::class
)->middleware('auth');

Route::resource(
    'transaksi',
    TransaksiPenjualanController::class
)->middleware('auth');

Route::resource(
    'pembayaran',
    PembayaranController::class
)->middleware('auth');