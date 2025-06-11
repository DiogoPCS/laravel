

<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($proprietario as $proprietario)
            <tr>
								<td>{{ $cliente->id }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->nome }}</td>                <td>
										<a href="/proprietario/remove/0">Excluir</a>
                    <a href="/proprietario/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($veiculos as $veiculo)
            <tr>
								<td>{{ $propriedade->id }}</td>
                <td>{{ $proprietario->Nome }}</td>
                <td>{{ $proprietario->Cpf }}</td>
                <td>{{ $proprietario->Telefone }}</td>                
	              <td>{{ $proprietario->Email }}</td>                
            
                <td>
                    <a href="/proprietario/remove/{{ $proprietario->id }}">Excluir</a>
                    <a href="/proprietario/update/{{ $proprietario->id }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
