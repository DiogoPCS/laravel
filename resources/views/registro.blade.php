  @extends('_partials/main')

  @section('conteudo')

    <!-- Registration Form -->
    <div class="register-container">
      <h2 class="text-center mb-4">Registro</h2>
      <form action="{{ route('registro') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome Completo</label>
          <input type="text" name="nome_completo" class="form-control" id="name" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label">Confirme sua Senha</label>
          <input type="password" name="confirmar_senha" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom-primary">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p>Já tem uma conta? <a href="#" class="text-custom-primary">Faça login</a></p>
        </div>
      </form>
    </div>

    <!-- Footer -->
    <footer class="bg-custom-primary text-white text-center py-3 fixed-bottom">
      <div class="container">
        <p>&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
      </div>
    </footer>

  @endsection