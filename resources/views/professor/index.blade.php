<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Cadastrar</h1>

    <form action="{{ route('professor.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite seu numero">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Digite seu email">

        <button type="submit">Salvar</button>
    </form>
<br>
    @isset($professor)

        <h2 class="subtitulo">Lista de Professores</h2>

        <div class="cards-container">
            @foreach($professor as $professor)
                <div class="card-professor">
                    <h3>{{ $professor->nome }}</h3>
                    <h3>{{ $professor->telefone }}</h3>
                    <h3>{{ $professor->email }}</h3>
                </div>
            @endforeach
        </div>

    @endisset

</div>