<div>
    <form action="{{ route('jogo.add') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome do jogo</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>

        <div>
            <label for="id_plataforma">Plataforma</label>
            <select name="id_plataforma" id="id_plataforma">
                @foreach($plataformas as $plataforma)
                    <option value="{{ $plataforma->id }}">
                        {{ $plataforma->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_estado">Estado</label>
            <select name="id_estado" id="id_estado">
                @foreach($estados as $estado)
                    <option value="{{ $estado->id }}">
                        {{ $estado->estado }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_retro">Retro</label>
            <select name="id_retro" id="id_retro">
                @foreach($retros as $retro)
                    <option value="{{ $retro->id }}">
                        {{ $retro->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="id_colecionador">Colecionador</label>
            <select name="id_colecionador" id="id_colecionador">
                @foreach($colecionadores as $colecionador)
                    <option value="{{ $colecionador->id }}">
                        {{ $colecionador->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit">Salvar</button>
    </form>
</div>
