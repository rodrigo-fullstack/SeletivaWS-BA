<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProductsController extends Controller
{
    public function registerForm(): View | RedirectResponse{
        if(Auth::user()->user_type === 'avaliador') return redirect()->route('busca');

        $categories = Category::all();
        $subcategories = Subcategory::all();
        return view('register')->with('categories', $categories)->with('subcategories', $subcategories);
    }

    public function register(Request $request): mixed{
        $user = Auth::user();
        if($user->user_type === 'avaliador') return redirect()->route('busca');
        
        $userId = Auth::user()->id;
        $product = new Product();
        $product->nome_produto = $request->nome_produto;
        $product->nome_fabricante = $request->fabricante;
        $product->id_representante = $userId;
        $product->id_categoria = $request->id_categoria;
        $product->id_subcategoria = $request->id_subcategoria;
        $product->codigo_barras = $request->codigo_produto;
        $product->preco_sugerido = $request->preco_sugerido;

        dd($product);
        $product->save();
    }
}
