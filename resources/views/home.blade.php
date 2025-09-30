<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <div class="container-fluid fixed-top">
        <div class="row">
            <div class="col-6 d-flex justify-content-start align-items-center">
                <img src="{{ asset('images/logo.svg') }}" width="200px">
                <img src="{{ asset('images/shield.svg') }}" width="55px">
                <p style="color: white">Assistência</p>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <div class="bg-light rounded d-flex justify-content-center align-items-center w-25 m-2" style="height: 50px">
                    <p>pesquisar</p>
                </div>
                <div class="bg-light rounded d-flex justify-content-center align-items-center w-25 m-2" style="height: 50px">
                    <p>Iniciar Sessão</p>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container-fluid" style="margin-top: 85px"   >
        <div class="row">
            <div class="col-6 d-flex justify-content-start">
                {{-- Botao Hamburguer --}}
                <a class="btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                    <img src="https://cdn4.iconfinder.com/data/icons/multimedia-75/512/multimedia-24-512.png" width="55px">Categorias
                </a>
            </div>
            <div class="col-6 d-flex justify-content-end">
                <p>Ofertas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
    </div>

















 <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
        <div class="col-12">
            <div class="bg-dark text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Jogos</p>
            </div>
            <div class="bg-dark text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Consoles</p>
            </div>
            <div class="bg-dark text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Informática</p>
            </div>
        </div>
    </div>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>