<div>

    <form action="{{ route('curso.add') }}" method="post">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="periodo">Periodo</label>
        <input type="text" name="periodo" id="periodo">

        <br><br>

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset

    </form>

    @isset($cursos)

        @foreach($cursos as $curso)

            <h3>{{ $curso->nome }}</h3>
            <h3>{{ $curso->periodo }}</h3>

        @endforeach

    @endisset

</div>