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
Route::resource('tambahdata',TambahDataController::class);
Route::resource('bantuan',BantuanController::class);

