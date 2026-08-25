<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class corController extends Controller
{
    function index(){ 
        return view('cor.index');
    }

    function add(Request $dados) { 
        $cor = new \App\Models\corModel();
        $cor::create($dados->all());
    
    //RECUPERANDO TODOS corS DO BANCO E ENVIANDO PARA A VIEW
				
    $cors = new \App\Models\corModel();

    return view('cor.index', ['success'=>'Cadastrado!', 'cors'=>$cors::all()]);

    }

    function remove(string $id) {
        $cor = new \App\Models\corModel();
        $cor::destroy($id);

        return view('cor.index', ['success'=>'Removido!', 'cors'=>$cor::all()]);

    }

}