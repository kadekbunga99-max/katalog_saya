<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProdukController;

Route::get('/', [HalamanController::class, 'home'])->name('home');
Route::get('/kontak', [HalamanController::class, 'kontak'])->name('kontak');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/produk/{id}', [ProdukController::class, 'show'])->name('produk.show');

Route::get('/admin', function () {
    return view('backoffice.dashboard');
});
