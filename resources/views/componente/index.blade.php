<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo"> Componente</h1>

    <form action="{{ route('componente.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do Componente">

        <label for="hora_inicio">Horario de Inicio</label>
        <input type="datetime" name="hora_inicio" id="hora_inicio">
        
        <label for="hora_fim">Horario de Fim</label>
        <input type="datetime" name="hora_fim" id="hora_fim">
       

        <button type="submit">Salvar</button>
    </form>
<br>
@isset($success)
    <h1>{{ $success }}</h1>
@endisset

<table border="1">
    <tr>
        <td>Nome do Componente</td>
        <td>Período Inicio</td>
        <td>Período Fim</td>
        <td colspan="2">Ações</td>
    </tr>

    @isset($componente)
        @foreach($componente as $componente)
            <tr>
                <td>
                    <h3>{{ $componente->nome }}</h3>
                </td>

                <td>
                    <h3>{{ $componente->hora_inicio }}</h3>
                </td>

                <td>
                    <h3>{{ $componente->hora_fim }}</h3>
                </td>

                <td>
                    <form action="{{ route('componente.remove', ['id' => $componente->id]) }}" method="GET">
                        <button type="submit">Remover</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('componente.atualizar', ['id' => $componente->id]) }}" method="GET">
                        <button type="submit">Atualizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endisset
</table>
</div>