<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function registerForm(): View{
        return view('register');
    }

    public function register(Request $request): mixed{
        dd($request->all());
        
        $userId = Auth::user()->id;
        $product = new Product();
        $product->nome_produto = $request->nome_produto;
        $product->id_categoria = $request->id_categoria;
        $product->id_subcategoria = $request->id_subcategoria;
        $product->fabricante = $request->company;
        $product->codigo_barras = $request->codigo_produto;
        $product->preco_sugerido = $request->preco_sugerido;

        dd($product);
    }
}
