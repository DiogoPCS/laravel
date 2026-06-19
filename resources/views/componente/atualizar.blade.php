<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">

    <h1 class="titulo">Atualizar </h1>

    <form action="{{ route('componente.save') }}" method="POST" class="form-box">
        @csrf

        <input type="hidden" name="id" value="{{ $componente->id }}">

        <label for="nome">Nome</label>
        <input
            type="text"
            name="nome"
            id="nome"
            value="{{ old('nome', $componente->nome) }}"
            placeholder="Digite o nome do componente"
        >

        <label for="hora_inicio">Horário de Início</label>
        <input
            type="datetime-local"
            name="hora_inicio"
            id="hora_inicio"
            value="{{ old('hora_inicio', $componente->hora_inicio) }}"
        >

        <label for="hora_fim">Horário de Fim</label>
        <input
            type="datetime-local"
            name="hora_fim"
            id="hora_fim"
            value="{{ old('hora_fim', $componente->hora_fim) }}"
        >

        <button type="submit">Atualizar</button>
    </form>

    <br>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset

 
</div>