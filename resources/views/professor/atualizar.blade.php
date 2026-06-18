<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">

    <h1 class="titulo">Atualizar</h1>
    <form action="{{ route('professor.save') }}" method="POST" class="form-box">
        @csrf

        <input type="hidden" name="id" value="{{ $professor->id }}">

        <label for="nome">Nome</label>
        <input
            type="text"
            name="nome"
            id="nome"
            placeholder="Digite o nome do professor"
            value="{{ old('nome', $professor->nome) }}"
        >

        <label for="telefone">Telefone</label>
        <input
            type="text"
            name="telefone"
            id="telefone"
            placeholder="Digite seu número"
            value="{{ old('telefone', $professor->telefone) }}"
        >

        <label for="email">Email</label>
        <input
            type="text"
            name="email"
            id="email"
            placeholder="Digite seu email"
            value="{{ old('email', $professor->email) }}"
        >

        <button type="submit">Atualizar</button>
    </form>

    <br>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset

</div>