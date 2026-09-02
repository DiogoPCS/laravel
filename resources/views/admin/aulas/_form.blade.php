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
    <input id="titulo" type="text" name="titulo" value="{{ old('titulo', $aula->titulo ?? '') }}" required autofocus>
</div>

<div class="field">
    <label for="descricao">Descrição</label>
    <textarea id="descricao" name="descricao" rows="3">{{ old('descricao', $aula->descricao ?? '') }}</textarea>
</div>

<div class="field-row">
    <div class="field">
        <label for="duracao_minutos">Duração (minutos)</label>
        <input id="duracao_minutos" type="number" name="duracao_minutos" min="1" value="{{ old('duracao_minutos', $aula->duracao_minutos ?? '') }}" required>
    </div>

    <div class="field">
        <label for="ordem">Ordem</label>
        <input id="ordem" type="number" name="ordem" min="0" placeholder="Automática" value="{{ old('ordem', $aula->ordem ?? '') }}">
    </div>
</div>

<div class="field">
    <label for="thumbnail">Thumbnail</label>
    <input id="thumbnail" type="file" name="thumbnail" accept="image/*">
    @isset($aula)
        @if ($aula->thumbnail)
            <img src="{{ $aula->thumbnailUrl() }}" alt="Thumbnail atual" class="current-preview">
        @endif
    @endisset
</div>

<div class="field">
    <label for="video">Vídeo da aula</label>
    <input id="video" type="file" name="video" accept="video/*">
    <p class="current-video" style="margin-top: 6px; margin-bottom: 0;">Formatos aceitos: mp4, mov, webm, avi (máx. 100MB).</p>
    @isset($aula)
        @if ($aula->video_url)
            <p class="current-video">Vídeo atual: <a href="{{ $aula->videoUrl() }}" target="_blank" rel="noopener">assistir</a></p>
        @endif
    @endisset
</div>

<button type="submit" class="btn btn-primary" style="width: auto; padding-left: 32px; padding-right: 32px;">{{ $rotuloBotao ?? 'Salvar' }}</button>
