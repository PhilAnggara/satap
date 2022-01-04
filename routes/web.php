<?php

use App\Http\Controllers\BangunanController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

  Route::get('/', [MainController::class, 'home'])->name('dashboard');

  Route::resource('bangunan', BangunanController::class);
  
  Route::get('scan-barcode', [MainController::class, 'barcode'])->name('scan-barcode');
  
});

require __DIR__.'/auth.php';
