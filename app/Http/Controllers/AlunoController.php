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

        $alunos = new \App\Models\AlunoModel();

        return view('aluno.index', ['success'=>'Cadastrado!', 'alunos'=>$alunos::all()]);
    }

    function remove() { }

    function edit() { }

    function list() { }
}
