<x-layouts.admin :title="$curso->titulo.' · Admin'">
    <style>
        .aula-admin-card {
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
        }
        .aula-admin-cover {
            height: 120px;
            background: linear-gradient(135deg, #0433bf, #436dec);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .aula-admin-cover img { width: 100%; height: 100%; object-fit: cover; }
        .aula-admin-cover svg { width: 32px; height: 32px; stroke: #fff; }
        .aula-admin-body { padding: 18px 20px; }
        .aula-admin-body h3 { font-size: 15.5px; font-weight: 600; margin: 0 0 6px; color: var(--ink); }
        .aula-admin-body p { font-size: 13px; color: var(--gray); margin: 0 0 14px; line-height: 1.45; min-height: 36px; }
        .aula-admin-meta { display: flex; align-items: center; justify-content: space-between; }
        .aula-admin-meta .badges { display: flex; gap: 6px; }
        .aula-admin-meta .badge {
            font-size: 11px;
            padding: 3px 8px;
            border-radius: 980px;
            background: var(--surface);
            color: var(--gray);
        }
        .aula-admin-meta .badge.has-video { color: #1f7a3d; background: rgba(52,199,89,0.1); }
        .aula-admin-actions { display: flex; gap: 14px; }
        .aula-admin-actions a, .aula-admin-actions button {
            font-size: 12.5px;
            color: var(--blue);
            background: none;
            border: none;
            cursor: pointer;
            font-family: inherit;
            padding: 0;
        }
        .aula-admin-actions .danger { color: var(--red); }
        .aula-admin-actions a:hover, .aula-admin-actions button:hover { text-decoration: underline; }
        .section-title-row { display: flex; align-items: center; justify-content: space-between; margin: 56px 0 20px; }
        .section-title-row h2 { font-size: 21px; font-weight: 700; letter-spacing: -0.01em; margin: 0; }
    </style>

    <div class="wrap">
        <div class="page-head" style="padding-top: 8px;">
            <a href="{{ route('admin.cursos.index') }}" class="back-link">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                Cursos
            </a>
            <span class="eyebrow">Gerenciar curso</span>
            <h1>{{ $curso->titulo }}</h1>
        </div>

        <div class="form-card">
            <form method="POST" action="{{ route('admin.cursos.update', $curso) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.cursos._form', ['rotuloBotao' => 'Salvar alterações'])
            </form>
        </div>

        <div class="section-title-row">
            <h2>Aulas ({{ $curso->aulas->count() }})</h2>
            <a href="{{ route('admin.aulas.create', $curso) }}" class="btn btn-primary" style="width: auto; padding: 10px 22px; font-size: 14px;">+ Adicionar aula</a>
        </div>

        @if ($curso->aulas->isEmpty())
            <div class="empty-state">
                <h3>Nenhuma aula cadastrada</h3>
                <p>Adicione a primeira aula para este curso.</p>
            </div>
        @else
            <div class="grid-cards">
                @foreach ($curso->aulas as $aula)
                    <div class="aula-admin-card">
                        <div class="aula-admin-cover">
                            @if ($aula->thumbnail)
                                <img src="{{ $aula->thumbnailUrl() }}" alt="{{ $aula->titulo }}">
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
                            @endif
                        </div>
                        <div class="aula-admin-body">
                            <h3>{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}. {{ $aula->titulo }}</h3>
                            <p>{{ Str::limit($aula->descricao, 70) }}</p>
                            <div class="aula-admin-meta">
                                <div class="badges">
                                    <span class="badge">{{ $aula->duracao_minutos }} min</span>
                                    <span class="badge {{ $aula->video_url ? 'has-video' : '' }}">{{ $aula->video_url ? 'Com vídeo' : 'Sem vídeo' }}</span>
                                </div>
                                <div class="aula-admin-actions">
                                    <a href="{{ route('admin.aulas.edit', $aula) }}">Editar</a>
                                    <form action="{{ route('admin.aulas.destroy', $aula) }}" method="post" onsubmit="return confirm('Remover esta aula?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="danger">Excluir</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.admin>
