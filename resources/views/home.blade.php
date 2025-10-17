@include('head.head')

@include('cabecalho.cabecalho')
    
@include('menu-superior.menu')

<div style="margin-top: 170px">

    <div class="container-fluid" id="inicio">

        {{-- Banner Principal --}}
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
                <h1>Novidades</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eum maiores quisquam nemo iste, quos, sapiente praesentium optio reiciendis ullam cum vel eius ex at eaque illo molestiae exercitationem expedita!</p>
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExample" class="carousel slide">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXPlAJ3WM9i4Swb6bkC2PxLnKbelPHb_Ix7A&s" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://s2-techtudo.glbimg.com/l2fj_-Fb94al5Z0gMopIAu7lYK8=/1200x/smart/filters:cover():strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2024/R/u/7EuJo2QoSBphFTSSEIDw/techtudo-225-m.jpg" class="d-block w-100 rounded" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTewf1YeYlgcAdj_bxrXfRb5F5XlWINRbnZ7w&s" class="d-block w-100 rounded" alt="...">
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

        {{-- Oferta Relâmpago --}}
        <div class="row d-flex justify-content-center my-3">
            <div class="col-10 bg-secondary text-light rounded">
                <div class="row">
                    <div class="col-6 text-center">
                        <h1>Oferta Relâmpago</h1>
                    </div>
                    <div class="col-6 d-flex justify-content-between">
                        <p>Ver mais</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Filtro Lateral e Listagem de Produtos --}}

        <div class="row">
            <div class="col-2">
                @include('filtro.filtro')
            </div>
            <div class="col-9">
                @include('listagem.produtos')
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a href="#inicio" class="p-3 bg-dark text-light rounded m-3" style="text-decoration: none;">Voltar ao início</a>
            </div>
        </div>

    </div>
    
</div>

@include('footer.footer')
