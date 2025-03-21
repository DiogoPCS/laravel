<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tutor extends Controller
{
    // camelCase
    function tutor(){
        return view('tutor');
    }
}
