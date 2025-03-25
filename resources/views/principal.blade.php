@extends('_partials/body')
@section('conteudo')
<div class="container mt-4">
      <h1 class="text-center">Adote um Amigo</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://uploads.metroimg.com/wp-content/uploads/2023/11/05163003/Cachorro-tem-expressao-facial-unica-e-vira-meme-Esta-me-julgando-7.jpg" class="card-img-top" alt="Cachorro para adoção">
            <div class="card-body">
              <h5 class="card-title">Cachorro</h5>
              <p class="card-text">Um amigo leal esperando por você.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://images.steamusercontent.com/ugc/1830154294882842601/381D49F03A337E0E264E0E709AA3E4558428B967/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" class="card-img-top" alt="Gato para adoção">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Um companheiro carinhoso para sua casa.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://cdn.acritica.net/upload/dn_noticia/2020/07/1595428559.jpg" class="card-img-top" alt="Coelho para adoção">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Um amigo fofo e cheio de energia.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
