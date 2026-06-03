<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function add(Request $dados){
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        return response()->json($dados->all());
    }

    function remove(string $id) {
        return $id;
    }

    function update() {


    }
}
