<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">

    <h1 class="titulo">Cadastrar Curso</h1>

    <form action="{{ route('curso.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
               placeholder="Digite o Curso"
               value="{{ old('nome') }}">

        <label for="periodo">Período</label>
        <center><select name="periodo" id="periodo">
            <option value="">Selecione</option>
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select></center>

        <button type="submit">Salvar</button>
    </form>

    <br>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <table>
        <tr>
            <td>Nome do Curso</td>
            <td>Período</td>
            <td colspan="2">Ações</td>
        </tr>

        @isset($curso)
            @foreach($curso as $item)
                <tr>
                    <td><h3>{{ $item->nome }}</h3></td>
                    <td><h3>{{ $item->periodo }}</h3></td>

                    <td>
                        <form action="{{ route('curso.remove', ['id' => $item->id]) }}" method="GET">
                            <button type="submit">Remover</button>
                        </form>
                    </td>

                    <td>
                        <form action="{{ route('curso.atualizar', ['id' => $item->id]) }}" method="GET">
                            <button type="submit">Atualizar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endisset
    </table>

</div>