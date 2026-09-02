<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Mustache' }}</title>

        @include('partials.apple-styles')
    </head>
    <body>
        <nav class="nav">
            <div class="wrap">
                <a href="{{ route('dashboard') }}" class="nav-logo"><span class="brackets">{</span> <span class="brand">Mustache</span> <span class="brackets">}</span></a>
                <div class="nav-links">
                    <a href="{{ route('dashboard') }}">Meus cursos</a>
                    <a href="{{ route('artigos.index') }}">Artigos</a>
                    @if (auth()->user()->is_admin)
                        <a href="{{ route('admin.cursos.index') }}">Painel Admin</a>
                    @endif
                    <span class="nav-user">{{ auth()->user()->name }}</span>
                </div>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="nav-cta">Sair</button>
                </form>
            </div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </body>
</html>
