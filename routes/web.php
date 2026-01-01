<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laravel', function () {
    $laravel = [
        ["name" => "filan", "skill" => 75, "id" => "1"],
        ["name" => "luigi", "skill" => 45, "id" => "2"],
    ];
    return view('laravel.index', ["greeting" => "Hi", "laravel" => $laravel]);
});

Route::get('/laravel/{id}', function ($id) {

    return view('laravel.show', ["id" => $id]);
});