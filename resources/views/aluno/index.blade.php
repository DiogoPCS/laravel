<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Cadastrar Aluno</h1>

    <form action="{{ route('aluno.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">

        <button type="submit">Salvar</button>
    </form>
  

        <h2 class="subtitulo">Lista de Alunos</h2>

        <div class="cards-container">
            @foreach($alunos as $aluno)
                <div class="card-aluno">
                    <h3>{{ $aluno->nome }}</h3>
                </div>
            @endforeach
        </div>

    @endisset
    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($alunos)
                @foreach($alunos as $aluno)
                    <tr>
                        <td>
                            <h3>{{ $aluno->nome }}</h3>
                        </td>
                        <td>
                            <button type="submit">Remover</button>
                        </td>
                        <td>
                            <button type="submit">Atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
