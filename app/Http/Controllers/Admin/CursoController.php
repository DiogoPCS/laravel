<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CursoController extends Controller
{
    public function index(): View
    {
        $cursos = Curso::withCount('aulas', 'alunos')->latest()->get();

        return view('admin.cursos.index', [
            'cursos' => $cursos,
        ]);
    }

    public function create(): View
    {
        return view('admin.cursos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateCurso($request);

        $validated['slug'] = $this->gerarSlugUnico($validated['titulo']);

        if ($request->hasFile('imagem')) {
            $validated['imagem'] = $request->file('imagem')->store('cursos', 'public');
        }

        $curso = Curso::create($validated);

        return redirect()->route('admin.cursos.edit', $curso)->with('status', 'Curso criado com sucesso.');
    }

    public function edit(Curso $curso): View
    {
        $curso->load('aulas');

        return view('admin.cursos.edit', [
            'curso' => $curso,
        ]);
    }

    public function update(Request $request, Curso $curso): RedirectResponse
    {
        $validated = $this->validateCurso($request);

        if ($validated['titulo'] !== $curso->titulo) {
            $validated['slug'] = $this->gerarSlugUnico($validated['titulo'], $curso->id);
        }

        if ($request->hasFile('imagem')) {
            if ($curso->imagem) {
                Storage::disk('public')->delete($curso->imagem);
            }

            $validated['imagem'] = $request->file('imagem')->store('cursos', 'public');
        }

        $curso->update($validated);

        return redirect()->route('admin.cursos.edit', $curso)->with('status', 'Curso atualizado com sucesso.');
    }

    public function destroy(Curso $curso): RedirectResponse
    {
        if ($curso->imagem) {
            Storage::disk('public')->delete($curso->imagem);
        }

        foreach ($curso->aulas as $aula) {
            $this->apagarArquivosDaAula($aula);
        }

        $curso->delete();

        return redirect()->route('admin.cursos.index')->with('status', 'Curso removido com sucesso.');
    }

    private function validateCurso(Request $request): array
    {
        return $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string', 'max:1000'],
            'nivel' => ['required', 'in:iniciante,intermediario,avancado'],
            'carga_horaria' => ['required', 'integer', 'min:1', 'max:1000'],
            'imagem' => ['nullable', 'image', 'max:4096'],
        ]);
    }

    private function gerarSlugUnico(string $titulo, ?int $ignorarCursoId = null): string
    {
        $base = Str::slug($titulo);
        $slug = $base;
        $contador = 1;

        while (Curso::where('slug', $slug)->when($ignorarCursoId, fn ($query) => $query->whereKeyNot($ignorarCursoId))->exists()) {
            $slug = "{$base}-{$contador}";
            $contador++;
        }

        return $slug;
    }

    private function apagarArquivosDaAula($aula): void
    {
        if ($aula->thumbnail) {
            Storage::disk('public')->delete($aula->thumbnail);
        }

        if ($aula->video_url) {
            Storage::disk('public')->delete($aula->video_url);
        }
    }
}
