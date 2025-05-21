<form action="{{ route('store-cliente') }}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">

    <button type="submit">Cadastrar</button>
</form>