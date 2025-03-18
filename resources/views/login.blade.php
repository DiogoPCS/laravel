<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Adoção de Animais</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        background-color: #0FC2C0;
        color: #015958;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
      }
      .login-container {
        background-color: #015958;
        padding: 2rem;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
      }
      .login-container h2 {
        color: #0FC2C0;
        text-align: center;
        margin-bottom: 1.5rem;
      }
      .form-control {
        background-color: #0FC2C0;
        color: #015958;
        border: 1px solid #015958;
      }
      .form-control:focus {
        background-color: #0FC2C0;
        color: #015958;
        border-color: #D94F04;
        box-shadow: 0 0 5px rgba(217, 79, 4, 0.5);
      }
      .btn-primary {
        background-color: #D94F04;
        border-color: #D94F04;
        width: 100%;
        margin-top: 1rem;
      }
      .btn-primary:hover {
        background-color: #015958;
        border-color: #015958;
      }
      .form-label {
        color: #0FC2C0;
      }
      .navbar {
        background-color: #015958 !important;
        position: fixed;
        top: 0;
        width: 100%;
      }
      .navbar-brand, .nav-link {
        color: #0FC2C0 !important;
      }
      .nav-link:hover {
        color: #D94F04 !important;
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
              <a class="nav-link" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Login</a>
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
        <button type="submit" class="btn btn-primary">Entrar</button>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>