<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimais extends Controller
{
    // camelCase
    function listarAnimais(){
        return view('listar-animais');
    }
}
