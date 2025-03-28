<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class Registrar extends Controller
{
    function registrar(){
        return View('registrar');
    }

    function criarConta(Request $request){
        dd($request->all());

        $usuario = new Usuario();
        $usuario->save($request->all());
    }
}
