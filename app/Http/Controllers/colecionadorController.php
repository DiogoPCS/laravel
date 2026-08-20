<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colecionadorController extends Controller
{
    function index(){ 
        return view('colecionador.index');
    }

    function add(Request $dados) { 
        $colecionador = new \App\Models\colecionadorModel();
        $colecionador::create($dados->all());
    
    //RECUPERANDO TODOS colecionadorS DO BANCO E ENVIANDO PARA A VIEW
				
    $colecionadors = new \App\Models\colecionadorModel();

    return view('colecionador.index', ['success'=>'Cadastrado!', 'colecionadors'=>$colecionadors::all()]);

    }

    function remove(string $id) {
        $colecionador = new \App\Models\colecionadorModel();
        $colecionador::destroy($id);

        return view('colecionador.index', ['success'=>'Removido!', 'colecionadors'=>$colecionador::all()]);

    }

}