<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\Rafal::class, 'index']);
Route::get('/roll', [\App\Http\Controllers\Rafal::class, 'roll']);
