<?php

use App\Http\Controllers\LaravelController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', [LaravelController::class, 'index'])->name('laravel.index');

Route::get('/laravel/create', [LaravelController::class, 'create'])->name('laravel.create');

Route::get('/laravel/{laravel}', [LaravelController::class, 'show'])->name('laravel.show');

Route::post('/laravel', [LaravelController::class, 'store'])->name('laravel.store');

Route::delete('/laravel/{laravel}', [LaravelController::class, 'destroy'])->name('laravel.destroy');