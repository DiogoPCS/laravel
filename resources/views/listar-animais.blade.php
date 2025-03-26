@extends('_partials/main')

@section('conteudo')
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

@endsection