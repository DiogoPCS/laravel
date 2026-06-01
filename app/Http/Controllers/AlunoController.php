<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlunoModel as Aluno;

class AlunoController extends Controller
{
    function adicionar() { }

    function remover() { }

    function editar() { }

    function listar() {
        $alunos = Alunos::all();

        return response()->json($alunos);
    }
}