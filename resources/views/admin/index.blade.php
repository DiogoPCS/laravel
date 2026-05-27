<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Administrador</h1>

    <form action="{{ route('admin.add') }}" method="POST" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome" required>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite seu número">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Digite seu email" required>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" placeholder="Digite seu CPF">

        <label for="usuario">Usuário</label>
        <input type="text" name="usuario" id="usuario" placeholder="Digite seu usuário">

        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

        <label for="status">Status</label>
        <input type="text" name="status" id="status" placeholder="Digite seu status">

        <button type="submit">Salvar</button>
    </form>

    <br>

    @isset($admin)

        <h2 class="subtitulo">Lista de Administradores</h2>

        <div class="cards-container">

            @foreach($admin as $admin)

                <div class="card-admin">
                    <h3>{{ $admin->nome }}</h3>
                    <p>Telefone: {{ $admin->telefone }}</p>
                    <p>Email: {{ $admin->email }}</p>
                    <p>CPF: {{ $admin->cpf }}</p>
                    <p>Usuário: {{ $admin->usuario }}</p>
                    <p>Status: {{ $admin->status }}</p>
                </div>

            @endforeach

        </div>

    @endisset

</div>