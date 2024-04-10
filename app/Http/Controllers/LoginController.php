<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return View('site.login', ['pagina' => 'Página de ']);
    }
}
