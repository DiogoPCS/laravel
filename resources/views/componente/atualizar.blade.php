
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div>
    <form action="{{ route('componente.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $componente->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $componente->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

