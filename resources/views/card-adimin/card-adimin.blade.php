{{-- 
  Este código MANTÉM seu layout original (bg-dark, text-light)
  mas substitui o conteúdo estático ("Nome do Produto", "R$ 300")
  pelas variáveis vindas do banco (ex: $produto->nome)
--}}
<div class="bg-dark text-light rounded w-100 h-100 d-flex flex-column" 
     style="max-width:260px; position: relative;">

    <a href="#" class="btn btn-sm text-light rounded-2" data-bs-toggle="modal" 
       data-bs-target="#modalEditarProduto-{{ $produto->id }}" {{-- <- MUDEI AQUI para ser único --}}
       style="position: absolute; top: 10px; right: 10px; z-index: 10;">
        <img src="{{ asset('images/edit.svg') }}" alt="Editar" style="width: 22px; height: 22px;" class="opacity-50"> 
    </a>
        @include('editar.editar-produto')


    {{-- 
  MUDANÇA: 
  1. O <div> agora tem a altura fixa (height: 130px) e usa flexbox (d-flex) para centralizar.
  2. A <img> usa max-height/max-width para caber no container.
  3. object-fit: contain garante que a imagem inteira apareça, sem cortes.
--}}
<div class="p-2 d-flex align-items-center justify-content-center" style="height: 130px;">
    <img src="{{ Storage::url($produto->foto_1) }}" class="rounded" 
         style="max-width: 100%; max-height: 100%; object-fit: contain;">
</div>
    <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
        <div>
            {{-- MUDEI AQUI: Usa o nome vindo do banco --}}
            <h6 class="mb-1">{{ $produto->nome }}</h6>
            
            {{-- MUDEI AQUI: Mostra a Categoria, já que 'descricao' não está no banco --}}
            <p class="mb-1 small text-truncate">Categoria: {{ $produto->categoria }}</p>
            
            {{-- MUDEI AQUI: Usa o preço vindo do banco, formatado --}}
            <h6 class="mb-2">R$ {{ number_format($produto->preco, 2, ',', '.') }}</h6>
        </div>

      
      
        <div class="mt-auto pb-2 px-2 d-flex">
            
            <a href="#" class="btn btn-sm bg-danger text-light rounded-2 w-100" data-bs-toggle="modal" 
               data-bs-target="#modalExcluirProduto-{{ $produto->id }}" > {{-- <- MUDEI AQUI para ser único --}}
               
               <img src="{{ asset('images/trash.svg') }}" alt="Excluir" style="width: 22px; height: 22px;" class="me-2">
               Excluir
            </a>
                  @include('excluir-produto.excluir-produto')

        </div>
      
      {{-- 
        Você também precisará ajustar seus modais de 'excluir' e 'editar' 
        para terem IDs únicos, assim como fiz nos botões.
        Ex: @include('excluir-produto.excluir-produto', ['produto' => $produto])
      --}}
       
    </div>
</div>