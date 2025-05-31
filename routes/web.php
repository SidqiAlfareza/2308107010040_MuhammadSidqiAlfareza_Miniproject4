<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController; 
use App\Http\Controllers\JasaController;

Route::get('/', function () {
return redirect()->route('barang.index');
});



Route::resource('barang', BarangController::class);
Route::resource('jasa', JasaController::class);