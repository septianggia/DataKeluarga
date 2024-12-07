<?php

use App\Http\Controllers\BantuanController;
use App\Http\Controllers\TambahDataController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use Illuminate\Support\Facades\Route;

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
Route::get('wargabantuan/{id}',[WargaController::class,'bantuan'])->name('warga.bantuan');
Route::resource('tambahdata',TambahDataController::class)->except(['create']);
Route::get('/tambahdata/{id}/create',[TambahDataController::class,'create'])->name('tambahdata.create');
Route::resource('tambahdata',TambahDataController::class)->except(['show2']);
Route::get('/tambahdata/{id}/show2',[TambahDataController::class,'show2'])->name('tambahdata.show2');
Route::resource('bantuan', BantuanController::class);

