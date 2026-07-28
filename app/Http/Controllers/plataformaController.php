<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plataformaController extends Controller
{
    
        function index(){ 
            return view('plataforma.index');
        }
    
        function add(Request $dados) { 
            $plataforma = new \App\Models\plataformaModel();
            $plataforma::create($dados->all());
        

        //RECUPERANDO TODOS ALUNOS DO BANCO E ENVIANDO PARA A VIEW
				
        $alunos = new \App\Models\AlunoModel();

        return view('aluno.index', ['success'=>'Cadastrado!', 'alunos'=>$alunos::all()]);

        }
    }
    

