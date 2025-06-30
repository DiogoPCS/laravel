<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            $proprietario = new ProprietarioModel();
            $proprietario->create($dados->all());
        } else {
            $proprietario = ProprietarioModel::find($dados->id);
            $proprietario->update($dados->all());
        }
        
        $proprietarios = ProprietarioModel::all();
        return view('proprietario-listar', ['proprietarios' => $proprietarios]);
    }

    function listar(){
        $proprietarios = ProprietarioModel::all();
        return view('proprietario-listar', ['proprietarios' => $proprietarios]);
    }

    function remover($id){
        ProprietarioModel::destroy($id);
        return redirect()->route('proprietario-listar');
    }
    
    function editar($id){
        $proprietario = ProprietarioModel::find($id);
        return view('proprietario-formulario', ['proprietario' => $proprietario]);
    }
}
