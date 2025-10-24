<div class="bg-dark text-light rounded w-100 h-100 d-flex flex-column" 
     style="max-width:260px; margin:0 5px 5px 0; position: relative;">

    <a href="#" class="btn btn-sm text-light rounded-2" data-bs-toggle="modal" 
       data-bs-target="#modalEditarProduto" 
       style="position: absolute; top: 10px; right: 10px; z-index: 10;">
        <img src="{{ asset('images/edit.svg') }}" alt="Editar" style="width: 22px; height: 22px;" class="opacity-50"> 
    </a>

    <div class="p-2">
        <img src="{{ asset('images/controle.svg') }}" class="w-100 rounded" style="height:130px; object-fit:cover;">
    </div>
    <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
        <div>
            <h6 class="mb-1">Nome do Produto</h6>
            <p class="mb-1 small text-truncate">Descrição do produto</p>
            <h6 class="mb-2">R$ 300</h6>
        </div>

      
      
        <div class="mt-auto pb-2 px-2 d-flex">
            
            <a href="#" class="btn btn-sm bg-danger text-light rounded-2 w-100" data-bs-toggle="modal" 
               data-bs-target="#modalExcluirProduto" >
               
               <img src="{{ asset('images/trash.svg') }}" alt="Excluir" style="width: 22px; height: 22px;" class="me-2">
               Excluir
            </a>
        </div>
      @include('excluir-produto.excluir-produto')
       
    </div>
</div>