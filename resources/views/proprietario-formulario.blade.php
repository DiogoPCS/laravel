<form action="{{ route('proprietario-store') }}" method="post">
    @csrf
    <label for="nome">nome</label>
    <input type="text" name="nome" id="nome" >

    <label for="sexo">sexo</label>
    <input type="nome" name="sexo" id="sexo">

    <label for="idade">idade</label>
    <input type="text" name="idade" id="idade">

    <label for="cidade">cidade</label>
    <input type="text" name="cidade" id="cidade">

    <label for="rg">rg</label>
    <input type="text" name="rg" id="rg">

    <button type="submit">Cadastrar</button>
</form>