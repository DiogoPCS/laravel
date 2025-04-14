@extends('_partials/body')

@section('conteudo')
    <div class="container mt-5">
      <h1 class="text-center mb-4">Encontre seu novo amigo!</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="/caminho/para/imagem-cachorro.jpg" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Um lindo cachorro à espera de um lar.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/caminho/para/imagem-gato.jpg" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Um gato carinhoso procurando uma família.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="/caminho/para/imagem-coelho.jpg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Um coelho fofo que adora brincar.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection



