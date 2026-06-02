<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){ 
        $admin = new \App\Models\AdminModel();

        return view('admin.index', ['admin'=>$admin::all()]);
    }

    function add(Request $dados) { 
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

        return view('admin.atualizar', ['success'=>'Atualizado!', 'admin'=>$admin]);
    }
}
