<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class colecionadorController extends Controller
{
    
        function index(){ 
            return view('colecionador.index');
        }
    
        function add(Request $dados) { 
            $colecionador = new \App\Models\colecionadorModel();
            $colecionador::create($dados->all());
        }
    
    
}
