<div class="row g-2 align-items-stretch">
    
    <div class="col-12 col-md-2 d-flex">
       <a href="{{ route('produtos.create') }}" class="text-decoration-none d-block w-100">
            <div class="bg-dark text-light rounded h-100 d-flex flex-column w-100 hover-card" style="position: relative; min-height: 240px; border: 2px solid rgba(255,255,255,0.15);">
                <div class="p-2 d-flex align-items-center justify-content-center overflow-hidden" style="height:140px;">
                    <img src="{{ asset('images/mais.svg') }}" class="opacity-50" alt="mais" style="width:64px; height:64px;">
                </div>
                <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
                    <h6 class="mb-1 text-light opacity-75">Adicionar produto</h6>
                </div>
            </div>
        </a>
    </div>

    <div class="col-12 col-md-2 d-flex">
        <div role="button" data-bs-toggle="modal" data-bs-target="#modalEditarCarrossel" class="d-block w-100 text-decoration-none">
             <div class="bg-dark text-light rounded h-100 d-flex flex-column w-100 hover-card" style="position: relative; min-height: 240px; border: 2px solid rgba(255,255,255,0.15);">
                 <div class="p-2 d-flex align-items-center justify-content-center overflow-hidden" style="height:140px;">
                     <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-images opacity-50" viewBox="0 0 16 16">
                        <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                        <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2M14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1M2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10"/>
                      </svg>
                 </div>
 
                 <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
                     <div>
                         <h6 class="mb-1 text-light opacity-75">Editar Carrossel</h6>
                         <div class="mb-1 small text-muted">Alterar banners da Home</div>
                     </div>
                 </div>
             </div>
        </div>
     </div>

    @if(isset($produtos) && $produtos->count())
        @foreach($produtos as $produto)
            <div class="col-12 col-md-2 d-flex">
                @include('card-adimin.card-adimin', ['produto' => $produto])
            </div>
        @endforeach
    @else
        <div class="col-12 mt-3">
            <div class="alert alert-info bg-dark text-light border-secondary">Nenhum produto cadastrado.</div>
        </div>
    @endif
</div>

<style>
    /* Pequeno efeito visual ao passar o mouse */
    .hover-card:hover {
        background-color: #343a40 !important; /* lighten bg */
        border-color: #ffc107 !important; /* warning color border */
        transition: all 0.3s ease;
    }
</style>