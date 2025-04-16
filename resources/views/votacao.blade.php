@extends('_partials.body')

@section('content')

    <div class="container mt-3 mt-md-5">
        <h2 class="text-center mb-3 mb-md-4">Votação do Grêmio Estudantil</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('votar') }}" method="POST" class="card p-4 shadow">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Seu e-mail escolar</label>
                <input type="email" name="email" id="email" class="form-control" required placeholder="exemplo@escola.com">
                @error('email')
                    <div class="text-danger mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Escolha sua chapa:</label>

                <div class="form-check">
                    <div class="row py-3">
                        <div class="col-12 col-lg-9">
                            <input class="form-check-input" type="radio" name="chapa" id="chapa_urc" value="Chapa URC" required>
                            <label class="form-check-label" for="chapa_urc">
                                Chapa URC - Unir, Reinventar e Construir
                            </label>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#chapa_urc_modal">Mais Sobre</a>
                        </div>
                    </div>
                </div>

                <div class="form-check">
                    <div class="row py-3">
                        <div class="col-12 col-lg-9">
                            <input class="form-check-input" type="radio" name="chapa" id="chapa_partido_dos_estudantes" value="Chapa Partido dos Estudantes" required>
                            <label class="form-check-label" for="chapa_partido_dos_estudantes">
                                Chapa Partido dos Estudantes
                            </label>
                        </div>
                        <div class="col-12 col-lg-auto">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#chapa_partido_dos_estudantes_modal">Mais Sobre</a>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Votar</button>
        </form>
    </div>

    <!-- Modal 1 -->
    <div class="modal fade" id="chapa_urc_modal" tabindex="-1" aria-labelledby="chapaURCLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="chapaURCLabel">Chapa URC</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <img src="{{ asset('images/chapa_urc.png') }}" width="100%">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="chapa_partido_dos_estudantes_modal" tabindex="-1" aria-labelledby="chapaPartidoDosEstudantesLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="chapaPartidoDosEstudantesLabel">Partido dos Estudantes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/chapa_partido_dos_estudantes.png') }}" width="100%">
                </div>
            </div>
        </div>
    </div>

    

@endsection