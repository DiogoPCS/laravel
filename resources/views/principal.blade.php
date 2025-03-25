
@extends('_partials.body')

@section('conteudo')
    <div class="container mt-5">
      <div class="jumbotron text-center" style="background-color: #7F7F7F; color: #E5E5E5; padding: 20px;">
        <h1 class="display-4">Encontre seu novo amigo!</h1>
        <p class="lead">Adote um animal e dê a ele um lar cheio de amor.</p>
        <a class="btn btn-primary btn-lg" href="/registrar" role="button">Registrar-se para Adotar</a>
      </div>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO11M405Scs_BMVqId6DsP7yYwPk9EOZqwQA&s" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Adote um cachorro e ganhe um companheiro fiel.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQu32GbP6NdP-hrN5dbJgf2PowmZsVEH4LrOQ&s" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um amigo independente e carinhoso.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ5_Q5J1VNwNfWY3uwG59a1FiCCzuOooQnZA&s" class="card-img-top" alt="Outros">
            <div class="card-body">
              <h5 class="card-title">Outros</h5>
              <p class="card-text">Temos outros animais esperando por um lar.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection