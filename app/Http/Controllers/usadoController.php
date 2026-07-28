<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usadoController extends Controller
{
    function index(){ 
        return view('usado.index');
    }

    function add(Request $dados) { 
        $usado = new \App\Models\usadoModel();
        $usado::create($dados->all());
    }
}
