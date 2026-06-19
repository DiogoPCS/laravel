<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">

    <h1 class="titulo">Atualizar </h1>

    <form action="{{ route('curso.save') }}" method="POST" class="form-box">
        @csrf

        <input type="hidden" name="id" value="{{ $curso->id }}">

        <label for="nome">Nome</label>
        <input
            type="text"
            name="nome"
            id="nome"
            placeholder="Digite o nome do curso"
            value="{{ old('nome', $curso->nome) }}"
        >

        <label for="periodo">Período</label>
        <input
            type="text"
            name="periodo"
            id="periodo"
            value="{{ old('periodo', $curso->periodo) }}"
        >

        <button type="submit">Atualizar</button>
    </form>

    <br>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset


</div>