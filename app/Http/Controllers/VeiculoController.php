<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    function formulario(){
        return view('veiculo-formulario');
    }

    function store(Request $dados){
        if($dados->id == ''){
            $veiculo = new VeiculoModel();
            $veiculo->create($dados->all());
        }else{
            $veiculo = VeiculoModel::find($dados->id);
            $update = $veiculo->update($dados->all());
        }

        $veiculos = VeiculoModel::all();
        
        return view('veiculo-listar', ['veiculos'=>$veiculos]);
      
    } 



    function list(){
        $veiculos = VeiculoModel::all();
        
        return view('veiculo-listar', ['veiculos'=>$veiculos]);
    }

    function remove($id){
        VeiculoModel::destroy($id);

        return redirect()->route('veiculo-listar');
    }

    function editar($id){
        $veiculo = VeiculoModel::find($id);

        return view('veiculo-formulario', ['veiculo' => $veiculo]);
    
}
}


