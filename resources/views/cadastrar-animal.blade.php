@extends('_partials/body')
@section('conteudo')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="text-center mb-0">Cadastrar Animal para Adoção</h3>
                </div>
                
                <div class="card-body">
                   
                        
                        <!-- Seção de Informações Básicas -->
                        <h5 class="mb-3 text-primary">Informações Básicas</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome do Animal *</label>
                                <input type="text" class="form-control" id="nome" name="nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tipo">Tipo *</label>
                                <select class="form-control" id="tipo" name="tipo" required>
                                    <option value="">Selecione...</option>
                                    <option value="cachorro">Cachorro</option>
                                    <option value="gato">Gato</option>
                                    <option value="coelho">Coelho</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="raca">Raça</label>
                                <input type="text" class="form-control" id="raca" name="raca">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="idade">Idade (anos) *</label>
                                <input type="number" class="form-control" id="idade" name="idade" min="0" max="30" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="sexo">Sexo *</label>
                                <select class="form-control" id="sexo" name="sexo" required>
                                    <option value="">Selecione...</option>
                                    <option value="macho">Macho</option>
                                    <option value="femea">Fêmea</option>
                                </select>
                            </div>
                        </div>
                        
                        <!-- Seção de Saúde -->
                        <h5 class="mb-3 mt-4 text-primary">Saúde</h5>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="vacinado">Vacinado *</label>
                                <select class="form-control" id="vacinado" name="vacinado" required>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                    <option value="parcial">Parcialmente</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="castrado">Castrado *</label>
                                <select class="form-control" id="castrado" name="castrado" required>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="saude">Estado de Saúde *</label>
                                <select class="form-control" id="saude" name="saude" required>
                                    <option value="otimo">Ótimo</option>
                                    <option value="bom">Bom</option>
                                    <option value="regular">Regular</option>
                                    <option value="especial">Necessidades especiais</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="observacoes_saude">Observações de Saúde</label>
                            <textarea class="form-control" id="observacoes_saude" name="observacoes_saude" rows="2"></textarea>
                        </div>
                        
                        <!-- Seção de Comportamento -->
                        <h5 class="mb-3 mt-4 text-primary">Comportamento</h5>
                        <div class="form-group">
                            <label for="temperamento">Temperamento *</label>
                            <select class="form-control" id="temperamento" name="temperamento" required>
                                <option value="calmo">Calmo</option>
                                <option value="ativo">Ativo</option>
                                <option value="timido">Tímido</option>
                                <option value="brincalhao">Brincalhão</option>
                                <option value="protetor">Protetor</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="convivencia">Convive bem com *</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="convive_criancas" name="convive_criancas">
                                <label class="form-check-label" for="convive_criancas">Crianças</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="convive_gatos" name="convive_gatos">
                                <label class="form-check-label" for="convive_gatos">Gatos</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="convive_caes" name="convive_caes">
                                <label class="form-check-label" for="convive_caes">Cães</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="convive_outros" name="convive_outros">
                                <label class="form-check-label" for="convive_outros">Outros animais</label>
                            </div>
                        </div>
                        
                        <!-- Seção de Foto e Descrição -->
                        <h5 class="mb-3 mt-4 text-primary">Foto e Descrição</h5>
                        <div class="form-group">
                            <label for="foto">Foto do Animal *</label>
                            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
                            <small class="form-text text-muted">A imagem deve ser nítida e mostrar claramente o animal</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="descricao">Descrição *</label>
                            <textarea class="form-control" id="descricao" name="descricao" rows="4" required 
                                      placeholder="Descreva o animal, seu comportamento, história, etc."></textarea>
                        </div>
                        
                        <!-- Botão de Submissão -->
                        <div class="form-group text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Cadastrar Animal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection