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
              <a class="nav-link" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Detalhes do Animal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Detalhes do Animal -->
    <div class="animal-details-container">
      <h2 class="text-center">Detalhes do Animal</h2>
      <div class="text-center">
        <img src="https://images.pexels.com/photos/1805164/pexels-photo-1805164.jpeg" class="img-fluid" alt="Foto do Animal" width="33%">
      </div>
      <h3 style="color: #6341E5;">Rex</h3>
      <p>Rex é um cachorro muito brincalhão e cheio de energia. Adora passeios e é ótimo com crianças. Ele está procurando um lar amoroso onde possa receber muito carinho e atenção.</p>
      <h4 style="color: #6341E5;">Características</h4>
      <ul>
        <li><strong>Idade:</strong> 2 anos</li>
        <li><strong>Porte:</strong> Médio</li>
        <li><strong>Sexo:</strong> Macho</li>
        <li><strong>Raça:</strong> Labrador</li>
        <li><strong>Cor:</strong> Preto</li>
        <li><strong>Personalidade:</strong> Brincalhão, sociável e carinhoso</li>
      </ul>
      <h4 style="color: #6341E5;">Requisitos para Adoção</h4>
      <ul>
        <li>Ter espaço adequado para o animal.</li>
        <li>Compromisso com os cuidados veterinários.</li>
        <li>Disponibilidade para passeios e atividades físicas.</li>
      </ul>
      <div class="text-center">
        <a href="#" class="btn btn-primary btn-lg">Quero Adotar</a>
      </div>
    </div>
@endsection()

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalhes do Animal - Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

  </head>
  <body>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>