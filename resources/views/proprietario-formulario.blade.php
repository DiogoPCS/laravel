<form action="{{ route('proprietario-store') }}" method="POST">
    @csrf

    {{-- Essa linha irá recuperar o ID e deixar invisível --}}
    <input type="hidden" name="id" value={{ $proprietario->id ?? old('id') }}>
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value={{ $proprietario-> nome ?? old('nome') }}>

    <label for="cpf">Cpf</label>
    <input type="number" name="cpf" id="cpf" value={{ $proprietario-> cpf ?? old('cpf') }}>

    <label for="telefone">Telefone</label>
    <input type="number" name="telefone" id="telefone" value={{ $proprietario-> telefone ?? old('telefone') }}>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" value={{ $proprietario-> email ?? old('email') }}>

    <button type="submit">Cadastrar</button>
</form>