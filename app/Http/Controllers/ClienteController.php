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
}
