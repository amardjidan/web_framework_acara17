<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SessionController;
use Symfony\Component\HttpFoundation\Session\Session;

Route::get('/session/create', [SessionController::class,'create']);
Route::get('/session/show', [SessionController::class,'show']);
Route::get('/session/delete', [SessionController::class,'delete']);
Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);        
Route::get('/pegawai/{nama}', [PegawaiController::class,'index2']);    
Route::get('/formulir', [PegawaiController::class,'formulir']);    
Route::post('/formulir/proses', [PegawaiController::class,'proses']); 
Route::get('/cobaerror', [CobaController::class,'index']); 
Route::get('/cobaerror/{nama?}', [CobaController::class,'index']); 
Route::get('/upload', [UploadController::class, 'upload'])->name('upload');
Route::post('/upload/proses', [UploadController::class, 'proses_upload'])->name('upload.proses');
Route::post('/upload/resize', [UploadController::class, 'resize_upload'])->name('upload.resize');
