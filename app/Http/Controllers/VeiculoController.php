<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VeiculoModel;

class VeiculoController extends Controller
{
    function formulario(){
        return view('veiculo-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            $veiculo = new VeiculoModel();
            $veiculo->create($dados->all());
        } else {
            $veiculo = VeiculoModel::find($dados->id);
            $veiculo->update($dados->all());
        }
        
        $veiculos = VeiculoModel::all();
        return view('veiculo-listar', ['veiculos' => $veiculos]);
    }

    function listar(){
        $veiculos = VeiculoModel::all();
        return view('veiculo-listar', ['veiculos' => $veiculos]);
    }

    function remover($id){
        VeiculoModel::destroy($id);
        return redirect()->route('veiculo-listar');
    }
    
    function editar($id){
        $veiculo = VeiculoModel::find($id);
        return view('veiculo-formulario', ['veiculo' => $veiculo]);
    }
}
