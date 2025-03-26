<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro extends Controller
{
    // camelCase
    function registro(){
        return view('registro');
    }

    function criarConta(Request $request){
        dd($request->all());
    }
}
