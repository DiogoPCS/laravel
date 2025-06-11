<form action="" method="post" >
    @csrf

    <input type="hidden" name="id" value={{ $veiculo-> ?? old('id') }}>

    <label for="marca">Marca</label>
    <input type="text" name="marca" id="marca"  value={{ $veiculo-> marca ?? old('marca') }}>

    <label for="modelo">Modelo</label>
    <input type="text" name="modelo" id="modelo"   value={{ $veiculo-> modelo ?? old('modelo') }}>

    <label for="ano">ano</label>
    <input type="text" name="ano" id="ano" value={{ $veiculo-> ano ?? old('ano') }}>

    <label for="placa">Placa</label>
    <input type="text" name="placa" id="placa" value={{ $veiculo-> placa ?? old('placa') }}>

    <label for="cor">Cor</label>
    <input type="text" name="cor" id="cor" value={{ $veiculo-> cor ?? old('cor') }}>

    <button type="submit">Cadastrar</button>
</form>