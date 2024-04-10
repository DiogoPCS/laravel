<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function clientes(){
        return View('site.clientes', ['pagina' => 'Página de ']);
    }
}
