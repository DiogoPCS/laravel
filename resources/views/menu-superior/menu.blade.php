


<div class="container-fluid fixed-top bg-dark text-light" style="margin-top: 126px"   >
        <div class="row">
            <div class="col-6 d-flex justify-content-start ">
                {{-- Botao Hamburguer --}}
            <button class="btn text-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><img src="{{ asset ('images/menu.svg') }}" width="55px">Categorias</button>

                
            </div>
            <div class="col-6 d-flex align-items-center justify-content-end text-light">
                <p>Ofertas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                
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
  </div>
</div>
 