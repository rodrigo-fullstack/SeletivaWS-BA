<?php

use App\Http\Controllers\ProductsController;
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

Route::get('/produtos/cadastrar', [ProductsController::class, 'registerForm']);

Route::post('/produtos/cadastrar/submeter', [ProductsController::class, 'register'])->name('cadastrar');

Route::redirect('/', '/login/avaliador');

Route::get('/produtos', [ProductsController::class, 'index'])->name('busca');

Route::post('/produtos/buscar', [ProductsController::class, 'search'])->name('buscaSubmeter');

Route::get('/produtos/visualizar', function () {
    return view('product');
})->name('visualizar');

Route::get('/produtos/avaliar', [ProductsController::class, 'surveyForm']);
Route::get('/produtos/avaliar/submeter', [ProductsController::class, 'survey'])->name('avaliar');
