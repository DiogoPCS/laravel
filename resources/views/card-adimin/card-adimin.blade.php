

   
<div class="bg-dark text-light rounded h-100 d-flex flex-column w-100" 
     style="position: relative; min-height: 240px;">

    <a href="#" class="btn btn-sm text-light rounded-2 opacity-50" data-bs-toggle="modal" 
       data-bs-target="#modalEditarProduto-{{ $produto->id }}" 
       style="position: absolute; top: 8px; right: 8px; z-index: 10;">
        <img src="{{ asset('images/edit.svg') }}" alt="Editar" style="width:18px; height:18px;"> 
    </a>
    @include('editar.editar-produto')

    <div class="p-2 d-flex align-items-center justify-content-center overflow-hidden" style="height:140px;">
        <img src="{{ Storage::url($produto->foto_1) }}" class="rounded" 
             style="width:100%; height:100%; object-fit:cover; display:block;">
    </div>
    <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
        <div>
            
            <h6 class="mb-1">{{ $produto->nome }}</h6>
            
        
            <p class="mb-1 small text-truncate">Categoria: {{ $produto->categoria }}</p>
            
            
            <h6 class="mb-2">R$ {{ number_format($produto->preco, 2, ',', '.') }}</h6>
        </div>

      
      
        <div class="mt-auto pb-2 px-2 d-flex">
            
            <a href="#" class="btn btn-sm bg-danger text-light rounded-2 w-100" data-bs-toggle="modal" 
               data-bs-target="#modalExcluirProduto-{{ $produto->id }}" > 
               
               <img src="{{ asset('images/trash.svg') }}" alt="Excluir" style="width: 22px; height: 22px;" class="me-2">
               Excluir
            </a>
                  @include('excluir-produto.excluir-produto')

        </div>
       
    </div>
</div>