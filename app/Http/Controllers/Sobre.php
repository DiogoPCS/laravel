<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sobre extends Controller
{
    function about(){
        return view('pagina-about');
    }

    
}


