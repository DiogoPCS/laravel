  @extends('_partials.body')
  
  @section('conteudo')
    <div class="container mt-4">
      <h1 class="text-center">Encontre seu novo amigo!</h1>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.gifer.com/2Me4.gif" class="card-img-top" alt="Cachorro 1">
            <div class="card-body">
              <h5 class="card-title">Rex</h5>
              <p class="card-text">Rex é um cachorro muito brincalhão e cheio de energia. Ele adora crianças e outros animais.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.gifer.com/2Me4.gif" class="card-img-top" alt="Cachorro 2">
            <div class="card-body">
              <h5 class="card-title">Luna</h5>
              <p class="card-text">Luna é uma cadela muito carinhosa e tranquila. Ela adora passear e receber carinho.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://i.gifer.com/2Me4.gif" class="card-img-top" alt="Cachorro 3">
            <div class="card-body">
              <h5 class="card-title">Max</h5>
              <p class="card-text">Max é um cachorro muito inteligente e obediente. Ele é perfeito para famílias ativas.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection
