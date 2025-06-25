<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProprietarioModel;

class ProprietarioController extends Controller
{
    function formulario (){
        return view ('proprietario-formulario');
    }

    function store(Request $dados){
        $proprietario = new ProprietarioModel();
        $proprietario->create($dados->all());
    }

    function list(){
        $proprietario = ProprietarioModel::all();
        
        return view('proprietario-listar', ['proprietario'=>$proprietario]);
    }

    function remove($id){
        ProprietarioModel::destroy($id);

        return redirect()->route('proprietario-listar');
    } 
}
