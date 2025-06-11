<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario (){
        return view ('anuncio-formulario');
    }

    function store(Request $dados){
        $anuncio = new AnuncioModel();
        $anuncio->create($dados->all());
    }

    function list(){
        $anuncio = AnuncioModel::all();
        
        return view('anuncio-listar', ['anuncio'=>$anuncio]);
    }

    function remove($id){
        AnuncioModel::destroy($id);

        return redirect()->route('anuncio-listar');
    } 
}
