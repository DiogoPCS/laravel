<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
   function index(){ 
        $professor = new \App\Models\ProfessorModel();

        return view('professor.index', ['professor'=>$professor::all()]);
    }

    function add(Request $dados) { 
        $professor = new \App\Models\ProfessorModel();
        $professor::create($dados->all());

      
        $professor = new \App\Models\ProfessorModel();

        return view('professor.index', ['success'=>'Cadastrado!', 'professor'=>$professor::all()]);
    }

    function remove(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['success'=>'Removido!', 'professor'=>$professor::all()]);

    }

    function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

    function save(Request $dados) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($dados->id);
        $professor->update($dados->all());

        return view('professor.index', ['success'=>'Atualizado!', 'nome'=>$professor]);
    }
}
