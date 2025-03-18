<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #79ACD9;
        color: #1B3659;
      }
      .navbar {
        background-color: #1B3659 !important;
      }
      .navbar-brand, .nav-link {
        color: #79ACD9 !important;
      }
      .btn-primary {
        background-color: #687312;
        border-color: #687312;
      }
      .btn-primary:hover {
        background-color: #1B3659;
        border-color: #1B3659;
      }
      .card {
        background-color: #ffffff;
        border: 1px solid #1B3659;
      }
      .card-title {
        color: #1B3659;
      }
      .card-text {
        color: #687312;
      }
      .card-img-top {
        object-fit: cover;
        max-height: 150px;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Adoção de Animais</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('principal') }}">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('registrar') }}">Registrar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
              </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 my-5">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDLqNtZw0QdFpXxJJbgM_iwygQ3DHVJNEEUQ&s" alt="Cachorro" style="height: 400px">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD69qAgguZqA-vNe-g-zEcY4KfCfBnXH6udw&s" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um companheiro fiel.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://blog.polipet.com.br/wp-content/uploads/2024/02/coelho-scaled.jpeg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Adote um coelho e encha sua vida de alegria.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDLqNtZw0QdFpXxJJbgM_iwygQ3DHVJNEEUQ&s" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Cachorro</h5>
                <p class="card-text">Adote um cachorro e dê a ele um lar cheio de amor.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>