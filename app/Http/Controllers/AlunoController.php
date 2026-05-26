<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){ 
        return view('aluno.index');
    }

    function add(Request $dados) { 
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $alunos = new \App\Models\AlunoModel();

        return view('aluno.index', ['success'=>'Cadastrado!', 'alunos'=>$alunos::all()]);
    }
}
