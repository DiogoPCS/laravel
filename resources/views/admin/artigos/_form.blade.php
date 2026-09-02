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
    <input id="titulo" type="text" name="titulo" value="{{ old('titulo', $artigo->titulo ?? '') }}" required autofocus>
</div>

<div class="field">
    <label for="subtitulo">Subtítulo</label>
    <input id="subtitulo" type="text" name="subtitulo" value="{{ old('subtitulo', $artigo->subtitulo ?? '') }}">
</div>

<div class="field">
    <label for="resumo">Resumo (aparece nos cards de listagem)</label>
    <textarea id="resumo" name="resumo" rows="2">{{ old('resumo', $artigo->resumo ?? '') }}</textarea>
</div>

<div class="field">
    <label for="conteudo">Conteúdo</label>
    <textarea id="conteudo" name="conteudo" rows="14" required>{{ old('conteudo', $artigo->conteudo ?? '') }}</textarea>
</div>

<div class="field">
    <label for="thumbnail">Imagem de capa</label>
    <input id="thumbnail" type="file" name="thumbnail" accept="image/*">
    @isset($artigo)
        @if ($artigo->thumbnail)
            <img src="{{ $artigo->thumbnailUrl() }}" alt="Capa atual" class="current-preview">
        @endif
    @endisset
</div>

<label class="field-check">
    <input type="checkbox" name="publicado" value="1" @checked(old('publicado', $artigo->publicado ?? false))>
    Publicar artigo (visível publicamente para leitores)
</label>

<button type="submit" class="btn btn-primary" style="width: auto; padding-left: 32px; padding-right: 32px;">{{ $rotuloBotao ?? 'Salvar' }}</button>
