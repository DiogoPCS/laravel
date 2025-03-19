<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adoção de Animais</title>
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
      .register-container {
        background-color: #fff;
        padding: 2rem;
        border-radius: 0.5rem;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 5rem auto;
      }
      .register-container h2 {
        color: #6341E5; /* Roxo escuro para o título */
        margin-bottom: 1.5rem;
      }
      .form-control:focus {
        border-color: #9C47E6; /* Roxo médio para o foco dos inputs */
        box-shadow: 0 0 0 0.2rem rgba(156, 71, 230, 0.25);
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
              <a class="nav-link" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Register Container -->
    <div class="register-container">
      <h2 class="text-center">Registro</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirme a Senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Registrar</button>
        <div class="text-center mt-3">
          <span>Já tem uma conta? <a href="#" style="color: #9C47E6;">Faça login</a></span>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <span>© 2023 Adoção de Animais. Todos os direitos reservados.</span>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>