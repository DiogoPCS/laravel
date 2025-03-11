<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Usuario extends Controller
{
    function conectar(){
        echo '<marquee>Usuário Conectado!</marquee>';
    }

    function desconectar(){
        echo '<strong>Usuário Desconectado com Sucesso!!!</strong>';
    }
}
