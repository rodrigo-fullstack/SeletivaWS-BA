<?php

use Illuminate\Support\Facades\Route;

Route::get('/produtos/cadastrar', function () {
    return view('register');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/visualizar', function () {
    return view('product');
});

Route::get('/produtos/avaliar', function () {
    return view('survey');
});
