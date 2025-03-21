<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .bg-custom-primary { background-color: #402F25; }
      .bg-custom-secondary { background-color: #8C796D; }
      .text-custom-primary { color: #6FD904; }
      .btn-custom-primary { background-color: #6FD904; color: #fff; }
      .btn-custom-primary:hover { background-color: #5cb200; }
      .animal-card {
        transition: transform 0.2s;
      }
      .animal-card:hover {
        transform: scale(1.05);
      }
    </style>
  </head>
  <body class="bg-custom-secondary">
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
              <a class="nav-link" href="#">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animals List Section -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center mb-4 text-white">Animais Disponíveis para Adoção</h2>
        <div class="row">
          <!-- Animal Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Rex">
              <div class="card-body">
                <h5 class="card-title">Rex</h5>
                <p class="card-text">Um cachorro brincalhão e cheio de energia. Ideal para famílias ativas.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
          <!-- Animal Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Mimi">
              <div class="card-body">
                <h5 class="card-title">Mimi</h5>
                <p class="card-text">Uma gata carinhosa que adora um colo. Perfeita para apartamentos.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
          <!-- Animal Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bolinha">
              <div class="card-body">
                <h5 class="card-title">Bolinha</h5>
                <p class="card-text">Um coelho tranquilo e muito fofo. Ideal para crianças.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
          <!-- Animal Card 4 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Thor">
              <div class="card-body">
                <h5 class="card-title">Thor</h5>
                <p class="card-text">Um cachorro grande e protetor. Ideal para quem busca um companheiro leal.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
          <!-- Animal Card 5 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Luna">
              <div class="card-body">
                <h5 class="card-title">Luna</h5>
                <p class="card-text">Uma gata independente e curiosa. Adora explorar ambientes.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
          <!-- Animal Card 6 -->
          <div class="col-md-4 mb-4">
            <div class="card animal-card">
              <img src="https://via.placeholder.com/300" class="card-img-top" alt="Pipoca">
              <div class="card-body">
                <h5 class="card-title">Pipoca</h5>
                <p class="card-text">Um hamster brincalhão e cheio de energia. Perfeito para crianças.</p>
                <a href="#" class="btn btn-custom-primary">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-custom-primary text-white text-center py-3">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>