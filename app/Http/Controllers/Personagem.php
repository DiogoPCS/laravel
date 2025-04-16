<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class Personagem extends Controller
{
    function view() {
        return view('cadastrar-personagem');
    }

    function salvarPersonagem(Request $dados){
        //crie o código para salvar no BD
        $personagem = new persona();
        $personagem->create($dados->all());
        

    }

    function listarPersonagem() {
        return view('listar-personagem');
    }
}
