<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request): View
    {
        $cursos = $request->user()->cursos()->withCount('aulas')->get();

        return view('dashboard.index', [
            'cursos' => $cursos,
        ]);
    }
}
