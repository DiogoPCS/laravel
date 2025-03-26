@extends('_partials/main')

@section('conteudo')
  <!-- Hero Section -->
  <section class="bg-custom-secondary text-white text-center py-5">
    <div class="container">
      <h1 class="display-4">Dê um lar para um amigo</h1>
      <p class="lead">Encontre seu novo melhor amigo entre nossos animais disponíveis para adoção.</p>
      <a href="#" class="btn btn-custom-primary btn-lg">Ver Animais</a>
    </div>
  </section>

  <!-- Featured Animals Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-4">Conheça nossos amigos</h2>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Um cachorro brincalhão e cheio de energia.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 2">
            <div class="card-body">
              <h5 class="card-title">Mimi</h5>
              <p class="card-text">Uma gata carinhosa que adora um colo.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Animal 3">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Um coelho tranquilo e muito fofo.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
