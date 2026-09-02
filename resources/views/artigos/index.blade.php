<x-layouts.public :title="'Artigos · Mustache'">
    <style>
        .artigo-card {
            display: block;
            background: var(--white);
            border-radius: var(--radius-md);
            overflow: hidden;
            border: 1px solid var(--line);
            transition: transform .25s ease, box-shadow .25s ease;
        }
        .artigo-card:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
        .artigo-cover {
            height: 160px;
            background: linear-gradient(135deg, #0433bf, #436dec);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .artigo-cover img { width: 100%; height: 100%; object-fit: cover; }
        .artigo-cover svg { width: 36px; height: 36px; stroke: #fff; }
        .artigo-body { padding: 22px 22px 24px; }
        .artigo-date { font-size: 12px; color: var(--gray); margin-bottom: 10px; display: block; }
        .artigo-card h3 { font-size: 19px; font-weight: 600; letter-spacing: -0.01em; margin: 0 0 8px; color: var(--ink); }
        .artigo-card p { font-size: 14px; color: var(--gray); line-height: 1.55; margin: 0; }
    </style>

    <div class="wrap">
        <div class="page-head">
            <span class="eyebrow">Blog Mustache</span>
            <h1>Artigos</h1>
            <p>Conteúdo sobre programação, arquitetura de software e carreira em tecnologia.</p>
        </div>

        @if ($artigos->isEmpty())
            <div class="empty-state">
                <h3>Nenhum artigo publicado ainda</h3>
                <p>Em breve traremos conteúdos por aqui.</p>
            </div>
        @else
            <div class="grid-cards">
                @foreach ($artigos as $artigo)
                    <a href="{{ route('artigos.show', $artigo) }}" class="artigo-card">
                        <div class="artigo-cover">
                            @if ($artigo->thumbnail)
                                <img src="{{ $artigo->thumbnailUrl() }}" alt="{{ $artigo->titulo }}">
                            @else
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
                            @endif
                        </div>
                        <div class="artigo-body">
                            <span class="artigo-date">{{ $artigo->publicado_em?->translatedFormat('d \d\e F \d\e Y') }}</span>
                            <h3>{{ $artigo->titulo }}</h3>
                            <p>{{ Str::limit($artigo->resumo ?? strip_tags($artigo->conteudo), 110) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>

            {{ $artigos->links('partials.pagination') }}
        @endif
    </div>
</x-layouts.public>
