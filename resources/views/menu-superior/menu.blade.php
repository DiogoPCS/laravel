<div class="container-fluid fixed-top bg-dark text-light" style="margin-top: 126px">
    <div class="row">

        {{-- 
          MUDANÇA 1: Ajustei o padding da coluna com 'py-1' (padding vertical)
          e adicionei 'align-items-center'
        --}}
        <div class="col-6 d-flex justify-content-start align-items-center py-1">
            
            {{-- 
              MUDANÇA 2: 
              - Mudei a largura do ícone de '55px' para '30px' (ou o tamanho que preferir).
              - Adicionei 'd-flex align-items-center' no botão para alinhar o ícone e o texto.
              - Adicionei 'me-2' (margem) para espaçar o ícone do texto.
            --}}
            <button class="btn text-light d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <img src="{{ asset ('images/menu.svg') }}" style="width: 30px;" class="me-2">
                Categorias
            </button>

        </div>
        <div class="col-6 d-flex align-items-center justify-content-end text-light py-1">
            {{-- MUDANÇA 3: Adicionei 'mb-0' para remover a margem de baixo do parágrafo --}}
            <p class="mb-0">Ofertas</p>
        </div>
    </div>
    
    {{-- MUDANÇA 4: Removi a <div class="row"> vazia que estava aqui --}}

</div>

{{-- O seu código do Offcanvas (menu lateral) continua igual abaixo --}}
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