<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo">Cadastrar</h1>

    <form action="{{ route('professor.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o Seu Nome" value="{{ old('nome') }}">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" placeholder="Digite seu numero">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Digite seu email">

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
        <td>Nome do Professor</td>
        <td>Telefone</td>
        <td>Email</td>
        <td colspan="2">Ações</td>
    </tr>

    @isset($professor)
        @foreach($professor as $professor)
            <tr>
                <td>
                    <h3>{{ $professor->nome }}</h3>
                </td>

                <td>
                    <h3>{{ $professor->telefone }}</h3>
                </td>

                <td>
                    <h3>{{ $professor->email }}</h3>
                </td>

                <td>
                    <form action="{{ route('professor.remove', ['id' => $professor->id]) }}" method="GET">
                        <button type="submit">Remover</button>
                    </form>
                </td>

                <td>
                    <form action="{{ route('professor.atualizar', ['id' => $professor->id]) }}" method="GET">
                        <button type="submit">Atualizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endisset
</table>

</div>