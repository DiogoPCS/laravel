@extends('_partials/main')
@section('conteudo')
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adoção de Animais</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <h1 class="display-4">Bem-vindo ao Adoção de Animais!</h1>
      <p class="lead">Encontre seu novo amigo peludo e dê a ele um lar cheio de amor.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Ver Animais para Adoção</a>
    </div>

    <!-- Cards de Animais -->
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.pexels.com/photos/3687770/pexels-photo-3687770.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Conheça nossos cachorros disponíveis para adoção.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.pexels.com/photos/247937/pexels-photo-247937.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Conheça nossos gatos disponíveis para adoção.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <img src="https://images.pexels.com/photos/1458916/pexels-photo-1458916.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="Outros Animais" >
            <div class="card-body">
              <h5 class="card-title">Outros Animais</h5>
              <p class="card-text">Temos outros animais também esperando por um lar.</p>
              <a href="#" class="btn btn-primary">Saiba Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection()

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>