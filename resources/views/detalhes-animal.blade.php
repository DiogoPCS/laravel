@extends('_partials/main')

@section('conteudo')
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-custom-primary" href="#">Adote um Amigo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Voltar para o Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Animais para Adoção</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Animal Details Section -->
  <section class="py-5">
    <div class="animal-details-container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO11M405Scs_BMVqId6DsP7yYwPk9EOZqwQA&s" class="img-fluid" alt="Rex" style="width: 100%">
        </div>
        <div class="col-md-6">
          <h2 class="text-custom-primary">Rex</h2>
          <p class="lead">Um cachorro brincalhão e cheio de energia.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Espécie:</strong> Cachorro</li>
            <li class="list-group-item"><strong>Raça:</strong> Labrador</li>
            <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
            <li class="list-group-item"><strong>Peso:</strong> 25 kg</li>
            <li class="list-group-item"><strong>Altura:</strong> 60 cm</li>
            <li class="list-group-item"><strong>Cor:</strong> Caramelo</li>
            <li class="list-group-item"><strong>Personalidade:</strong> Amigável, brincalhão e protetor.</li>
            <li class="list-group-item"><strong>História:</strong> Rex foi resgatado das ruas e está procurando um lar amoroso.</li>
          </ul>
          <div class="mt-4">
            <a href="#" class="btn btn-custom-primary btn-lg">Quero Adotar!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection