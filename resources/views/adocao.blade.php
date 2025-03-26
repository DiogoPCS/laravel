@extends('_partials/main')

@section('conteudo')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1>ADOÇÃO DE ANIMAIS</h1>
        </div>
    </div>
</div>
  <!-- Animal Details Section -->
  <section class="py-5">
    <div class="animal-details-container">
      <div class="row">
        <div class="col-md-6">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQO11M405Scs_BMVqId6DsP7yYwPk9EOZqwQA&s" class="img-fluid" alt="Rex" style="width: 100%">
        </div>
        <div class="col-md-6">
          <h2 class="text-custom-primary">Rex</h2>
          <p class="lead">Um cachorro brincalhão e cheio de energia.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Espécie:</strong> Cachorro</li>
            <li class="list-group-item"><strong>Raça:</strong> Labrador</li>
            <li class="list-group-item"><strong>Idade:</strong> 2 anos</li>
            <li class="list-group-item"><strong>Peso:</strong> 25 kg</li>
            <li class="list-group-item"><strong>Altura:</strong> 60 cm</li>
            <li class="list-group-item"><strong>Cor:</strong> Caramelo</li>
            <li class="list-group-item"><strong>Personalidade:</strong> Amigável, brincalhão e protetor.</li>
            <li class="list-group-item"><strong>História:</strong> Rex foi resgatado das ruas e está procurando um lar amoroso.</li>
          </ul>
          <div class="mt-4">
            <a href="#" class="btn btn-custom-primary btn-lg">Quero Adotar!</a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection