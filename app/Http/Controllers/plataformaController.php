<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plataformaController extends Controller
{
    
        function index(){ 
            return view('plataforma.index');
        }
    
        function add(Request $dados) { 
            $plataforma = new \App\Models\plataformaModel();
            $plataforma::create($dados->all());
        

        //RECUPERANDO TODOS plataformaS DO BANCO E ENVIANDO PARA A VIEW
				
        $plataformas = new \App\Models\plataformaModel();

        return view('plataforma.index', ['success'=>'Cadastrado!', 'plataformas'=>$plataformas::all()]);

        }

        
    }
    

