<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroAnimal extends Controller
{
    function cadastroAnimal(){
        return View('cadastro-animal');
    }
}
