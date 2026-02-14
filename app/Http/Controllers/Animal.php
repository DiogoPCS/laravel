<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
class Animal extends Controller
{
    function animal(){
        return view('animal');
    }
}
