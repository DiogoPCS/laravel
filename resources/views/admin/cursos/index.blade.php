<x-layouts.admin :title="'Cursos · Admin'">
    <style>
        .admin-table-wrap { background: var(--white); border-radius: var(--radius-md); overflow: hidden; }
        .admin-row {
            display: grid;
            grid-template-columns: 1fr 120px 120px 140px 200px;
            align-items: center;
            gap: 16px;
            padding: 18px 24px;
            border-bottom: 1px solid var(--surface);
        }
        .admin-row:last-child { border-bottom: none; }
        .admin-row.head { color: var(--gray); font-size: 12.5px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.03em; }
        .admin-row .titulo { font-size: 15px; font-weight: 600; color: var(--ink); }
        .admin-row .titulo span { display: block; font-size: 13px; font-weight: 400; color: var(--gray); margin-top: 2px; }
        .row-actions { display: flex; gap: 14px; justify-content: flex-end; }
        .row-actions a, .row-actions button {
            font-size: 13px;
            color: var(--blue);
            background: none;
            border: none;
            cursor: pointer;
            font-family: inherit;
            padding: 0;
        }
        .row-actions .danger { color: var(--red); }
        .row-actions a:hover, .row-actions button:hover { text-decoration: underline; }
        @media (max-width: 800px) {
            .admin-row { grid-template-columns: 1fr; gap: 6px; }
            .admin-row.head { display: none; }
            .row-actions { justify-content: flex-start; }
        }
    </style>

    <div class="wrap">
        <div class="page-head" style="padding-top: 8px; display: flex; align-items: flex-end; justify-content: space-between; flex-wrap: wrap; gap: 16px;">
            <div>
                <span class="eyebrow">Painel administrativo</span>
                <h1>Cursos</h1>
                <p>Gerencie os cursos e as aulas disponíveis na plataforma.</p>
            </div>
            <a href="{{ route('admin.cursos.create') }}" class="btn btn-primary" style="width: auto; padding: 10px 22px; font-size: 14px;">+ Novo curso</a>
        </div>

        @if ($cursos->isEmpty())
            <div class="empty-state">
                <h3>Nenhum curso cadastrado</h3>
                <p><a href="{{ route('admin.cursos.create') }}" class="btn-secondary">Criar o primeiro curso</a></p>
            </div>
        @else
            <div class="admin-table-wrap">
                <div class="admin-row head">
                    <span>Curso</span>
                    <span>Nível</span>
                    <span>Aulas</span>
                    <span>Matriculados</span>
                    <span></span>
                </div>
                @foreach ($cursos as $curso)
                    <div class="admin-row">
                        <span class="titulo">
                            {{ $curso->titulo }}
                            <span>{{ $curso->carga_horaria }}h · /{{ $curso->slug }}</span>
                        </span>
                        <span style="text-transform: capitalize;">{{ $curso->nivel }}</span>
                        <span>{{ $curso->aulas_count }}</span>
                        <span>{{ $curso->alunos_count }}</span>
                        <div class="row-actions">
                            <a href="{{ route('admin.cursos.edit', $curso) }}">Gerenciar</a>
                            <form action="{{ route('admin.cursos.destroy', $curso) }}" method="post" onsubmit="return confirm('Remover este curso e todas as suas aulas?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="danger">Excluir</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-layouts.admin>
