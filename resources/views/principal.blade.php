

@extends('_partials.body')
@section('conteudo')
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.gifer.com/2g.gif" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Adote um cachorro e ganhe um amigo para toda a vida.</p>
              <a href="#" class="btn btn-primary" style="background-color: #FF1D00; border: none;">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://media.tenor.com/pzaBHhUlVQ8AAAAM/gato-dan%C3%A7ando.gif" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um companheiro cheio de personalidade.</p>
              <a href="#" class="btn btn-primary" style="background-color: #FF1D00; border: none;">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://media1.giphy.com/media/IA3fvW1u6JFz77E7KT/200w.gif?cid=6c09b952zwaxh16q9bq48vx70s141eftq0wjxjqsbhc4vzvt&ep=v1_gifs_search&rid=200w.gif&ct=g" class="card-img-top" alt="Outros">
            <div class="card-body">
              <h5 class="card-title">Outros</h5>
              <p class="card-text">Conheça outros animais que também precisam de um lar.</p>
              <a href="#" class="btn btn-primary" style="background-color: #FF1D00; border: none;">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection