<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;

class ClienteController extends Controller
{
    function add(){
        return view('add-cliente');
    }

    function store(Request $dados){
        $cliente = new ClienteModel();
        $cliente->create($dados->all());
    }

    function list(){
        $clientes = ClienteModel::all();
        
        return view('list-cliente', ['clientes'=>$clientes]);
    }

    function remove($id){
        ClienteModel::destroy($id);

        return redirect()->route('list-cliente');
    }
}
