<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CursoController extends Controller
{
    public function show(Request $request, Curso $curso): View
    {
        $this->ensureMatriculado($request, $curso);

        return view('cursos.show', [
            'curso' => $curso,
            'aulas' => $curso->aulas,
        ]);
    }

    public function aula(Request $request, Curso $curso, Aula $aula): View
    {
        $this->ensureMatriculado($request, $curso);

        if ($aula->curso_id !== $curso->id) {
            throw new NotFoundHttpException();
        }

        return view('cursos.aula', [
            'curso' => $curso,
            'aula' => $aula,
            'aulas' => $curso->aulas,
        ]);
    }

    private function ensureMatriculado(Request $request, Curso $curso): void
    {
        if (! $request->user()->cursos()->whereKey($curso->id)->exists()) {
            throw new AccessDeniedHttpException('Você não está matriculado neste curso.');
        }
    }
}
