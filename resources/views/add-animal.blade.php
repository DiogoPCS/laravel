
@extends('_partials/main')

@section('conteudo')
<!-- Registration Form -->
<div class="register-container">
  <h2 class="text-center mb-4">Registro Animal</h2>
  <form action="{{ route('add-animal') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome Completo</label>
      <input type="text" class="form-control" id="name" name="nome" placeholder="Digite o nome" required>
    </div>
    <div class="mb-3">
      <label for="cor" class="form-label">Cor</label>
      <input type="text" class="form-control" id="cor" name="cor" placeholder="Digite a cor" required>
    </div>
    <div class="mb-3">
      <label for="peso" class="form-label">Peso</label>
      <input type="text" class="form-control" id="peso" name="peso" placeholder="Digite o peso" required>
    </div>
    <div class="mb-3">
      <label for="idade" class="form-label">Idade</label>
      <input type="text" class="form-control" id="idade" name="idade" placeholder="Digite a idade" required>
    </div>
    <div class="mb-3">
      <label for="especie" class="form-label">Espécie</label>
      <input type="text" class="form-control" id="especie" name="especie" placeholder="Digite a espécie" required>
    </div>
    <div class="mb-3">
      <label for="raca" class="form-label">Raça</label>
      <input type="text" class="form-control" id="raca" name="raca" placeholder="Digite a raça" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-custom-primary">Registrar</button>
    </div>
    
  </form>
</div>
@endsection
