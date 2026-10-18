<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratMasukController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

//route sederhana
//Route::get('/surat-masuk', function () {
   // return 'Halaman Surat Masuk';
//});->name('Surat-Masuk.index');

//route dengan parameter
//Route::get('/surat-masuk/{id}', function () {
 //   return 'Detail Surat Masuk ID:' .$id;
//});->name('surat-masuk.show');

Route::get('/surat-masuk', [SuratMasukController::class, 'index'])
->name('surat-masuk.index');

Route::get('/surat-masuk/{id}', [SuratMasukController::class, 'show'])
->name('surat-masuk.show');