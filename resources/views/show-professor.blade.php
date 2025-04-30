<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@foreach ($professores as $professor)
    <h1>{{ $professor->nome }}</h1>
@endforeach

{{ $professores->links() }}