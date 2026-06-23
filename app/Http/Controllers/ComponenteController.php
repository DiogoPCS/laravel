<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
                  ->route('componente.index')
                  ->withErrors($validator)
                  ->withInput();
          }
            $componente = new \App\Models\ComponenteModel();
            $componente::create($dados->all());
    
          
            $componente = new \App\Models\ComponenteModel();
    
            return view('componente.index', ['success'=>'Cadastrado!', 'componente'=>$componente::all()]);
        }

    class ComponenteController extends Controller
    {
        function index(){ 
            $componente = new \App\Models\ComponenteModel();

            return view('componente.index', ['componente'=>$componente::all()]);
        }

        function add(Request $dados) { 
            $componente = new \App\Models\ComponenteModel();
            $componente::create($dados->all());

        
            $componente = new \App\Models\ComponenteModel();

            return view('componente.index', ['success'=>'Cadastrado!', 'componente'=>$componente::all()]);
        }

        function remove(string $id) {
            $componente = new \App\Models\ComponenteModel();
            $componente::destroy($id);

            return view('componente.index', ['success'=>'Removido!', 'componente'=>$componente::all()]);

        }

        function atualizar(string $id) {
            $componente = new \App\Models\ComponenteModel();
            $componente = $componente::find($id);

            return view('componente.atualizar', ['componente'=>$componente]);
        }

        function save(Request $dados) {
            $componente = new \App\Models\ComponenteModel();
            $componente = $componente::find($dados->id);
            $componente->update($dados->all());

            return view('componente.index', ['success'=>'Atualizado!', 'nome'=>$componente]);
        }
    }
