<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="container">

    <h1 class="titulo">Atualizar Administrador</h1>

    <form action="{{ route('admin.save') }}" method="POST" class="form-box">
        @csrf

        <input type="hidden" name="id" value="{{ $admin->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome"
            value="{{ old('nome', $admin->nome) }}" required>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone"
            value="{{ old('telefone', $admin->telefone) }}">

        <label for="email">Email</label>
        <input type="email" name="email" id="email"
            value="{{ old('email', $admin->email) }}" required>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf"
            value="{{ old('cpf', $admin->cpf) }}">

        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario"
            value="{{ old('usuario', $admin->usuario) }}">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha"
            placeholder="Digite uma nova senha (opcional)">

        <label for="status">Status</label>
        <input type="text" name="status" id="status"
            value="{{ old('status', $admin->status) }}">

        <button type="submit">Atualizar</button>
    </form>

    <br>

    @isset($success)
        <h1>{{ $success }}</h1>
    @endisset

    

</div>