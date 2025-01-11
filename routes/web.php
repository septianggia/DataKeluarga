<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\WargaBantuanController;
use App\Http\Controllers\DaftarBantuanController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('dashboard',[
        "title"=>"Dashboard"
    ]);
});

Route::resource('pengguna',UserController::class);
Route::resource('warga',WargaController::class);
Route::get('wargabantuan/{id}',[WargaBantuanController::class,'daftar'])->name('wargabantuan.list');
Route::get('wargabantuantambah/{id}',[WargaBantuanController::class,'create'])->name('wargabantuan.create');
Route::post('wargabantuan',[WargaBantuanController::class,'store'])->name('wargabantuan.store');

Route::resource('tambahdata',TambahDataController::class)->except(['create']);
Route::get('/tambahdata/{id}/create',[TambahDataController::class,'create'])->name('tambahdata.create');
Route::resource('bantuan', BantuanController::class);
Route::resource('daftarbantuan', DaftarBantuanController::class);
// Route::get('/daftarbantuan/create',[DaftarBantuanController::class,'create'])->name('daftarbantuan.create');
