<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artigo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class ArtigoController extends Controller
{
    public function index(): View
    {
        $artigos = Artigo::latest()->get();

        return view('admin.artigos.index', [
            'artigos' => $artigos,
        ]);
    }

    public function create(): View
    {
        return view('admin.artigos.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validateArtigo($request);

        $validated['slug'] = $this->gerarSlugUnico($validated['titulo']);
        $validated['autor_id'] = $request->user()->id;
        $validated['publicado'] = $request->boolean('publicado');
        $validated['publicado_em'] = $validated['publicado'] ? now() : null;

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('artigos', 'public');
        }

        Artigo::create($validated);

        return redirect()->route('admin.artigos.index')->with('status', 'Artigo criado com sucesso.');
    }

    public function edit(Artigo $artigo): View
    {
        return view('admin.artigos.edit', [
            'artigo' => $artigo,
        ]);
    }

    public function update(Request $request, Artigo $artigo): RedirectResponse
    {
        $validated = $this->validateArtigo($request);

        if ($validated['titulo'] !== $artigo->titulo) {
            $validated['slug'] = $this->gerarSlugUnico($validated['titulo'], $artigo->id);
        }

        $publicando = $request->boolean('publicado');
        $validated['publicado'] = $publicando;
        $validated['publicado_em'] = $publicando ? ($artigo->publicado_em ?? now()) : null;

        if ($request->hasFile('thumbnail')) {
            if ($artigo->thumbnail) {
                Storage::disk('public')->delete($artigo->thumbnail);
            }

            $validated['thumbnail'] = $request->file('thumbnail')->store('artigos', 'public');
        }

        $artigo->update($validated);

        return redirect()->route('admin.artigos.edit', $artigo)->with('status', 'Artigo atualizado com sucesso.');
    }

    public function destroy(Artigo $artigo): RedirectResponse
    {
        if ($artigo->thumbnail) {
            Storage::disk('public')->delete($artigo->thumbnail);
        }

        $artigo->delete();

        return redirect()->route('admin.artigos.index')->with('status', 'Artigo removido com sucesso.');
    }

    private function validateArtigo(Request $request): array
    {
        return $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'subtitulo' => ['nullable', 'string', 'max:255'],
            'resumo' => ['nullable', 'string', 'max:500'],
            'conteudo' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:4096'],
        ]);
    }

    private function gerarSlugUnico(string $titulo, ?int $ignorarArtigoId = null): string
    {
        $base = Str::slug($titulo);
        $slug = $base;
        $contador = 1;

        while (Artigo::where('slug', $slug)->when($ignorarArtigoId, fn ($query) => $query->whereKeyNot($ignorarArtigoId))->exists()) {
            $slug = "{$base}-{$contador}";
            $contador++;
        }

        return $slug;
    }
}
