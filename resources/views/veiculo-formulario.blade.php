<form action="{{ route('veiculo-store') }}" method="post">
    @csrf
    <label for="marca">Marca</label>
    <input type="text" name="marca" id="marca">

    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" id="modelo">

    <label for="ano">ano</label>
    <input type="text" name="ano" id="ano">

    <label for="placa">Placa</label>
    <input type="text" name="placa" id="placa">

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor">

    <button type="submit">Cadastrar</button>
</form>