<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/nosotros', function () {
    return view('pages.nosotros');
});
