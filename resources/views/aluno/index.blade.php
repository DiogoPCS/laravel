<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">
     <h1 class="titulo">Aluno</h1>

    <form action="{{ route('aluno.add') }}" method="POST"class="form-box">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Aluno</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($aluno)
                @foreach($aluno as $aluno)
                    <tr>
                        <td>
                            <h3>{{ $aluno->nome }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('aluno.remove', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('aluno.atualizar', ['id' => $aluno->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
