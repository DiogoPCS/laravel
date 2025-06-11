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
            //fazemos ação de create aqui...
            $veiculo = new VeiculoModel();
            $veiculo->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $veiculo = VeiculoModel::find($dados->id); //localiza o registro
            $update = $veiculo->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $veiculos = VeiculoModel::all();
        
        //após adicionar ou editar redireciona para a página listar
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

        return redirect()->route('veiculo-formulario', ['veiculo' => $veiculo]);
        //vamos enviar o $veiculo que veio do BD para a página veiculo-formulario
    }
}