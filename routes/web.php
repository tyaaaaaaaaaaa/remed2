<?php

use App\Http\Controllers\KunjunganController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[KunjunganController::class,'daftar_kunjungan']);
Route::post('index',[KunjunganController::class,'hapus_data_kunjungan']);
//
Route::get('tambah',[KunjunganController::class,'tambah_kunjungan']);
Route::post('tambah',[KunjunganController::class,'menyimpan_data']);