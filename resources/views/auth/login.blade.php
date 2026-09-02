<x-layouts.guest :title="'Entrar · Mustache'">
    <h1>Bem-vindo de volta</h1>
    <p class="sub">Entre para acessar seus cursos.</p>

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email">
        </div>

        <div class="field">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <label class="field-check">
            <input type="checkbox" name="remember">
            Lembrar de mim
        </label>

        <button type="submit" class="btn btn-primary">Entrar</button>
    </form>

    <p class="guest-foot">Ainda não tem conta? <a href="{{ route('register') }}" class="btn-secondary">Cadastre-se</a></p>
</x-layouts.guest>
