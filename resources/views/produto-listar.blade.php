<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    @foreach ($produtos as $produto)
    <tr>
        <td>{{ $produto->id }}</td>
        <td>{{ $produto->nome }}</td>
        <td>
            <a href="/produto-remover/{{ $produto->id }}">remover</a>
            <a href="">atualizar</a>
        </td>
    </tr>
        
    @endforeach
</table>