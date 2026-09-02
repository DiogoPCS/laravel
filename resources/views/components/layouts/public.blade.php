<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Mustache' }}</title>

        @include('partials.apple-styles')
        <style>
            body { background: var(--white); }
            .nav { position: fixed; top: 0; left: 0; right: 0; }
            main { padding-top: 52px; }
            .public-footer {
                background: var(--surface);
                padding: 40px 0;
                border-top: 1px solid var(--line);
                margin-top: 40px;
            }
            .public-footer .wrap { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; }
            .public-footer-text { font-size: 12px; color: var(--gray); }
        </style>
    </head>
    <body>
        <nav class="nav">
            <div class="wrap">
                <a href="/" class="nav-logo"><span class="brackets">{</span> <span class="brand">Mustache</span> <span class="brackets">}</span></a>
                <div class="nav-links">
                    <a href="/">Início</a>
                    <a href="{{ route('artigos.index') }}">Artigos</a>
                </div>
                @auth
                    <a href="{{ route('dashboard') }}" class="nav-cta">Meus cursos</a>
                @else
                    <a href="{{ route('login') }}" class="nav-cta">Entrar</a>
                @endauth
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>

        <footer class="public-footer">
            <div class="wrap">
                <span class="public-footer-text">&copy; {{ date('Y') }} Mustache. Todos os direitos reservados.</span>
                <span class="public-footer-text">
                    @guest
                        Ainda não tem conta? <a href="{{ route('register') }}" style="color: var(--blue);">Cadastre-se</a>
                    @endguest
                </span>
            </div>
        </footer>
    </body>
</html>
