<form action="{{ route('view.add.personagem') }}" method="POST">
    @csrf
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome">
    <br />

    <label for="poder">Poder</label>
    <input type="text" id="poder" name="poder">
    <br />

    <button type="submit">Cadastrar</button>
</form>