<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animal extends Controller
{
    // camelCase
    function animal(){
        return view('animal');
    }
    
}
