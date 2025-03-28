@extends('_partials.body')

@section('conteudo')

    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://media2.giphy.com/media/gJ41o353C9FEQ/200w.gif?cid=6c09b952lkptdo8n1pv0nkjxhseghj7fhclsu02kba1mu9mk&ep=v1_gifs_search&rid=200w.gif&ct=g" class="card-img-top" alt="Cachorro">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Adote um cachorro e ganhe um amigo para toda a vida.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.pinimg.com/originals/e1/43/92/e14392b3bb9f745025a5cf6a9abe11be.gif" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um companheiro cheio de personalidade.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.gifer.com/oGX.gif" class="card-img-top" alt="Outros">
            <div class="card-body">
              <h5 class="card-title">Outros</h5>
              <p class="card-text">Conheça outros animais que também precisam de um lar.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection

