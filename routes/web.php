<?php

use Illuminate\Support\Facades\Route;

Route::get('/produto/cadastrar', function () {
    return view('register');
});

Route::get('/', function () {
    return view('welcome');
});
