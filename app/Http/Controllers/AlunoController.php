<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel as aluno;

class AlunoController extends Controller
{
    function listar() {
        $alunos = aluno();
        $todos_alunos = $alunos::all();        
        return response()->json($todos_alunos);
    }
}
