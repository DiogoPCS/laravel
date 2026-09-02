<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Admin · Mustache' }}</title>

        @include('partials.apple-styles')
        <style>
            .admin-badge {
                display: inline-block;
                font-size: 10.5px;
                font-weight: 700;
                letter-spacing: 0.04em;
                text-transform: uppercase;
                color: var(--blue);
                background: rgba(4,51,191,0.1);
                padding: 3px 9px;
                border-radius: 980px;
                margin-left: 8px;
            }
            .status-banner {
                background: rgba(52,199,89,0.1);
                border: 1px solid rgba(52,199,89,0.25);
                color: #1f7a3d;
                border-radius: var(--radius-sm);
                padding: 12px 16px;
                font-size: 13.5px;
                margin-bottom: 24px;
            }
        </style>
    </head>
    <body>
        <nav class="nav">
            <div class="wrap">
                <a href="{{ route('admin.cursos.index') }}" class="nav-logo">
                    <span class="brackets">{</span> <span class="brand">Mustache</span> <span class="brackets">}</span>
                    <span class="admin-badge">Admin</span>
                </a>
                <div class="nav-links">
                    <a href="{{ route('admin.cursos.index') }}">Cursos</a>
                    <a href="{{ route('admin.artigos.index') }}">Artigos</a>
                    <a href="{{ route('dashboard') }}">Ver como aluno</a>
                </div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="nav-cta">Sair</button>
                </form>
            </div>
        </nav>

        <main>
            <div class="wrap" style="padding-top: 32px;">
                @if (session('status'))
                    <div class="status-banner">{{ session('status') }}</div>
                @endif
            </div>

            {{ $slot }}
        </main>
    </body>
</html>
