<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@foreach ($professores as $professor)
    <h1>Nome: {{ $professor->nome }}</h1>
    <h1>Telefone: {{ $professor->telefone }}</h1>
    <h1>E-mail: {{ $professor->email }}</h1>
    <hr>
@endforeach


{{ $professores->links('pagination::bootstrap-4') }}
