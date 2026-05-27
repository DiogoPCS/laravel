<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container">

    <h1 class="titulo"> Componente</h1>

    <form action="{{ route('componente.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">

        <label for="hora_inicio">Horario de Inicio</label>
        <input type="dataTime" name="hora_inicio" id="hora_inicio">
        
        <label for="hora_fim">Horario de Fim</label>
        <input type="dataTime" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>
    </form>
<br>
    @isset($componente)

        <h2 class="subtitulo">Lista de componentes</h2>

        <div class="cards-container">
            @foreach($componente as $componente)
            
                    <h3>{{ $componente->nome }}</h3>
                    <h3>{{ $componente->periodo }}</h3>
                    
                </div>
            @endforeach
        </div>

    @endisset

</div>