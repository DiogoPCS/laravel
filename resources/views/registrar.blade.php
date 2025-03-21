@extends('_partials.body')

@section('conteudo')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow" style="background-color: #BFBFBF; border: none;">
                <div class="card-header" style="background-color: #FF1D00; color: #E5E5E5; text-align: center;">
                    <h3>Cadastro de Usuário</h3>
                </div>
                <div class="card-body">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label" style="color: #404040;">Nome Completo</label>
                            <input type="text" class="form-control" id="name" name="name" required style="background-color: #E5E5E5; border: 1px solid #7F7F7F;">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="color: #404040;">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" required style="background-color: #E5E5E5; border: 1px solid #7F7F7F;">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="color: #404040;">Senha</label>
                            <input type="password" class="form-control" id="password" name="password" required style="background-color: #E5E5E5; border: 1px solid #7F7F7F;">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label" style="color: #404040;">Confirmar Senha</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required style="background-color: #E5E5E5; border: 1px solid #7F7F7F;">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn" style="background-color: #FF1D00; color: #E5E5E5;">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection