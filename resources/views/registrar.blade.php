<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar - Adoção de Animais</title>
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
      .register-container {
        background-color: #ffffff;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        margin: 5rem auto;
      }
      .register-container h2 {
        color: #1B3659;
        margin-bottom: 1.5rem;
      }
      .form-control {
        margin-bottom: 1rem;
      }
      .form-control:focus {
        border-color: #687312;
        box-shadow: 0 0 5px rgba(104, 115, 18, 0.5);
      }
      .form-label {
        color: #1B3659;
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

    <div class="register-container">
      <h2 class="text-center">Registrar Conta</h2>
      <form>
        <div class="mb-3">
          <label for="nome" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="nome" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
          <input type="password" class="form-control" id="confirmar-senha" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="#" style="color: #687312;">Faça login aqui</a></p>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>