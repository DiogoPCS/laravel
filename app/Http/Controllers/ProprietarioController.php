<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProprietarioController extends Controller
{
    function formulario(){
        return view('proprietario-formulario');
    }
}

