<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class Principal extends Controller
{
    function viewPrincipal(){
        return view('principal'); //helper
    }

    function viewContato(){
        return view('contato'); //helper
    }

    function viewSobreNos(){
        return view('sobre-nos'); //helper
    }

    function salvarContato(Request $dados){
        $contato = new Contato();
        $contato->create($dados->all());
        return view('contato');
    }

    function listarContatos(Request $request, string $id) {
        $contatos = Contato::all()->toArray();
        return view('listar-contatos', ['contatos' => $contatos]);
    }

    
}


