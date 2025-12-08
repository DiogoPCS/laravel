@include('head.head')

<body id="body-home" style="background-color: #121212; color: #f5f5f5;">

@include('cabecalho.cabecalho')
    
    <div style="margin-top: 100px; padding-bottom: 40px;">

    <div class="container" id="inicio">

        <div class="row mb-5">
            <div class="col-12">
                
                <div class="mb-4 text-start">
                    <h2 class="fw-bold mb-2">Destaques da Semana</h2>
                    <p class="text-white-50" style="max-width: 800px;">
                        Explore os lançamentos, atualizações e ofertas imperdíveis.
                    </p>
                </div>

                <div id="carouselExample" class="carousel slide rounded-4 overflow-hidden shadow-lg position-relative" data-bs-ride="carousel">
                    
                    <div class="carousel-inner">
                        @php
                            $allowedExt = ['webp','jpg','jpeg','png', 'jfif'];
                            $imgs = [];

                            for ($i = 1; $i <= 3; $i++) {
                                $found = null;
                                foreach ($allowedExt as $ext) {
                                    $pathNoPublic = "images/carousel_{$i}.{$ext}";
                                    $candidate = public_path($pathNoPublic);
                                    
                                    if (file_exists($candidate)) {
                                        $found = asset($pathNoPublic) . '?v=' . filemtime($candidate);
                                        break;
                                    }
                                }
                                $imgs[] = $found ? $found : asset('images/switchImage.svg');
                            }
                        @endphp

                        @foreach($imgs as $idx => $img)
                            <div class="carousel-item {{ $idx === 0 ? 'active' : '' }}">
                                <img src="{{ $img }}" 
                                     class="d-block w-100 banner-epic" 
                                     alt="Destaque {{ $idx+1 }}">
                                
                                <div class="carousel-caption d-none d-md-block text-start" style="bottom: 40px; left: 60px;">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="width: 5%;">
                        <span class="carousel-control-prev-icon p-3 rounded-circle bg-dark bg-opacity-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="width: 5%;">
                        <span class="carousel-control-next-icon p-3 rounded-circle bg-dark bg-opacity-50" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>

            </div>
        </div>
       
        <div class="row g-4">
            
            <div class="col-12 col-md-3 col-lg-2">
                <div class="sticky-top" style="top: 120px; z-index: 10;">
                    @include('filtro.filtro')
                </div>
            </div>

            <div class="col-12 col-md-9 col-lg-10">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="fw-bold m-0">Catálogo de Produtos</h4>
                    
                    <span class="text-white-50 small">Mostrando produtos disponíveis</span>
                </div>

                <div id="products-list">
                    @include('listagem.produtos')
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center">
                <a href="#inicio" class="btn btn-outline-light rounded-pill px-4 py-2">
                    <i class="bi bi-arrow-up-circle me-2"></i> Voltar ao topo
                </a>
            </div>
        </div>

    </div>
    
</div>

@include('footer.footer')

<script>
    (function(){
        document.addEventListener('click', function(e){
            const el = e.target.closest && e.target.closest('a.ajax-filter');
            if(!el) return;
            e.preventDefault();

            const url = el.href;
            const container = document.getElementById('products-list');
            if(!container) return;

            const previous = container.innerHTML;
            container.style.opacity = '0.5';

            fetch(url, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'text/html'
                },
                credentials: 'same-origin'
            }).then(function(res){
                if(!res.ok) throw new Error('Network response was not ok');
                return res.text();
            }).then(function(html){
                container.innerHTML = html;
                container.style.opacity = '1';
                window.history.pushState({}, '', url);
            }).catch(function(err){
                console.error(err);
                container.innerHTML = previous;
                container.style.opacity = '1';
            });
        });
    })();
</script>

<style>
    
    .banner-epic {
        width: 100%;
        height: 550px; 
        object-fit: cover;
        object-position: center top;
        transition: transform 0.3s ease;
    }

    .carousel-inner:hover .banner-epic {
        transform: scale(1.02);
    }

    @media (max-width: 1400px) {
        .banner-epic {
            height: 450px;
        }
    }

    @media (max-width: 768px) {
        .banner-epic {
            height: 250px; 
            border-radius: 12px !important; 
        }
        
        .carousel.rounded-4 {
            border-radius: 12px !important;
        }
    }
</style>

</body>