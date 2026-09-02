@if ($errors->any())
    <div class="alert-error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="field">
    <label for="titulo">Título</label>
    <input id="titulo" type="text" name="titulo" value="{{ old('titulo', $curso->titulo ?? '') }}" required autofocus>
</div>

<div class="field">
    <label for="descricao">Descrição</label>
    <textarea id="descricao" name="descricao" rows="3" required>{{ old('descricao', $curso->descricao ?? '') }}</textarea>
</div>

<div class="field-row">
    <div class="field">
        <label for="nivel">Nível</label>
        <select id="nivel" name="nivel" required>
            @foreach (['iniciante' => 'Iniciante', 'intermediario' => 'Intermediário', 'avancado' => 'Avançado'] as $valor => $rotulo)
                <option value="{{ $valor }}" @selected(old('nivel', $curso->nivel ?? 'iniciante') === $valor)>{{ $rotulo }}</option>
            @endforeach
        </select>
    </div>

    <div class="field">
        <label for="carga_horaria">Carga horária (horas)</label>
        <input id="carga_horaria" type="number" name="carga_horaria" min="1" value="{{ old('carga_horaria', $curso->carga_horaria ?? '') }}" required>
    </div>
</div>

<div class="field">
    <label for="imagem">Imagem de capa</label>
    <input id="imagem" type="file" name="imagem" accept="image/*">
    @isset($curso)
        @if ($curso->imagem)
            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($curso->imagem) }}" alt="Capa atual" class="current-preview">
        @endif
    @endisset
</div>

<button type="submit" class="btn btn-primary" style="width: auto; padding-left: 32px; padding-right: 32px;">{{ $rotuloBotao ?? 'Salvar' }}</button>
