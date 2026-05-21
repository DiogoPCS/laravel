<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index(){ 
        return view('curso.index');
    }

    function add(Request $dados) { 
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());

        $curso = new \App\Models\CursoModel();

        return view('curso.index', ['success'=>'Cadastrado!', 'curso'=>$curso::all()]);
    }


}
