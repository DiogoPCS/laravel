@extends('_partials/body')
@section('conteudo')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center mb-0">Cadastre-se para Adotar</h3>
                </div>
                
                <div class="card-body">
                    
                        
                        
                        <div class="form-group">
                            <label for="nome">Nome Completo *</label>
                            <input type="text" class="form-control" id="nome" name="nome" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">E-mail *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="telefone">Telefone *</label>
                                <input type="tel" class="form-control" id="telefone" name="telefone" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cpf">CPF *</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="data_nascimento">Data de Nascimento *</label>
                                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="endereco">Endereço Completo *</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" required>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="senha">Senha *</label>
                                <input type="password" class="form-control" id="senha" name="senha" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="senha_confirmation">Confirme a Senha *</label>
                                <input type="password" class="form-control" id="senha_confirmation" name="senha_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="termos" name="termos" required>
                            <label class="form-check-label" for="termos">
                                Aceito os <a href="#" data-toggle="modal" data-target="#termosModal">termos de uso</a> *
                            </label>
                        </div>
                        
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Cadastrar</button>
                        </div>
                        
                        <div class="text-center mt-3">
                            <p>Já tem uma conta? <a href="{{ route('login') }}">Faça login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal com os Termos de Uso -->
<div class="modal fade" id="termosModal" tabindex="-1" role="dialog" aria-labelledby="termosModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termosModalLabel">Termos de Uso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Ao se cadastrar em nosso sistema, você concorda com:</p>
                <ol>
                    <li>Fornecer informações verdadeiras e atualizadas</li>
                    <li>Manter suas credenciais de acesso em segurança</li>
                    <li>Responsabilizar-se por todas as atividades realizadas com sua conta</li>
                    <li>Respeitar as políticas de adoção responsável</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
@endsection