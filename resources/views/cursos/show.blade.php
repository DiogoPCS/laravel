<x-layouts.app :title="$curso->titulo.' · Mustache'">
    <style>
        .lesson-card {
            display: block;
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .lesson-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
        .lesson-cover {
            height: 140px;
            background: linear-gradient(135deg, #0433bf, #436dec);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .lesson-cover img { width: 100%; height: 100%; object-fit: cover; }
        .lesson-cover svg { width: 32px; height: 32px; stroke: #fff; }
        .lesson-num {
            position: absolute;
            top: 12px;
            left: 12px;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: rgba(0,0,0,0.45);
            color: #fff;
            font-size: 12.5px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .lesson-body { padding: 18px 20px 20px; }
        .lesson-body h3 { font-size: 16px; font-weight: 600; margin: 0 0 6px; color: var(--ink); letter-spacing: -0.005em; }
        .lesson-body p { font-size: 13.5px; color: var(--gray); margin: 0 0 14px; line-height: 1.45; }
        .lesson-duration {
            display: inline-block;
            font-size: 12.5px;
            color: var(--gray);
            background: var(--surface);
            padding: 5px 12px;
            border-radius: 980px;
        }
    </style>

    <div class="wrap">
        <div class="page-head">
            <a href="{{ route('dashboard') }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                Meus cursos
            </a>
            <span class="eyebrow">{{ ucfirst($curso->nivel) }} · {{ $curso->carga_horaria }}h</span>
            <h1>{{ $curso->titulo }}</h1>
            <p>{{ $curso->descricao }}</p>
        </div>

        @if ($aulas->isEmpty())
            <div class="empty-state">
                <h3>Nenhuma aula publicada ainda</h3>
                <p>As aulas deste curso serão adicionadas em breve.</p>
            </div>
        @else
            <div class="grid-cards">
                @foreach ($aulas as $aula)
                    <a href="{{ route('cursos.aulas.show', [$curso, $aula]) }}" class="lesson-card">
                        <div class="lesson-cover">
                            <span class="lesson-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            @if ($aula->thumbnail)
                                <img src="{{ $aula->thumbnailUrl() }}" alt="{{ $aula->titulo }}">
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="m10 8 6 4-6 4V8Z"/><circle cx="12" cy="12" r="10"/></svg>
                            @endif
                        </div>
                        <div class="lesson-body">
                            <h3>{{ $aula->titulo }}</h3>
                            @if ($aula->descricao)
                                <p>{{ Str::limit($aula->descricao, 80) }}</p>
                            @endif
                            <span class="lesson-duration">{{ $aula->duracao_minutos }} min</span>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.app>
