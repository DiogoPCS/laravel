<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Jogo</title>
    <style>
        .success { color: green; padding: 10px; background: #d4edda; border-radius: 5px; margin: 10px 0; }
        .error { color: red; padding: 10px; background: #f8d7da; border-radius: 5px; margin: 10px 0; }
        .container { max-width: 800px; margin: 0 auto; padding: 20px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; font-weight: bold; margin-bottom: 5px; }
        .form-group input, .form-group select { width: 100%; padding: 8px; border: 1px solid #ddd; border-radius: 4px; }
        button { background: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .btn-secondary { background: #6c757d; }
        .btn-secondary:hover { background: #5a6268; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Atualizar Jogo</h1>

        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- FORMULÁRIO DE ATUALIZAÇÃO -->
        <form action="{{ route('jogo.save') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $jogo->id }}">

            <div class="form-group">
                <label for="nome">Nome do jogo</label>
                <input type="text" name="nome" id="nome" value="{{ $jogo->nome }}" required>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" value="{{ $jogo->quantidade }}" required min="1">
            </div>

            <div class="form-group">
                <label for="id_plataforma">Plataforma</label>
                <select name="id_plataforma" id="id_plataforma" required>
                    <option value="">Selecione uma plataforma</option>
                    @foreach($plataformas as $plataforma)
                        <option value="{{ $plataforma->id }}" {{ $jogo->id_plataforma == $plataforma->id ? 'selected' : '' }}>
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
                        <option value="{{ $estado->id }}" {{ $jogo->id_estado == $estado->id ? 'selected' : '' }}>
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
                        <option value="{{ $retro->id }}" {{ $jogo->id_retro == $retro->id ? 'selected' : '' }}>
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
                        <option value="{{ $colecionador->id }}" {{ $jogo->id_colecionador == $colecionador->id ? 'selected' : '' }}>
                            {{ $colecionador->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit">Salvar</button>
            <a href="{{ route('jogo.index') }}">
                <button type="button" class="btn-secondary">Cancelar</button>
            </a>
        </form>
    </div>
</body>
</html>