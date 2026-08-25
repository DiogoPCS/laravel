<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <form action="{{ route('desbloqueado.add') }}" method="post">
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
            <td>Nome do desbloqueado</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($desbloqueados)
                @foreach($desbloqueados as $desbloqueado)
                    <tr>
                        <td>
                            <h3>{{ $desbloqueado->nome }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('desbloqueado.remove', ['id' => $desbloqueado->id]) }}" method="GET">
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
