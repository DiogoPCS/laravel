<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class retroController extends Controller
{
    function index(){ 
        return view('retro.index');
    }

    function add(Request $dados) { 
        $retro = new \App\Models\retroModel();
        $retro::create($dados->all());
    
    //RECUPERANDO TODOS retroS DO BANCO E ENVIANDO PARA A VIEW
				
    $retros = new \App\Models\retroModel();

    return view('retro.index', ['success'=>'Cadastrado!', 'retros'=>$retros::all()]);

    }

    function remove(string $id) {
        $retro = new \App\Models\retroModel();
        $retro::destroy($id);

        return view('retro.index', ['success'=>'Removido!', 'retros'=>$retro::all()]);

    }

}