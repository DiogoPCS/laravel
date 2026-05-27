<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index(){ 
        return view('admin.index');
    }

    function add(Request $dados) { 
        $admin = new \App\Models\AdminModel();
        $admin::create($dados->all());

        $admin = new \App\Models\AdminModel();

        return view('admin.index', ['success'=>'Cadastrado!', 'admin'=>$admin::all()]);
    }
}
