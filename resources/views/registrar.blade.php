@extends('_partials.body')

@section('conteudo')

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h4 class="card-title text-center">Cadastro de Usuário</h4>
        </div>
        <div class="card-body">
          <form action={{ route ('criar-conta') }} method="POST">
            @csrf
            <div class="mb-3">
              <label for="nome" class="form-label">Nome Completo</label>
              <input type="text" class="form-control" id="nome" name="nome_completo" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="senha" class="form-label">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" required>
            </div>
            <div class="mb-3">
              <label for="confirmar_senha" class="form-label">Confirmar Senha</label>
              <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
            </div>
            
            
            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection