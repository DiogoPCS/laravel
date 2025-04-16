@extends('_partials.body')

@section('content')

    <div class="container mt-3 mt-md-5">
        <h2 class="text-center mb-3 mb-md-4">Confirmação de Voto</h2>

        @if (session('success'))
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        @else
            <div class="alert alert-info text-center">
                Confirme seu voto clicando no botão abaixo.
            </div>

            <form method="POST" action="{{ route('votar.validar', ['code' => $code]) }}" class="text-center mt-4">
                @csrf
                <button type="submit" class="btn btn-success px-5 py-2">Confirmar meu voto</button>
            </form>
        @endif
    </div>

@endsection
