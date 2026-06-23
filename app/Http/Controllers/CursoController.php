<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

    class CursoController extends Controller
    {
    function index(){ 
            $curso = new \App\Models\CursoModel();

            return view('curso.index', ['curso'=>$curso::all()]);
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
              ->route('curso.index')
              ->withErrors($validator)
              ->withInput();}
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());

      
        $curso = new \App\Models\CursoModel();

        return view('curso.index', ['success'=>'Cadastrado!', 'curso'=>$curso::all()]);
    }


        function remove(string $id) {
            $curso = new \App\Models\CursoModel();
            $curso::destroy($id);

            return view('curso.index', ['success'=>'Removido!', 'curso'=>$curso::all()]);

        }

        function atualizar(string $id) {
            $curso = new \App\Models\CursoModel();
            $curso = $curso::find($id);

            return view('curso.atualizar', ['curso'=>$curso]);
        }

        function save(Request $dados) {
            $curso = new \App\Models\CursoModel();
            $curso = $curso::find($dados->id);
            $curso->update($dados->all());

            return view('curso.index', ['success'=>'Atualizado!', 'nome'=>$curso]);
        }

    }
