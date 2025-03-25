@extends('_partials/body')

@section('conteudo')
  <div class="container mt-5">
      <div class="row">
        <div class="col-md-12 my-5">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDLqNtZw0QdFpXxJJbgM_iwygQ3DHVJNEEUQ&s" alt="Cachorro" style="height: 400px">
            <div class="card-body">
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD69qAgguZqA-vNe-g-zEcY4KfCfBnXH6udw&s" class="card-img-top" alt="Gato">
            <div class="card-body">
              <h5 class="card-title">Gato</h5>
              <p class="card-text">Adote um gato e tenha um companheiro fiel.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://blog.polipet.com.br/wp-content/uploads/2024/02/coelho-scaled.jpeg" class="card-img-top" alt="Coelho">
            <div class="card-body">
              <h5 class="card-title">Coelho</h5>
              <p class="card-text">Adote um coelho e encha sua vida de alegria.</p>
              <a href="#" class="btn btn-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
            <div class="card">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDLqNtZw0QdFpXxJJbgM_iwygQ3DHVJNEEUQ&s" class="card-img-top" alt="Cachorro">
              <div class="card-body">
                <h5 class="card-title">Cachorro</h5>
                <p class="card-text">Adote um cachorro e dê a ele um lar cheio de amor.</p>
                <a href="#" class="btn btn-primary">Adotar</a>
              </div>
            </div>
          </div>
      </div>
    </div>
@endsection