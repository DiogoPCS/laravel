<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index(){ 
        $componente = new \App\Models\ComponenteModel();

        return view('componente.index', ['componente'=>$componente::all()]);
    }

    function add(Request $dados) { 
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

      
        $componente = new \App\Models\ComponenteModel();

        return view('componente.index', ['success'=>'Cadastrado!', 'componente'=>$componente::all()]);
    }

    function remove(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente::destroy($id);

        return view('componente.index', ['success'=>'Removido!', 'componente'=>$componente::all()]);

    }

    function atualizar(string $id) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($id);

        return view('componente.atualizar', ['componente'=>$componente]);
    }

    function save(Request $dados) {
        $componente = new \App\Models\ComponenteModel();
        $componente = $componente::find($dados->id);
        $componente->update($dados->all());

        return view('componente.index', ['success'=>'Atualizado!', 'nome'=>$componente]);
    }
}
