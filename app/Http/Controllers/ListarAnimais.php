<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimais extends Controller
{
    function listarAnimais(){
        return view('listar-animais');
    }
}
