<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdutoModel;

class ProdutoController extends Controller
{
    function formulario(){
        return view('produto-formulario');
    }
    
    function store(Request $dados) {
        $produto = new ProdutoModel();
        $produto->create($dados->all());
    }

    function listar(){
        $produtos = ProdutoModel::all();

         return view('produto-listar', ['produtos'=>$produtos]);
    }

    function remover($id){
        ProdutoModel::destroy($id);

        $produtos = ProdutoModel::all();

         return view('produto-listar', ['produtos'=>$produtos]);
    }
}
