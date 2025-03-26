@extends('_partials/main')

@section('conteudo')
    <!-- Registration Form -->
    <div class="register-container">
      <h2 class="text-center mb-4">Registro</h2>
      <form action="{{ route('registro') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" class="form-control" id="name" name="nome_completo" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="senha" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirme sua Senha</label>
          <input type="password" class="form-control" id="confirm-password" name="confirmar_senha" placeholder="Confirme sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom-primary">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="#" class="text-custom-primary">Faça login</a></p>
        </div>
      </form>
    </div>
@endsection