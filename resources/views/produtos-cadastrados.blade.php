@include('head.head')

<body class="bg-login">
    
    @include('cabecalho.cabecalho')
    @include('menu-superior.menu')    
    <div class="container" style="margin-top: 167px;">

        <div class="row g-3 align-items-stretch">
            <div class="col-12 col-md-2 d-flex">
                <a href="#" class="text-decoration-none d-block">
                    <div class="bg-dark rounded-2 border text-center border-2 border-white border-opacity-25 d-flex flex-column justify-content-center align-items-center p-3 h-100 w-100">
                        <img src="{{ asset('images/mais.svg') }}" class="opacity-50 mb-2" alt="mais">
                        <h6 class="text-light opacity-50 mb-0">Adicionar produto</h6>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-4 d-flex px-0">
                @include('card-adimin.card-adimin')
                
            </div>

            <div class="col-12 col-md-6 d-flex px-0">
            </div>
        </div>
    </div>
    @include('editar.editar-produto')
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
