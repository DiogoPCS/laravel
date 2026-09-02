<x-layouts.guest :title="'Cadastro · Mustache'">
    <h1>Crie sua conta</h1>
    <p class="sub">Comece a estudar em poucos segundos.</p>

    @if ($errors->any())
        <div class="alert-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="field">
            <label for="name">Nome</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name">
        </div>

        <div class="field">
            <label for="email">E-mail</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">
        </div>

        <div class="field">
            <label for="password">Senha</label>
            <input id="password" type="password" name="password" required autocomplete="new-password">
        </div>

        <div class="field">
            <label for="password_confirmation">Confirmar senha</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
        </div>

        <button type="submit" class="btn btn-primary">Criar conta</button>
    </form>

    <p class="guest-foot">Já tem conta? <a href="{{ route('login') }}" class="btn-secondary">Entrar</a></p>
</x-layouts.guest>
