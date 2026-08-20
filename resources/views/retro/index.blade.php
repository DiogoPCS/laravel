<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <form action="{{ route('retro.add') }}" method="post">
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
            <td>Nome do retro</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($retros)
                @foreach($retros as $retro)
                    <tr>
                        <td>
                            <h3>{{ $retro->nome }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('retro.remove', ['id' => $retro->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>    
                        <td>
                            <button>atualizar</button>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>


</div>
