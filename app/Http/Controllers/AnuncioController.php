<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnuncioController extends Controller
{
    function formulario(){
        return view('anuncio-formulario');
}
}
