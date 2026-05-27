<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){ 
        return view('componente.index');
    }

    function add(Request $dados) { 
        $componente = new \App\Models\componenteModel();
        $componente::create($dados->all());

        $componente = new \App\Models\componenteModel();

        return view('componente.index', ['success'=>'Cadastrado!', 'componente'=>$componente::all()]);
    }
}
