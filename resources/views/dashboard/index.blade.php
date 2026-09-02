<x-layouts.app :title="'Meus cursos · Mustache'">
    <style>
        .course-card {
            display: block;
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            transition: transform .25s ease, box-shadow .25s ease;
        }
        .course-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
        .course-card-cover {
            height: 140px;
            background: linear-gradient(135deg, #0433bf, #436dec);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .course-card-cover svg { width: 40px; height: 40px; stroke: #fff; }
        .course-card-cover img { width: 100%; height: 100%; object-fit: cover; }
        .course-card-body { padding: 22px 22px 24px; }
        .course-card-tag {
            display: inline-block;
            font-size: 11.5px;
            font-weight: 600;
            color: var(--blue);
            background: rgba(4,51,191,0.08);
            padding: 4px 10px;
            border-radius: 980px;
            margin-bottom: 12px;
            text-transform: capitalize;
        }
        .course-card h3 { font-size: 18px; font-weight: 600; letter-spacing: -0.01em; margin: 0 0 8px; color: var(--ink); }
        .course-card p { font-size: 14px; color: var(--gray); line-height: 1.5; margin: 0 0 16px; }
        .course-card-meta { display: flex; align-items: center; justify-content: space-between; font-size: 13px; color: var(--gray); }
        .course-card-meta strong { color: var(--ink); font-weight: 600; }
    </style>

    <div class="wrap">
        <div class="page-head">
            <span class="eyebrow">Meus cursos</span>
            <h1>Olá, {{ explode(' ', auth()->user()->name)[0] }}.</h1>
            <p>Continue de onde parou ou escolha um novo curso para estudar.</p>
        </div>

        @if ($cursos->isEmpty())
            <div class="empty-state">
                <h3>Você ainda não está matriculado em nenhum curso</h3>
                <p>Assim que sua matrícula for liberada, os cursos aparecerão aqui.</p>
            </div>
        @else
            <div class="grid-cards">
                @foreach ($cursos as $curso)
                    <a href="{{ route('cursos.show', $curso) }}" class="course-card">
                        <div class="course-card-cover">
                            @if ($curso->imagem)
                                <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($curso->imagem) }}" alt="{{ $curso->titulo }}">
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
                            @endif
                        </div>
                        <div class="course-card-body">
                            <span class="course-card-tag">{{ $curso->nivel }}</span>
                            <h3>{{ $curso->titulo }}</h3>
                            <p>{{ Str::limit($curso->descricao, 90) }}</p>
                            <div class="course-card-meta">
                                <span>{{ $curso->aulas_count }} {{ Str::plural('aula', $curso->aulas_count) }}</span>
                                <strong>{{ $curso->carga_horaria }}h</strong>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.app>
