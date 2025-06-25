<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnuncioModel;

class VeiculoController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
    }

    function store(Request $dados){
        if ($dados->id == '') {
            //fazemos ação de create aqui...
            $anuncio = new AnuncioModel();
            $anuncio->create($dados->all());
        } else {
            //fazemos a ação de update aqui
            $anuncio = AnuncioModel::find($dados->id); //localiza o registro
            $update = $anuncio->update($dados->all()); //atualiza
        }
        
        //recupera todos os registros atualizados
        $anuncio = AnuncioModel::all();
        
        //após adicionar ou editar redireciona para a página listar
        return view('anuncio-listar', ['anuncio'=>$anuncio]);
    }

    function list(){
        $anuncio = AnuncioModel::all();
        
        return view('anuncio-listar', ['anuncio'=>$anuncio]);
    }

    function remove($id){
        AnuncioModel::destroy($id);

        return redirect()->route('anuncio-listar');
    }
    
    function editar($id){
				$anuncio = AnuncioModel::find($id);

        return redirect()->route('anuncio-formulario', ['anuncio' => $anuncio]);
        //vamos enviar o $veiculo que veio do BD para a página veiculo-formulario
    }
}