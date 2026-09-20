<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;

Route::get('/', [HalamanController::class, 'home']);

Route::get('/admin', function () {
    return view('backoffice.dashboard');
});
