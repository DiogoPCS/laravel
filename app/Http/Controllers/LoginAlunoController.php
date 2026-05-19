<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //request é responsavel por receber os dados do formulario

class LoginAlunoController extends Controller
{
    function index() {
        return view('loginaluno.index');
    }

    function adicionar(Request $dados) { 
        $aluno = new \App\Models\LoginAlunoModel();
        $aluno::create($dados->all());

        return view('loginaluno.index', ['sucesso'=>'Aluno cadastrado!']);
     }

    function remover(Request $dados) {  }

    function atualizar(Request $dados) {  }

    function consultar() {  }
}
