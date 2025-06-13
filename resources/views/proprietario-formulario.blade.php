<form action="{{ route('proprietario-store') }}" method="post">
    <label for="nome">nome</label>
    <input type="text" name="nome">
    <br>

    <label for="cpf">cpf</label>
    <input type="text" name="cpf">
    <br>

    <label for="telefone">telefone</label>
    <input type="text" name="telefone">
    <br>

    <label for="email">email</label>
    <input type="text" name="email">
    <br>

    <button type="submit">Cadastrar</button>
</form>