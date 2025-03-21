<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    // camelCase
    function login(){
        return view('login');
    }
}
