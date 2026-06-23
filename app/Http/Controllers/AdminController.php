<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    function index(){ 
        $admin = new \App\Models\AdminModel();

        return view('admin.index', ['admin'=>$admin::all()]);
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
                   ->route('admin.index')
                   ->withErrors($validator)
                   ->withInput();}
     
     
             $admin = new \App\Models\AdminModel();
             $admin::create($dados->all());
     
             $admin = new \App\Models\AdminModel();
     
             return view('admin.index', ['success'=>'Cadastrado!', 'admin'=>$admin::all()]);
         }   
    

    function remove(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin::destroy($id);

        return view('admin.index', ['success'=>'Removido!', 'admin'=>$admin::all()]);

    }

    function atualizar(string $id) {
        $admin = new \App\Models\AdminModel();
        $admin = $admin::find($id);

        return view('admin.atualizar', ['admin'=>$admin]);
    }   

    function save(Request $dados) {
        $admin = new \App\Models\AdminModel();
        $admin = $admin::find($dados->id);
        $admin->update($dados->all());

        return view('admin.atualizar', ['success'=>'Atualizado!', 'nome'=>$admin]);
    }
}
