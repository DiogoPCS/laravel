<div class="container">

    <h1 class="titulo">Cadastrar Curso</h1>

    <form action="{{ route('curso.add') }}" method="post" class="form-box">
        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome do aluno">

        <label for="periodo">periodo</label>
        <input type="text" name="nome" id="periodo">

        <button type="submit">Salvar</button>
    </form>
<br>
    @isset($curso)

        <h2 class="subtitulo">Lista de Cursos</h2>

        <div class="cards-container">
            @foreach($curso as $curso)
            
                    <h3>{{ $curso->nome }}</h3>
                    <h3>{{ $curso->periodo }}</h3>
                    
                </div>
            @endforeach
        </div>

    @endisset

</div>