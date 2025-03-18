<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #262524;
        color: #A69B92;
      }
      .navbar {
        background-color: #736A63 !important;
      }
      .navbar-brand, .nav-link {
        color: #A69B92 !important;
      }
      .nav-link:hover {
        color: #262524 !important;
      }
      .btn-primary {
        background-color: #736A63;
        border-color: #736A63;
      }
      .btn-primary:hover {
        background-color: #A69B92;
        border-color: #A69B92;
      }
      .card {
        background-color: #736A63;
        color: #A69B92;
        margin: 10px;
      }
      .card-img-top {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">CarroselPets</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('principal')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('registrar')}}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-4">
      <h1 class="text-center">Adote um Amigo</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://www.adrenaline.com.br/wp-content/uploads/2024/01/elden-ring-dog.jpg" class="card-img-top" alt="Cachorro para adoção">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Um amigo leal esperando por você.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.steamusercontent.com/ugc/1830154294882842601/381D49F03A337E0E264E0E709AA3E4558428B967/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" class="card-img-top" alt="Gato para adoção">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Um companheiro carinhoso para sua casa.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://cdn.acritica.net/upload/dn_noticia/2020/07/1595428559.jpg" class="card-img-top" alt="Coelho para adoção">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Um amigo fofo e cheio de energia.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>