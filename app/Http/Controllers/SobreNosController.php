<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function sobreNos() {
        return View('site.sobrenos', ['pagina' => 'Página ']);
    }
}
