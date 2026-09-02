<?php

namespace App\Http\Controllers;

use App\Models\Artigo;
use Illuminate\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArtigoController extends Controller
{
    public function index(): View
    {
        $artigos = Artigo::publicados()->paginate(9);

        return view('artigos.index', [
            'artigos' => $artigos,
        ]);
    }

    public function show(Artigo $artigo): View
    {
        if (! $artigo->publicado) {
            throw new NotFoundHttpException();
        }

        $relacionados = Artigo::publicados()
            ->whereKeyNot($artigo->id)
            ->limit(3)
            ->get();

        return view('artigos.show', [
            'artigo' => $artigo,
            'relacionados' => $relacionados,
        ]);
    }
}
