<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Este método será chamado pela rota /login
    public function index() {
        // A função view() carrega o arquivo da pasta resources/views
        return view('login');
    }
}