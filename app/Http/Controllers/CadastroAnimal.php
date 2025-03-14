<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// PascalCase
class CadastroAnimal extends Controller
{
    // camelCase
    function cadastroAnimal() {
        // kebab-case
        return View('cadastro-animal');
    }
}
