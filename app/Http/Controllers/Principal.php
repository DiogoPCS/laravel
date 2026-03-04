<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function home(){
        return view('pagina-home');
    }

    
}


