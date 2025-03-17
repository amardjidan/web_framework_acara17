<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Session\Session;

Route::get('/session/create', [SessionController::class,'create']);
Route::get('/session/show', [SessionController::class,'show']);
Route::get('/session/delete', [SessionController::class,'delete']);
Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);        
Route::get('/pegawai/{nama}', [PegawaiController::class,'index2']);    
Route::get('/formulir', [PegawaiController::class,'formulir']);    
Route::post('/formulir/proses', [PegawaiController::class,'proses']);    