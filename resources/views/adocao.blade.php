@extends('_partials/body')

@section('conteudo')
<div class="container mt-5">
    <!-- Banner Principal -->
    <div class="row">
        <div class="col-md-12 my-3">
            <div class="card border-0 shadow-lg">
                <img src="https://images.unsplash.com/photo-1583511655826-05700d52f4d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" 
                     class="card-img-top rounded" 
                     alt="Vários animais esperando por adoção" 
                     style="height: 400px; object-fit: cover;">
                <div class="card-img-overlay d-flex flex-column justify-content-center bg-dark bg-opacity-50">
                    <div class="text-center text-white">
                        <h1 class="display-4 fw-bold">Dê um lar para quem precisa</h1>
                        <p class="lead">Centenas de animais esperam por uma segunda chance</p>
                        <a href="#animais-disponiveis" class="btn btn-primary btn-lg mt-3">Ver animais para adoção</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre a Adoção -->
    <div class="row my-5 py-4 bg-light rounded">
        <div class="col-md-6">
            <h2 class="fw-bold mb-4">Por que adotar?</h2>
            <p class="lead">Adotar um animal é um ato de amor que transforma vidas - tanto a do animal quanto a sua.</p>
            <p>Ao adotar, você:</p>
            <ul class="list-unstyled">
                <li class="mb-2"><i class="fas fa-paw text-primary me-2"></i> Salva uma vida</li>
                <li class="mb-2"><i class="fas fa-paw text-primary me-2"></i> Combate o comércio de animais</li>
                <li class="mb-2"><i class="fas fa-paw text-primary me-2"></i> Ganha um companheiro leal</li>
                <li class="mb-2"><i class="fas fa-paw text-primary me-2"></i> Ajuda a reduzir o número de animais abandonados</li>
            </ul>
        </div>
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1552053831-71594a27632d?ixlib=rb-1.2.1&auto=format&fit=crop&w=612&q=80" 
                 alt="Cachorro feliz com sua nova família" 
                 class="img-fluid rounded shadow">
        </div>
    </div>

    <!-- Animais Disponíveis -->
    <div id="animais-disponiveis" class="row my-5">
        <h2 class="text-center mb-5 fw-bold">Animais disponíveis para adoção</h2>
        
        <!-- Cachorro -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1586671267731-da2cf3ceeb80?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                     class="card-img-top" 
                     alt="Cachorro para adoção"
                     style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Thor</h5>
                    <p class="text-muted">Macho, 2 anos, porte médio</p>
                    <p class="card-text">Thor é um cachorro brincalhão e cheio de energia. Adora passeios e será seu companheiro fiel.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary">Quero adotar</a>
                        <small class="text-muted">Disponível</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Gato -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                     class="card-img-top" 
                     alt="Gato para adoção"
                     style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Luna</h5>
                    <p class="text-muted">Fêmea, 1 ano, porte pequeno</p>
                    <p class="card-text">Luna é uma gata carinhosa e tranquila. Perfeita para quem busca um companheiro mais quieto.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary">Quero adotar</a>
                        <small class="text-muted">Disponível</small>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Coelho -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="https://images.unsplash.com/photo-1556838803-cc94986cb631?ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" 
                     class="card-img-top" 
                     alt="Coelho para adoção"
                     style="height: 250px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Cotton</h5>
                    <p class="text-muted">Macho, 6 meses, anão</p>
                    <p class="card-text">Cotton é um coelho dócil e curioso. Ideal para quem quer um pet diferente e cheio de personalidade.</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="btn btn-primary">Quero adotar</a>
                        <small class="text-muted">Disponível</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Processo de Adoção -->
    <div class="row my-5 py-4 bg-primary text-white rounded">
        <h2 class="text-center mb-5 fw-bold">Como adotar?</h2>
        <div class="col-md-3 text-center mb-4">
            <div class="bg-white text-primary rounded-circle p-3 mb-3 d-inline-block">
                <i class="fas fa-search fa-2x"></i>
            </div>
            <h4>1. Escolha</h4>
            <p>Encontre o animal que mais combina com você</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <div class="bg-white text-primary rounded-circle p-3 mb-3 d-inline-block">
                <i class="fas fa-file-alt fa-2x"></i>
            </div>
            <h4>2. Formulário</h4>
            <p>Preencha o formulário de adoção</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <div class="bg-white text-primary rounded-circle p-3 mb-3 d-inline-block">
                <i class="fas fa-home fa-2x"></i>
            </div>
            <h4>3. Visita</h4>
            <p>Agendamos uma visita ao seu lar</p>
        </div>
        <div class="col-md-3 text-center mb-4">
            <div class="bg-white text-primary rounded-circle p-3 mb-3 d-inline-block">
                <i class="fas fa-heart fa-2x"></i>
            </div>
            <h4>4. Adoção</h4>
            <p>Leve seu novo amigo para casa!</p>
        </div>
    </div>
</div>
@endsection