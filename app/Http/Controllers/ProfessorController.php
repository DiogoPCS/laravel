<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index(){ 
        return view('professor.index');
    }

    function add(Request $dados) { 
        $professor = new \App\Models\AlunoModel();
        $professor::create($dados->all());

        $professor = new \App\Models\AlunoModel();

        return view('professor.index', ['success'=>'Cadastrado!', 'professor'=>$professor::all()]);
    }

}
