<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrarAnimal extends Controller
{
    function CadastrarAnimal(){
        return view('cadastrar-animal');
    }
}
