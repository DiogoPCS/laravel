<x-layouts.app :title="$aula->titulo.' · '.$curso->titulo">
    <style>
        .player-wrap { max-width: 900px; margin: 0 auto; }
        .player-video {
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: var(--radius-lg);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .player-video video { width: 100%; height: 100%; }
        .player-empty { color: #86868b; text-align: center; padding: 20px; }
        .player-empty svg { width: 36px; height: 36px; stroke: #86868b; margin: 0 auto 12px; }
        .player-info { padding: 28px 4px; }
        .player-info h1 { font-size: 24px; font-weight: 700; letter-spacing: -0.01em; margin: 0 0 10px; }
        .player-info p { font-size: 15px; color: var(--ink-soft); line-height: 1.6; margin: 0; }
        .player-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 28px;
            padding-top: 24px;
            border-top: 1px solid var(--line);
        }
        .player-nav a { font-size: 14px; color: var(--blue); }
        .player-nav a:hover { text-decoration: underline; }
        .player-nav .disabled { color: var(--line); pointer-events: none; }
    </style>

    <div class="wrap">
        <a href="{{ route('cursos.show', $curso) }}" class="back-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            {{ $curso->titulo }}
        </a>

        <div class="player-wrap">
            <div class="player-video">
                @if ($aula->video_url)
                    <video controls poster="{{ $aula->thumbnailUrl() }}" src="{{ $aula->videoUrl() }}"></video>
                @else
                    <div class="player-empty">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m10 8 6 4-6 4V8Z"/><circle cx="12" cy="12" r="10"/></svg>
                        Vídeo ainda não disponível para esta aula.
                    </div>
                @endif
            </div>

            <div class="player-info">
                <span class="eyebrow">Aula {{ $aulas->search(fn ($a) => $a->id === $aula->id) + 1 }} de {{ $aulas->count() }}</span>
                <h1>{{ $aula->titulo }}</h1>
                @if ($aula->descricao)
                    <p>{{ $aula->descricao }}</p>
                @endif
            </div>

            @php
                $indice = $aulas->search(fn ($a) => $a->id === $aula->id);
                $anterior = $indice > 0 ? $aulas[$indice - 1] : null;
                $proxima = $indice < $aulas->count() - 1 ? $aulas[$indice + 1] : null;
            @endphp

            <div class="player-nav">
                @if ($anterior)
                    <a href="{{ route('cursos.aulas.show', [$curso, $anterior]) }}">&larr; {{ $anterior->titulo }}</a>
                @else
                    <span class="disabled">&larr; Aula anterior</span>
                @endif

                @if ($proxima)
                    <a href="{{ route('cursos.aulas.show', [$curso, $proxima]) }}">{{ $proxima->titulo }} &rarr;</a>
                @else
                    <span class="disabled">Próxima aula &rarr;</span>
                @endif
            </div>
        </div>
    </div>
</x-layouts.app>
