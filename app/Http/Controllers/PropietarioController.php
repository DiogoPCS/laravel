<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropietarioController extends Controller
{
    function formulario(){
        return view('propietario-formulario');
}
}
