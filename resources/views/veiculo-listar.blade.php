<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Código</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
            <th>Placa</th>
            <th>Cor</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($veiculos as $veiculo)
            <tr>
                <td>{{ $veiculo->id }}</td>
                <td>{{ $veiculo->marca }}</td>
                <td>{{ $veiculo->modelo }}</td>
                <td>{{ $veiculo->ano }}</td>
                <td>{{ $veiculo->placa }}</td>
                <td>{{ $veiculo->cor }}</td>
                <td>
                    <a href="/veiculo/remover/{{ $veiculo->id }}">Excluir</a>
                    <a href="{{ route('veiculo-editar', $veiculo->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
