@include('head.head')

<body  id="body-home">

@include('cabecalho.cabecalho')
    
    <div style="margin-top: 120px">

    <div class="container-fluid" id="inicio">

        {{-- Banner Principal --}}
        <div class="row d-flex bg-dark justify-content-center align-items-center">
            <div class="col-10 text-light">
                <h1O novo console apresenta uma tela OLED vibrante de 7 polegadas (17,78 cm), um amplo suporte ajustável, uma base com uma porta LAN integrada, 64 GB de espaço de armazenamento interno e um áudio aprimorado. molestiae exercitationem expedita!</p>
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner p-3">
                                <div class="carousel-item active">
                                <img src="{{ asset( 'images/switchImage.svg')}}" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset( 'images/switchImage.svg')}}" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="{{ asset( 'images/switchImage.svg')}}" class="d-block w-100 rounded" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
       
        {{-- Filtro Lateral e Listagem de Produtos --}}

        <div class="row">
            {{-- Coluna do Filtro --}}
            <div class="col-2">
                @include('filtro.filtro')
            </div>

            {{-- 
              COLUNA DA LISTAGEM (CORRIGIDA)
              1. Mudei de 'col-9' para 'col-10' para preencher a linha (2 + 10 = 12).
              2. O @include agora chama seu NOVO arquivo de grid.
            --}}
            <div class="col-10">
                <div id="products-list">
                    @include('listagem.produtos')
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="#inicio" class="p-3 bg-dark text-light rounded m-3" style="text-decoration: none;">Voltar ao início</a>
            </div>
        </div>

    </div>
    
</div>

</body>
@include('footer.footer')

<script>
    (function(){
        // Delegate clicks on any filter link with class 'ajax-filter'
        document.addEventListener('click', function(e){
            const el = e.target.closest && e.target.closest('a.ajax-filter');
            if(!el) return;
            e.preventDefault();

            const url = el.href;
            const container = document.getElementById('products-list');
            if(!container) return;

            // show a simple loading state
            const previous = container.innerHTML;
            container.innerHTML = '<div class="p-4 text-center">Carregando...</div>';

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
                // Replace container HTML with returned partial
                container.innerHTML = html;
            }).catch(function(err){
                console.error(err);
                container.innerHTML = previous; // restore
                alert('Erro ao aplicar o filtro. Veja o console para detalhes.');
            });
        });
    })();
</script>