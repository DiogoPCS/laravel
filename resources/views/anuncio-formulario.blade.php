<form action="{{ route('anuncio-store') }}" method="POST">
    @csrf

    {{-- Essa linha irá recuperar o ID e deixar invisível --}}
    <input type="hidden" name="id" value="{{ $anuncio->id ?? old('id') }}">

    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ $anuncio->titulo ?? old('titulo') }}">

    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao">{{ $anuncio->descricao ?? old('descricao') }}</textarea>

    <label for="preco">Preço</label>
    <input type="text" name="preco" id="preco" value="{{ $anuncio->preco ?? old('preco') }}">

    <label for="data_publicacao">Data de Publicação</label>
    <input type="date" name="data_publicacao" id="data_publicacao" value="{{ $anuncio->data_publicacao ?? old('data_publicacao') }}">

    <label for="id_proprietario">ID Proprietário</label>
    <input type="number" name="id_proprietario" id="id_proprietario" value="{{ $anuncio->id_proprietario ?? old('id_proprietario') }}">

    <label for="id_veiculo">ID Veículo</label>
    <input type="number" name="id_veiculo" id="id_veiculo" value="{{ $anuncio->id_veiculo ?? old('id_veiculo') }}">

    <button type="submit">Cadastrar</button>
</form>
