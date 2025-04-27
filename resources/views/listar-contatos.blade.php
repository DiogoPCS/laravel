@extends('_partials/main')


@section('conteudo')
  <div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-10">

            <div class="row mt-5">
                <div class="col-4 bg-dark text-light"><strong>Nome do Contato</strong></div>
                <div class="col-8 bg-dark text-light"><strong>Mensagem</strong></div>
            </div>

            @foreach ($contatos as $contato)
                <div class="row">
                    <div class="col">{{ $contato['nome'] }}</div>
                    <div class="col">{{ $contato['mensagem'] }}</div>
                    <div class="col">
                        <a href="/delete/{{ $contato['id']}}">Remover</a>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
  </div>

@endsection
