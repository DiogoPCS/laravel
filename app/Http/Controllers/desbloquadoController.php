<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class desbloqueadoController extends Controller
{
    function index(){ 
        return view('desbloqueado.index');
    }

    function add(Request $dados) { 
        $desbloqueado = new \App\Models\desbloqueadoModel();
        $desbloqueado::create($dados->all());
    
    //RECUPERANDO TODOS desbloqueadoS DO BANCO E ENVIANDO PARA A VIEW
				
    $desbloqueados = new \App\Models\desbloqueadoModel();

    return view('desbloqueado.index', ['success'=>'Cadastrado!', 'desbloqueados'=>$desbloqueados::all()]);

    }

    function remove(string $id) {
        $desbloqueado = new \App\Models\desbloqueadoModel();
        $desbloqueado::destroy($id);

        return view('desbloqueado.index', ['success'=>'Removido!', 'desbloqueados'=>$desbloqueado::all()]);

    }

}