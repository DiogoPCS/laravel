<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalhesAnimal extends Controller
{
    // camelCase
    function detalhesAnimal(){
        return view('detalhes-animal');
    }
}
