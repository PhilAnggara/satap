<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\ElektronikController;
use App\Http\Controllers\KesenianController;
use App\Http\Controllers\LaboratoriumController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MatematikaController;
use App\Http\Controllers\MeubelController;
use App\Http\Controllers\OlahragaController;
use App\Http\Controllers\UserController;
use App\Models\Matematika;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

  Route::get('/', [MainController::class, 'home'])->name('dashboard');
  Route::get('generate/{kode}', [MainController::class, 'generateBarcodeManualy']);

  Route::middleware('is.verified')->group(function () {

    Route::resource('bangunan', BangunanController::class);
    Route::resource('meubel', MeubelController::class);
    Route::resource('elektronik', ElektronikController::class);

    Route::prefix('alat-penunjang-kbm')->group(function () {
      Route::resource('buku', BukuController::class);
      Route::resource('laboratorium', LaboratoriumController::class);
      Route::resource('matematika', MatematikaController::class);
      Route::resource('olahraga', OlahragaController::class);
      Route::resource('kesenian', KesenianController::class);
    });
    
    Route::post('hapus-gambar/{id}', [MainController::class, 'deleteImage'])->name('delete-image');
    Route::get('scan-barcode', [MainController::class, 'barcode'])->name('scan-barcode');
    
    Route::resource('pengguna', UserController::class)->middleware('is.principal');
    
  });
  
});

require __DIR__.'/auth.php';
