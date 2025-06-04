
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
				@foreach ($propriedades as $propriedade)
            <tr>
								<td>{{ $cliente->id }}</td>
                <td>{{ $cliente->created_at }}</td>
                <td>{{ $cliente->updated_at }}</td>
                <td>{{ $cliente->nome }}</td>                <td>
										<a href="/propriedade/remove/0">Excluir</a>
                    <a href="/propriedade/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
```

```php
<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>nome</th>
            <th>Cpf</th>
            <th>Telefone</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($veiculos as $veiculo)
            <tr>
								<td>{{ $propriedade->id }}</td>
                <td>{{ $propriedade->marca }}</td>
                <td>{{ $propriedade->modelo }}</td>
                <td>{{ $propriedade->ano }}</td>                
	              <td>{{ $propriedade->placa }}</td>                
                <td>{{ $propriedade->cor }}</td>                
                <td>
                    <a href="/propriedade/remove/{{ $veiculo->id }}">Excluir</a>
                    <a href="/propriedade/update/{{ $veiculo->id }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
```