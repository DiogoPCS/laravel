<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar (){
        return view('usuario');
    }
    
    function desconectar (){
        echo 'Usuário desconectado!';
    }
}
