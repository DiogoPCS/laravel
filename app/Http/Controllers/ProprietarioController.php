<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    function adicionar(){
        return view('proprietario-adicionar');
}
    function store(Request $dados){
        $propriedade = new PropriedadeModel();
        $propriedade->create($dados->all());
}   

    function list(){
        $propriedade = PropriedadeModel::all();
        return view('propriedade-listar', ['propriedade'=>$propriedade]);
}

}
