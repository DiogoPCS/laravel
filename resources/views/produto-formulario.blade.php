<form action="{{ route('produto-store') }}" method="post">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <br>
    <button type="submit">Cadastrar Produto</button>
</form>