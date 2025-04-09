@extends('_partials/body')

@section('conteudo')
<div class="container mt-4">
    <div class="jumbotron bg-light p-5 rounded-lg mb-4">
        <h1 class="display-4 text-center">Adote um Amigo</h1>
        <p class="lead text-center">Dê um lar amoroso para um animal que precisa de você</p>
        <hr class="my-4">
        <p class="text-center">Todos os nossos animais são vacinados, castrados e prontos para fazer parte da sua família!</p>
    </div>

    <!-- Filtros -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Encontre seu companheiro ideal</h5>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="tipo">Tipo de Animal</label>
                                <select id="tipo" class="form-control">
                                    <option selected>Todos</option>
                                    <option>Cachorro</option>
                                    <option>Gato</option>
                                    <option>Coelho</option>
                                    <option>Outros</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="idade">Idade</label>
                                <select id="idade" class="form-control">
                                    <option selected>Todas</option>
                                    <option>Filhote</option>
                                    <option>Adulto</option>
                                    <option>Idoso</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="sexo">Sexo</label>
                                <select id="sexo" class="form-control">
                                    <option selected>Qualquer</option>
                                    <option>Macho</option>
                                    <option>Fêmea</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary btn-block">Filtrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Animais para adoção -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://uploads.metroimg.com/wp-content/uploads/2023/11/05163003/Cachorro-tem-expressao-facial-unica-e-vira-meme-Esta-me-julgando-7.jpg" 
                     class="card-img-top" alt="Cachorro para adoção">
                <div class="card-body">
                    <h5 class="card-title">Thor</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Vira-lata<br>
                        <strong>Idade:</strong> 2 anos<br>
                        <strong>Sexo:</strong> Macho<br>
                        <strong>Temperamento:</strong> Brincalhão e carinhoso
                    </p>
                    <p class="card-text">Thor é um cachorro muito dócil que adora crianças e outros animais. Ele está esperando por uma família que lhe dê muito amor!</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://images.steamusercontent.com/ugc/1830154294882842601/381D49F03A337E0E264E0E709AA3E4558428B967/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false" 
                     class="card-img-top" alt="Gato para adoção">
                <div class="card-body">
                    <h5 class="card-title">Luna</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Siamês<br>
                        <strong>Idade:</strong> 1 ano<br>
                        <strong>Sexo:</strong> Fêmea<br>
                        <strong>Temperamento:</strong> Calma e afetuosa
                    </p>
                    <p class="card-text">Luna é uma gatinha muito tranquila que adora carinho e sonecas ao sol. Ideal para quem busca um companheiro mais quieto.</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://cdn.acritica.net/upload/dn_noticia/2020/07/1595428559.jpg" 
                     class="card-img-top" alt="Coelho para adoção">
                <div class="card-body">
                    <h5 class="card-title">Cotton</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Coelho anão<br>
                        <strong>Idade:</strong> 6 meses<br>
                        <strong>Sexo:</strong> Macho<br>
                        <strong>Temperamento:</strong> Ativo e curioso
                    </p>
                    <p class="card-text">Cotton é um coelhinho cheio de energia que adora explorar ambientes novos. Ele será um ótimo companheiro para quem tem espaço em casa.</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mais animais -->
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://upload.wikimedia.org/wikipedia/commons/2/26/YellowLabradorLooking_new.jpg" 
                     class="card-img-top" alt="Cachorro para adoção">
                <div class="card-body">
                    <h5 class="card-title">Rex</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Labrador<br>
                        <strong>Idade:</strong> 3 anos<br>
                        <strong>Sexo:</strong> Macho<br>
                        <strong>Temperamento:</strong> Leal e protetor
                    </p>
                    <p class="card-text">Rex é um cachorro muito inteligente e obediente, adora brincar e se dá bem com todos.</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Persialainen.jpg/200px-Persialainen.jpg" 
                     class="card-img-top" alt="Gato para adoção">
                <div class="card-body">
                    <h5 class="card-title">Snow</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Persa<br>
                        <strong>Idade:</strong> 5 anos<br>
                        <strong>Sexo:</strong> Fêmea<br>
                        <strong>Temperamento:</strong> Independente e elegante
                    </p>
                    <p class="card-text">Snow é uma gata que gosta de seu espaço, mas adora receber carinho quando está no clima.</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="https://i.ytimg.com/vi/58xsiTeMLGs/hqdefault.jpg" 
                     class="card-img-top" alt="Porquinho da Índia para adoção">
                <div class="card-body">
                    <h5 class="card-title">Pipoca</h5>
                    <p class="card-text">
                        <strong>Raça:</strong> Porquinho da Índia<br>
                        <strong>Idade:</strong> 1 ano<br>
                        <strong>Sexo:</strong> Fêmea<br>
                        <strong>Temperamento:</strong> Sociável e comunicativa
                    </p>
                    <p class="card-text">Pipoca adora interagir e faz vários sons fofos quando está feliz. Perfeita para iniciantes.</p>
                </div>
                <div class="card-footer bg-white">
                    <a href="#" class="btn btn-primary btn-block">Quero adotar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações sobre adoção -->
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4>Processo de Adoção</h4>
                </div>
                <div class="card-body">
                    <ol>
                        <li><strong>Visita:</strong> Conheça o animal pessoalmente em nosso abrigo</li>
                        <li><strong>Entrevista:</strong> Responda a um breve questionário sobre seus hábitos e estilo de vida</li>
                        <li><strong>Documentação:</strong> Apresente RG, CPF e comprovante de residência</li>
                        <li><strong>Visita domiciliar:</strong> Nossa equipe fará uma visita rápida para verificar as condições do lar</li>
                        <li><strong>Adoção:</strong> Assinatura do termo de responsabilidade e entrega do animal</li>
                    </ol>
                    <p class="mt-3">Todo o processo é gratuito e nosso objetivo é garantir a melhor match entre você e seu novo amigo!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection