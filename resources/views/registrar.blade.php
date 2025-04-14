@extends('_partials/body')

@section('conteudo')

<div class="container mt-5">
    <h1 class="text-center mb-4">Formulário de Registro para Adoção</h1>
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Informações Pessoais</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="nome" class="form-label">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cpf" class="form-label">CPF</label>
                                <input type="text" class="form-control" id="cpf" required>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col-md-6">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" id="telefone" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="endereco" class="form-label">Endereço Completo</label>
                            <input type="text" class="form-control" id="endereco" required>
                        </div>
                        
                        <hr>
                        
                        <h5 class="mb-3">Informações sobre a Adoção</h5>
                        
                        <div class="mb-3">
                            <label for="animal" class="form-label">Animal de Interesse</label>
                            <select class="form-select" id="animal" required>
                                <option value="" selected disabled>Selecione um animal</option>
                                <option value="cachorro">Cachorro</option>
                                <option value="gato">Gato</option>
                                <option value="coelho">Coelho</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="experiencia" class="form-label">Você já teve experiência com animais antes?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experiencia" id="experiencia_sim" value="sim">
                                <label class="form-check-label" for="experiencia_sim">Sim</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="experiencia" id="experiencia_nao" value="nao">
                                <label class="form-check-label" for="experiencia_nao">Não</label>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="motivacao" class="form-label">Por que você quer adotar um animal?</label>
                            <textarea class="form-control" id="motivacao" rows="3" required></textarea>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="termos" required>
                            <label class="form-check-label" for="termos">Li e concordo com os termos de adoção</label>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Enviar Formulário</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="card mt-4">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">Termos de Adoção</h5>
                </div>
                <div class="card-body">
                    <p>Ao adotar um animal através do nosso sistema, você concorda com os seguintes termos:</p>
                    <ul>
                        <li>Fornecer cuidados veterinários regulares</li>
                        <li>Oferecer alimentação adequada e água fresca</li>
                        <li>Prover um ambiente seguro e limpo</li>
                        <li>Dar amor, atenção e exercícios diários</li>
                        <li>Não abandonar o animal em hipótese alguma</li>
                    </ul>
                    <p>A equipe do abrigo poderá entrar em contato para verificar as condições do animal após a adoção.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection