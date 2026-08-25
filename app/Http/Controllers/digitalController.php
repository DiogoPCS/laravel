<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class digitalController extends Controller
{
    function index(){ 
        return view('digital.index');
    }

    function add(Request $dados) { 
        $digital = new \App\Models\digitalModel();
        $digital::create($dados->all());
    
    //RECUPERANDO TODOS digitalS DO BANCO E ENVIANDO PARA A VIEW
				
    $digitals = new \App\Models\digitalModel();

    return view('digital.index', ['success'=>'Cadastrado!', 'digitals'=>$digitals::all()]);

    }

    function remove(string $id) {
        $digital = new \App\Models\digitalModel();
        $digital::destroy($id);

        return view('digital.index', ['success'=>'Removido!', 'digitals'=>$digital::all()]);

    }

}