<form action="{{ route('veiculo-store') }}" method="post">
    <label for="marca">Marca</label>
    <input type="text" name="marca">
    <br>

    <label for="modelo">Modelo</label>
    <input type="text" name="modelo">
    <br>

    <label for="ano">Ano</label>
    <input type="text" name="ano">
    <br>

    <label for="placa">Placa</label>
    <input type="text" name="placa">
    <br>

    <label for="cor">Cor</label>
    <input type="text" name="cor">
    <br>

    <button type="submit">Cadastrar</button>
</form>