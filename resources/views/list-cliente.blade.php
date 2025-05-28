<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Criado em</th>
            <th>Atualizado em</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>
                    <a href="/cliente/remove/{{ $cliente->id }}">Excluir</a>
                    <a href="">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- {{ $clientes->links() }} --}}