<div class="container-fluid fixed-top bg-black text-light" style="height: 76px;">
    <div class="row h-100 align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <a href="{{ url('/') }}" class="d-inline-block" aria-label="Ir para a página inicial">
                        <img src="{{ asset('images/logo.svg') }}" width="120" class="me-2" alt="logo">
                    </a>

            <a href="" class="d-flex text-decoration-none align-items-center text-light ms-2">
                <img src="{{ asset('images/shield.svg') }}" style="width:20px;" class="me-2" alt="assist">
                <span style="color: white; margin: 0; font-size:0.9rem;">Assistência</span>
            </a>
        </div>

        <div class="col-6 d-flex justify-content-end align-items-center">
            <form method="GET" action="{{ route('produtos.search') }}" class="d-flex">
                <div class="bg-light rounded-pill d-flex align-items-center" style="height:36px; padding-left:6px; padding-right:8px;">
                    <label for="search" class="me-2 mb-0"><img src="{{ asset('images/search.svg') }}" alt="search" style="height:24px;"></label>
                    <input id="search" name="q" type="text" class="form-control bg-transparent border-0" placeholder="Pesquisar" style="box-shadow:none; width:220px;" value="{{ request('q') }}">
                </div>
            </form>
        </div>
    </div>

    <div class="row bg-dark text-light" style="height:40px;">
        <div class="col-6 d-flex align-items-center">
            <button class="btn text-light d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <img src="{{ asset('images/menu.svg') }}" style="width:22px;" class="me-2">
                <span style="font-size:0.95rem;">Categorias</span>
            </button>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end text-light">
            <p class="mb-0" style="font-size:0.95rem;">Ofertas</p>
        </div>
    </div>

</div>

<div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header bg-black d-flex justify-content-between">
    <h5 class="offcanvas-title text-light" id="offcanvasWithBothOptionsLabel">Categorias</h5>
    <button type="button" class=" bg-black text-reset border-0 " data-bs-dismiss="offcanvas" aria-label="Close"><img src="{{ asset('images/x.svg') }}" style="width: 8px; height: auto;"></button>
  </div>
  <div class="offcanvas-body">
     <div class="row">
        <div class="col-12">
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Jogos</p>
            </div>
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Consoles</p>
            </div>
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Informática</p>
            </div>
        </div>
    </div>
    </div>
  </div>