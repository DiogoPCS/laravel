@extends('_partials/main')

@section('conteudo')
    <!-- Login Form -->
    <div class="login-container">
      <h2 class="text-center mb-4">Login</h2>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom-primary">Entrar</button>
        </div>
        <div class="text-center mt-3">
          <a href="#" class="text-custom-primary">Esqueceu a senha?</a>
        </div>
        <div class="text-center mt-3">
          <p>Não tem uma conta? <a href="#" class="text-custom-primary">Cadastre-se</a></p>
        </div>
      </form>
    </div>
@endsection