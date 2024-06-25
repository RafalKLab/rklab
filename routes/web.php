<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [\App\Http\Controllers\Rafal::class, 'index']);
Route::get('/roll', [\App\Http\Controllers\Rafal::class, 'roll']);

Route::get('/demo/1', [\App\Http\Controllers\Rafal::class, 'demo1']);
Route::get('/demo/2', [\App\Http\Controllers\Rafal::class, 'demo2']);
Route::get('/demo/3', [\App\Http\Controllers\Rafal::class, 'demo3']);
Route::get('/demo/4', [\App\Http\Controllers\Rafal::class, 'demo4']);

Route::get('/main', [\App\Http\Controllers\Rafal::class, 'ekimex']);

Route::get('/demo/5', [\App\Http\Controllers\Rafal::class, 'demo5']);
