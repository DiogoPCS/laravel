<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adoção de Animais</title>
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
      .login-container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #736A63;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      }
      .login-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #A69B92;
      }
      .form-control {
        background-color: #A69B92;
        color: #262524;
        border: none;
      }
      .form-control:focus {
        background-color: #A69B92;
        color: #262524;
        border-color: #736A63;
        box-shadow: 0 0 5px rgba(166, 155, 146, 0.5);
      }
      .form-label {
        color: #A69B92;
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
              <a class="nav-link" href="{{route('principal')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('registrar')}}">Registrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('login')}}">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Entrar</button>
      </form>
      <div class="mt-3 text-center">
        <p>Não tem uma conta? <a href="{{route('registrar')}}" style="color: #A69B92;">Registre-se</a></p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>