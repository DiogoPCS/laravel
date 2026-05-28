
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div>
    <form action="{{ route('curso.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $curso->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $curso->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>

