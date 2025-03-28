<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrar extends Controller
{
    function registrar(){
        return View('registrar');
    }

    function criarConta(Request $request){
        dd($request->all());
    }
}
