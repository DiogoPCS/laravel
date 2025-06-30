<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            $anuncio = new AnuncioModel();
            $anuncio->create($dados->all());
        } else {
            $anuncio = AnuncioModel::find($dados->id);
            $anuncio->update($dados->all());
        }
        
        $anuncios = AnuncioModel::all();
        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function listar(){
        $anuncios = AnuncioModel::all();
        return view('anuncio-listar', ['anuncios' => $anuncios]);
    }

    function remover($id){
        AnuncioModel::destroy($id);
        return redirect()->route('anuncio-listar');
    }
    
    function editar($id){
        $anuncio = AnuncioModel::find($id);
        return view('anuncio-formulario', ['anuncio' => $anuncio]);
    }
}
