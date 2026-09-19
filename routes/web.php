<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user_front.beranda');
});


Route::get('/admin', function () {
    return view('backoffice.dashboard');
});
