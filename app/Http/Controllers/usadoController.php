<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usadoController extends Controller
{
    function index(){ 
        return view('usado.index');
    }

    function add(Request $dados) { 
        $usado = new \App\Models\usadoModel();
        $usado::create($dados->all());
    
    //RECUPERANDO TODOS usadoS DO BANCO E ENVIANDO PARA A VIEW
				
    $usados = new \App\Models\usadoModel();

    return view('usado.index', ['success'=>'Cadastrado!', 'usados'=>$usados::all()]);

    }

    function remove(string $id) {
        $usado = new \App\Models\usadoModel();
        $usado::destroy($id);

        return view('usado.index', ['success'=>'Removido!', 'usados'=>$usado::all()]);

    }

}