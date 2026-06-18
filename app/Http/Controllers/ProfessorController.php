<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
   function index(){ 
        $professor = new \App\Models\ProfessorModel();

        return view('professor.index', ['professor'=>$professor::all()]);
    }

    function add(Request $dados) { 
        $validator = Validator::make(
            $dados->all(),
              [
                  'nome' => 'required|min:3|max:255',
              ],
              [
                  'nome.required' => 'O campo nome é obrigatório.',
                  'nome.min' => 'O campo nome deve conter no mínimo 3 caracteres.',
                  'nome.max' => 'O campo nome deve conter no máximo 255 caracteres.',
              ]
      );

      if ($validator->fails()) {
          return redirect()
              ->route('professor.index')
              ->withErrors($validator)
              ->withInput();}

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

        return view('professor.atualizar', ['success'=>'Atualizado!', 'professor'=>$professor]);
    }
}
