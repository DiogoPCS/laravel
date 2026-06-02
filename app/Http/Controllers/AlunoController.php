<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

    function index(){ 
        $aluno = new \App\Models\AlunoModel();

        return view('aluno.index', ['aluno'=>$aluno::all()]);
    }

    function add(Request $dados) { 
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

      
        $aluno = new \App\Models\AlunoModel();

        return view('aluno.index', ['success'=>'Cadastrado!', 'aluno'=>$aluno::all()]);
    }

    function remove(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::destroy($id);

        return view('aluno.index', ['success'=>'Removido!', 'aluno'=>$aluno::all()]);

    }

    function atualizar(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($id);

        return view('aluno.atualizar', ['aluno'=>$aluno]);
    }

    function save(Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($dados->id);
        $aluno->update($dados->all());

        return view('aluno.atualizar', ['success'=>'Atualizado!', 'aluno'=>$aluno]);
    }
}
