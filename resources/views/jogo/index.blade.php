<!DOCTYPE html>
<html>
<head>
    <title>Gerenciar Jogos</title>
    <style>
        .success { color: green; padding: 10px; background: #d4edda; border-radius: 5px; margin: 10px 0; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #f4f4f4; }
        .btn-danger { background: #dc3545; }
        .btn-danger:hover { background: #c82333; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerenciar Jogos</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        <!-- FORMULÁRIO DE CRIAÇÃO -->
        <h2>Cadastrar Novo Jogo</h2>
        <form action="{{ route('jogo.add') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nome">Nome do jogo</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" required min="1">
            </div>

            <div class="form-group">
                <label for="id_plataforma">Plataforma</label>
                <select name="id_plataforma" id="id_plataforma" required>
                    <option value="">Selecione uma plataforma</option>
                    @foreach($plataformas as $plataforma)
                        <option value="{{ $plataforma->id }}">
                            {{ $plataforma->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_estado">Usado</label>
                <select name="id_estado" id="id_estado" required>
                    <option value="">Selecione um estado</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->id }}">
                            {{ $estado->estado ?? $estado->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_retro">Retro</label>
                <select name="id_retro" id="id_retro" required>
                    <option value="">Selecione um retro</option>
                    @foreach($retros as $retro)
                        <option value="{{ $retro->id }}">
                            {{ $retro->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_colecionador">Colecionador</label>
                <select name="id_colecionador" id="id_colecionador" required>
                    <option value="">Selecione um colecionador</option>
                    @foreach($colecionadores as $colecionador)
                        <option value="{{ $colecionador->id }}">
                            {{ $colecionador->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Salvar</button>
        </form>

        <hr>

        <!-- LISTAGEM DOS JOGOS -->
        <h2>Jogos Cadastrados</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Quantidade</th>
                    <th>Plataforma</th>
                    <th>Estado</th>
                    <th>Retro</th>
                    <th>Colecionador</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($jogos as $jogo)
                    <tr>
                        <td>{{ $jogo->id }}</td>
                        <td>{{ $jogo->nome }}</td>
                        <td>{{ $jogo->quantidade }}</td>
                        <td>{{ $jogo->plataforma->nome ?? 'N/A' }}</td>
                        <td>{{ $jogo->estado->estado ?? $jogo->estado->nome ?? 'N/A' }}</td>
                        <td>{{ $jogo->retro->nome ?? 'N/A' }}</td>
                        <td>{{ $jogo->colecionador->nome ?? 'N/A' }}</td>
                        <td>
                            <form action="{{ route('jogo.remove', $jogo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger" onclick="return confirm('Tem certeza que deseja remover?')">
                                    Remover
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align:center;">Nenhum jogo cadastrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
