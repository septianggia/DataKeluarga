<?php

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

Route::resource('pengguna',UserController::class)->except('destroy','create','show','update','edit')->middleware('auth');
Route::resource('warga',WargaController::class);