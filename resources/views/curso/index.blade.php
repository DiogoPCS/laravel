<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Cadastrar Curso</h1>

    <form action="{{ route('curso.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o Nome do Aluno">

        <label for="periodo">periodo</label>
        <input type="text" name="periodo" id="periodo" placeholder="Digite o Periodo do Aluno">

        <button type="submit">Salvar</button>
    </form>
<br>
@isset($success)
    <h1>{{ $success }}</h1>
@endisset

<table>
    <tr>
        <td>Nome do Curso</td>
        <td>Período</td>
        <td colspan="2">Ações</td>
    </tr>

    @isset($curso)
        @foreach($curso as $curso)
            <tr>
                <td>
                    <h3>{{ $curso->nome }}</h3>
                </td>

                <td>
                    <h3>{{ $curso->periodo }}</h3>
                </td>

                <td>
                    <form action="{{ route('curso.remove', ['id' => $curso->id]) }}" method="GET">
                        <button type="submit">Remover</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('curso.atualizar', ['id' => $curso->id]) }}" method="GET">
                        <button type="submit">Atualizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endisset
</table>

</div>