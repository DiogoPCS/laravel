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
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Lista de Animais -->
    <div class="container mt-5">
      <h1 class="text-center mb-4" style="color: #6341E5;">Animais para Adoção</h1>
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Adora passeios e é ótimo com crianças.</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
                <li class="list-group-item"><strong>Porte:</strong> Médio</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary w-100 mt-3">Adotar</a>
            </div>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Luna é uma gatinha tranquila e carinhosa. Adora dormir no colo e brincar com arranhadores.</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Idade:</strong> 1 ano</li>
                <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                <li class="list-group-item"><strong>Sexo:</strong> Fêmea</li>
              </ul>
              <a href="#" class="btn btn-primary w-100 mt-3">Adotar</a>
            </div>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Bolinha</h5>
              <p class="card-text">Bolinha é um coelho muito dócil e curioso. Adora cenouras e brincar em espaços abertos.</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Idade:</strong> 6 meses</li>
                <li class="list-group-item"><strong>Porte:</strong> Pequeno</li>
                <li class="list-group-item"><strong>Sexo:</strong> Macho</li>
              </ul>
              <a href="#" class="btn btn-primary w-100 mt-3">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #f8f9fa; /* Fundo claro para contraste */
        color: #333;
      }
      .navbar {
        background-color: #6341E5; /* Roxo escuro */
      }
      .navbar-brand, .nav-link {
        color: #fff !important; /* Texto branco na navbar */
      }
      .btn-primary {
        background-color: #9C47E6; /* Roxo médio */
        border-color: #9C47E6;
        color: #fff;
      }
      .btn-primary:hover {
        background-color: #7B2CBF; /* Roxo mais escuro ao passar o mouse */
        border-color: #7B2CBF;
      }
      .animal-card {
        background-color: #fff;
        border: none;
        border-radius: 0.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
      }
      .animal-card img {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
      }
      .animal-card .card-body {
        padding: 1.5rem;
      }
      .animal-card .card-title {
        color: #6341E5; /* Roxo escuro para títulos */
      }
      .footer {
        background-color: #6341E5; /* Roxo escuro */
        padding: 1rem 0;
        margin-top: 2rem;
        text-align: center;
        color: #fff; /* Texto branco no rodapé */
      }
    </style>
  </head>
  <body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>