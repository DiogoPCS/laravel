<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Cadastrar Curso</h1>

    <form action="{{ route('curso.add') }}" method="post" class="form-box">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o Curso">

        <label class="titulo-periodo">Período</label>
        <div class="grupo-radios">
        <div class="opcao-radio">
            <input type="radio" id="manha" name="periodo" value="Manhã" checked>
            <label for="manha">Manhã</label>
        </div>

        <div class="opcao-radio">
            <input type="radio" id="tarde" name="periodo" value="Tarde">
            <label for="tarde">Tarde</label>
        </div>

        <div class="opcao-radio">
            <input type="radio" id="noite" name="periodo" value="Noite">
            <label for="noite">Noite</label>
        </div>
        </div>
    
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