<x-layouts.admin :title="'Artigos · Admin'">
    <style>
        .admin-table-wrap { background: var(--white); border-radius: var(--radius-md); overflow: hidden; }
        .admin-row {
            display: grid;
            grid-template-columns: 1fr 120px 140px 200px;
            align-items: center;
            gap: 16px;
            padding: 18px 24px;
            border-bottom: 1px solid var(--surface);
        }
        .admin-row:last-child { border-bottom: none; }
        .admin-row.head { color: var(--gray); font-size: 12.5px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.03em; }
        .admin-row .titulo { font-size: 15px; font-weight: 600; color: var(--ink); }
        .admin-row .titulo span { display: block; font-size: 13px; font-weight: 400; color: var(--gray); margin-top: 2px; }
        .status-pill { font-size: 11.5px; font-weight: 600; padding: 4px 10px; border-radius: 980px; display: inline-block; }
        .status-pill.publicado { color: #1f7a3d; background: rgba(52,199,89,0.1); }
        .status-pill.rascunho { color: var(--gray); background: var(--surface); }
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
                <h1>Artigos</h1>
                <p>Publique conteúdo para atrair e engajar visitantes do site.</p>
            </div>
            <a href="{{ route('admin.artigos.create') }}" class="btn btn-primary" style="width: auto; padding: 10px 22px; font-size: 14px;">+ Novo artigo</a>
        </div>

        @if ($artigos->isEmpty())
            <div class="empty-state">
                <h3>Nenhum artigo cadastrado</h3>
                <p><a href="{{ route('admin.artigos.create') }}" class="btn-secondary">Escrever o primeiro artigo</a></p>
            </div>
        @else
            <div class="admin-table-wrap">
                <div class="admin-row head">
                    <span>Artigo</span>
                    <span>Status</span>
                    <span>Autor</span>
                    <span></span>
                </div>
                @foreach ($artigos as $artigo)
                    <div class="admin-row">
                        <span class="titulo">
                            {{ $artigo->titulo }}
                            <span>/artigos/{{ $artigo->slug }}</span>
                        </span>
                        <span>
                            @if ($artigo->publicado)
                                <span class="status-pill publicado">Publicado</span>
                            @else
                                <span class="status-pill rascunho">Rascunho</span>
                            @endif
                        </span>
                        <span>{{ $artigo->autor?->name ?? '—' }}</span>
                        <div class="row-actions">
                            @if ($artigo->publicado)
                                <a href="{{ route('artigos.show', $artigo) }}" target="_blank" rel="noopener">Ver</a>
                            @endif
                            <a href="{{ route('admin.artigos.edit', $artigo) }}">Editar</a>
                            <form action="{{ route('admin.artigos.destroy', $artigo) }}" method="post" onsubmit="return confirm('Remover este artigo?');">
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
