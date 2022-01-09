<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MeubelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

  Route::get('/', [MainController::class, 'home'])->name('dashboard');
  Route::get('generate/{kode}', [MainController::class, 'generateBarcodeManualy']);

  Route::resource('bangunan', BangunanController::class);
  Route::resource('meubel', MeubelController::class);
  Route::resource('elektronik', ElektronikController::class);
  
  Route::post('hapus-gambar/{id}', [MainController::class, 'deleteImage'])->name('delete-image');
  Route::get('scan-barcode', [MainController::class, 'barcode'])->name('scan-barcode');
  
  Route::resource('pengguna', UserController::class);
  
});

require __DIR__.'/auth.php';
