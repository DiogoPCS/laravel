@extends('_partials/main')


@section('conteudo')

<div class="container-fluid">
  <div class="row d-flex justify-content-center">
    <div class="col-6 p-5">
      
      <form action="{{ route('salvar.contato') }}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">

        <label for="mensagem">Mensagem</label>
        <input type="text" id="mensagem" name="mensagem" class="form-control">

        <button type="submit" class="btn btn-secondary mt-3">Enviar Mensagem</button>
      </form>

    </div>
  </div>
</div>

@endsection
