

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
								<td>{{ $proprietario->id }}</td>
                <td>{{ $proprietario->Nome }}</td>
                <td>{{ $proprietario->cpf }}</td>
                <td>{{ $proprietario->telefone}}</td>   
                <td>{{ $proprietario->email}}</td>               <td>
										<a href="/proprietario/remove/0">Excluir</a>
                    <a href="/proprietario/update/0">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

