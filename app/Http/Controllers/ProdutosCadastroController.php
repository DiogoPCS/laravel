<?php

namespace App\Http\Controllers;

use App\Models\Produto;

class ProdutosCadastroController extends Controller
{
    public function index()
    {
        // Get all products (latest first)
        $produtos = Produto::latest()->get();
        return view('produtos-cadastrados', compact('produtos'));
    }
}

