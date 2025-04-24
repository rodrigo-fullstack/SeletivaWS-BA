<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/login/avaliador', function(){
    Auth::loginUsingId(1);
    return redirect('/produtos');
});

Route::get('/login/representante', function(){
    Auth::loginUsingId(2);
    return redirect('/produtos');
});

Route::get('/produtos/cadastrar', function () {
    return view('register');
});

Route::redirect('/', '/login/avaliador');

Route::get('/produtos', function(){
    return view('welcome');
})->name('busca');

Route::get('/produtos/visualizar', function () {
    return view('product');
})->name('visualizar');

Route::get('/produtos/avaliar', function () {
    return view('survey');
});
