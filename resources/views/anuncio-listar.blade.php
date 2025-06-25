
<div>
<style>
    * {
        outline: 1px solid #a3a3a3;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descricao</th>
            <th>Preco</th>
            <th>Data_publicacao</th>
        </tr>
    </thead>
    <tbody>
				@foreach ($anuncio as $anuncio)
            <tr>
								<td>{{ $anuncio->id }}</td>
                <td>{{ $anuncio->titulo }}</td>
                <td>{{ $anuncio->descricao }}</td>
                <td>{{ $anuncio->preco }}</td>                
	              <td>{{ $anuncio->data_publicacao }}</td>                            
                <td>
                    <a href="/anuncio/remove/{{ $anuncio->id }}">Excluir</a>
                    <a href="{{ route('anuncio-editar', $anuncio->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

