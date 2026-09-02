<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aula;
use App\Models\Curso;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class AulaController extends Controller
{
    public function create(Curso $curso): View
    {
        return view('admin.aulas.create', [
            'curso' => $curso,
        ]);
    }

    public function store(Request $request, Curso $curso): RedirectResponse
    {
        $validated = $this->validateAula($request);

        $validated['curso_id'] = $curso->id;
        $validated['ordem'] = $validated['ordem'] ?? ($curso->aulas()->max('ordem') + 1);

        if ($request->hasFile('thumbnail')) {
            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('video')) {
            $validated['video_url'] = $request->file('video')->store('videos', 'public');
        }

        unset($validated['video']);

        Aula::create($validated);

        return redirect()->route('admin.cursos.edit', $curso)->with('status', 'Aula adicionada com sucesso.');
    }

    public function edit(Aula $aula): View
    {
        return view('admin.aulas.edit', [
            'curso' => $aula->curso,
            'aula' => $aula,
        ]);
    }

    public function update(Request $request, Aula $aula): RedirectResponse
    {
        $validated = $this->validateAula($request);

        if ($request->hasFile('thumbnail')) {
            if ($aula->thumbnail) {
                Storage::disk('public')->delete($aula->thumbnail);
            }

            $validated['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        if ($request->hasFile('video')) {
            if ($aula->video_url) {
                Storage::disk('public')->delete($aula->video_url);
            }

            $validated['video_url'] = $request->file('video')->store('videos', 'public');
        }

        unset($validated['video']);

        $aula->update($validated);

        return redirect()->route('admin.cursos.edit', $aula->curso)->with('status', 'Aula atualizada com sucesso.');
    }

    public function destroy(Aula $aula): RedirectResponse
    {
        $curso = $aula->curso;

        if ($aula->thumbnail) {
            Storage::disk('public')->delete($aula->thumbnail);
        }

        if ($aula->video_url) {
            Storage::disk('public')->delete($aula->video_url);
        }

        $aula->delete();

        return redirect()->route('admin.cursos.edit', $curso)->with('status', 'Aula removida com sucesso.');
    }

    private function validateAula(Request $request): array
    {
        return $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['nullable', 'string', 'max:1000'],
            'duracao_minutos' => ['required', 'integer', 'min:1', 'max:600'],
            'ordem' => ['nullable', 'integer', 'min:0'],
            'thumbnail' => ['nullable', 'image', 'max:4096'],
            'video' => ['nullable', 'mimes:mp4,mov,webm,avi', 'max:102400'],
        ]);
    }
}
