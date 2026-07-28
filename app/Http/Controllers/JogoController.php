<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
    use App\Models\plataformaModel;
    use App\Models\usadoModel;
    use App\Models\retroModel;
    use App\Models\colecionadorModel;
    
class JogoController extends Controller
{



    function index(){ 
        return view('jogo.index');
    }

    public function create()
{
    return view('jogo.create', [
        'plataformas' => Plataforma::all(),
        'estados' => Usado::all(),
        'retros' => Retro::all(),
        'colecionadores' => Colecionador::all(),
    ]);
}

    function add(Request $dados) { 
        $jogo = new \App\Models\jogoModel();
        $jogo::create($dados->all());
    }

    
}
