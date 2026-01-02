<?php

use App\Http\Controllers\LaravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', [LaravelController::class, 'index']);

Route::get('/laravel/create', [LaravelController::class, 'create']);

Route::get('/laravel/{id}', [LaravelController::class, 'show']);