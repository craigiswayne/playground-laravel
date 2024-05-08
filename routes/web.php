<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('Home');

Route::get('/routes', function () {
    return view('routes');
})->name('Routes');
