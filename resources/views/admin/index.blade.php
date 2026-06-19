<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Administrador</h1>

    <form action="{{ route('admin.add') }}" method="POST" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome" required  value="{{ old('nome') }}">

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
    @isset($success)
    <h1>{{ $success }}</h1>
@endisset

@if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        

<table border="1">
    <tr>
        <td>Nome do Admin</td>
        <td>Telefone</td>
        <td>Email</td>
        <td>CPF</td>
        <td>Usuário</td>
        <td>Status</td>
        <td colspan="2">Ações</td>
    </tr>

    @isset($admin)
        @foreach($admin as $admin)
            <tr>
                <td>
                    <h3>{{ $admin->nome }}</h3>
                </td>

                <td>
                    <p>{{ $admin->telefone }}</p>
                </td>

                <td>
                    <p>{{ $admin->email }}</p>
                </td>

                <td>
                    <p>{{ $admin->cpf }}</p>
                </td>

                <td>
                    <p>{{ $admin->usuario }}</p>
                </td>

                <td>
                    <p>{{ $admin->status }}</p>
                </td>

                <td>
                    <form action="{{ route('admin.remove', ['id' => $admin->id]) }}" method="GET">
                        <button type="submit">Remover</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('admin.atualizar', ['id' => $admin->id]) }}" method="GET">
                        <button type="submit">Atualizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endisset
</table>

</div>