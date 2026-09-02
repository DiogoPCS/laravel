<x-layouts.public :title="$artigo->titulo.' · Mustache'">
    <style>
        .article-wrap { max-width: 720px; margin: 0 auto; padding: 48px 22px 0; }
        .article-cover {
            width: 100%;
            aspect-ratio: 16 / 8;
            border-radius: var(--radius-lg);
            overflow: hidden;
            background: linear-gradient(135deg, #0433bf, #436dec);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 36px;
        }
        .article-cover img { width: 100%; height: 100%; object-fit: cover; }
        .article-cover svg { width: 48px; height: 48px; stroke: #fff; }
        .article-eyebrow { display: block; font-size: 13px; font-weight: 600; color: var(--blue); margin-bottom: 14px; }
        .article-wrap h1 { font-size: clamp(28px, 5vw, 42px); font-weight: 700; letter-spacing: -0.02em; margin: 0 0 12px; line-height: 1.15; }
        .article-subtitle { font-size: 19px; color: var(--ink-soft); line-height: 1.5; margin: 0 0 20px; }
        .article-meta { font-size: 13.5px; color: var(--gray); margin-bottom: 40px; padding-bottom: 32px; border-bottom: 1px solid var(--line); }
        .article-body { font-size: 17px; line-height: 1.8; color: var(--ink); }
        .article-body p { margin: 0 0 24px; }
        .article-cta {
            margin: 56px 0;
            background: var(--surface);
            border-radius: var(--radius-lg);
            padding: 36px;
            text-align: center;
        }
        .article-cta h3 { font-size: 21px; font-weight: 700; margin: 0 0 8px; }
        .article-cta p { font-size: 15px; color: var(--gray); margin: 0 0 20px; }
        .related-section { max-width: var(--maxw); margin: 0 auto; padding: 0 22px 64px; }
        .related-section h2 { font-size: 21px; font-weight: 700; margin: 0 0 20px; }
    </style>

    <div class="article-wrap">
        <a href="{{ route('artigos.index') }}" class="back-link">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
            Artigos
        </a>

        <div class="article-cover" style="margin-top: 20px;">
            @if ($artigo->thumbnail)
                <img src="{{ $artigo->thumbnailUrl() }}" alt="{{ $artigo->titulo }}">
            @else
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg>
            @endif
        </div>

        <span class="article-eyebrow">Blog Mustache</span>
        <h1>{{ $artigo->titulo }}</h1>
        @if ($artigo->subtitulo)
            <p class="article-subtitle">{{ $artigo->subtitulo }}</p>
        @endif
        <div class="article-meta">
            {{ $artigo->autor?->name ?? 'Equipe Mustache' }} &middot; {{ $artigo->publicado_em?->translatedFormat('d \d\e F \d\e Y') }}
        </div>

        <div class="article-body">
            {!! nl2br(e($artigo->conteudo)) !!}
        </div>

        @guest
            <div class="article-cta">
                <h3>Gostou do conteúdo?</h3>
                <p>Crie sua conta gratuita e tenha acesso aos nossos cursos completos.</p>
                <a href="{{ route('register') }}" class="btn btn-primary" style="width: auto; padding: 12px 32px;">Criar conta grátis</a>
            </div>
        @endguest
    </div>

    @if ($relacionados->isNotEmpty())
        <div class="related-section">
            <h2>Outros artigos</h2>
            <div class="grid-cards">
                @foreach ($relacionados as $relacionado)
                    <a href="{{ route('artigos.show', $relacionado) }}" style="display: block; background: var(--white); border: 1px solid var(--line); border-radius: var(--radius-md); padding: 20px;">
                        <h3 style="font-size: 16px; font-weight: 600; margin: 0 0 6px;">{{ $relacionado->titulo }}</h3>
                        <p style="font-size: 13.5px; color: var(--gray); margin: 0;">{{ Str::limit($relacionado->resumo ?? strip_tags($relacionado->conteudo), 80) }}</p>
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</x-layouts.public>
