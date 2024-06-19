<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\Rafal::class, 'index']);
Route::get('/roll', [\App\Http\Controllers\Rafal::class, 'roll']);

Route::get('/demo/1', [\App\Http\Controllers\Rafal::class, 'demo1']);
Route::get('/demo/2', [\App\Http\Controllers\Rafal::class, 'demo2']);
