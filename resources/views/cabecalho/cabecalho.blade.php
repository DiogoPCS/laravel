<div class="container-fluid fixed-top bg-black text-light " >
    <div class="row">

        {{-- 
          MUDANÇA 1: 
          Troquei 'mt-3 mb-3' por 'my-2'.
          ('my-2' é 'margin-top: 0.5rem' e 'margin-bottom: 0.5rem', 
          exatamente a metade do 'my-3' que é 1rem)
        --}}
        <div class="col-6 d-flex justify-content-start align-items-center my-2">
            <img src="{{ asset('images/logo.svg') }}" width="200px" class="me-3">
            <a href="" class="d-flex text-decoration-none ml-2"><img src="{{ asset('images/shield.svg') }}" class="ml-2" style="width: 24;">
            <p style="color: white; margin: 0 ">Assistência</p></a>
        </div>


        
        {{-- MUDANÇA 2: Troquei 'mb-3 mt-3' por 'my-2' --}}
        <div class="col-6 d-flex justify-content-end align-items-center my-2">
            
            {{-- 
              MUDANÇA 3: 
              Diminuí a altura da barra de 50px para 40px
            --}}
            <div class="bg-light rounded-pill d-flex justify-content-center align-items-center m-2 " style="height: 40px">
                
                {{-- 
                  MUDANÇA 4: 
                  Diminuí o padding do ícone de 'p-3' para 'p-2'
                  para ele caber na nova altura.
                --}}
                <label for="search" class="mr-3"><img class="p-2" src="{{ asset(path: 'images/search.svg') }}" alt="search" style="height: 36px;"></label>
                <input type="text" 
                       class="form-control bg-transparent border-0" 
                       placeholder="pesquisar " 
                       style="box-shadow: none;">
                
            </div>
        
        </div>
    </div>
    <div class="row bg-dark text-light">

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
<div class="container-fluid fixed-top bg-dark text-light">
    
</div>