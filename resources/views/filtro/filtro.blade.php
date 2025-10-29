<div class="row my-3">
    
    <div class="col-12 d-flex justify-content-between align-items-center text-light" 
         style="background: black; border-top-right-radius: 8px; padding: 0.75rem 1rem;">
      
        <h2 class="mb-0 fs-4">Filtros</h2>

      
        <a role="button" 
           class="text-light collapsed" 
           style="text-decoration: none;"
           data-bs-toggle="collapse" 
           data-bs-target="#filtroCollapse" 
           aria-expanded="false"
           aria-controls="filtroCollapse">
            
           
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
            </svg>
        </a>
    </div>
    
   
    <div class="col-12 text-light bg-dark p-3 collapse" 
         style="border-bottom-right-radius: 8px;"
         id="filtroCollapse">
        
      
        <div class="d-grid mb-3">
            <a href="{{ route('produtos.search') }}" class="btn btn-light rounded-pill d-flex align-items-center justify-content-center py-2" 
               style="text-decoration: none;">
                <img src="{{ asset('images/filter.svg') }}" alt="Filtro" style="width: 20px; height: 20px;" class="me-2">
                <span class="fw-bold text-dark">Limpar filtros</span>
            </a>
        </div>

        <div class="mb-3">
            <div class="d-flex gap-2">
                @php
                    $base = route('produtos.search');
                    $current = request()->except(['page']);
                @endphp
                {{-- Sort buttons --}}
                <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_asc'])) }}" class="btn btn-sm btn-outline-light">Preço: do menor</a>
                <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_desc'])) }}" class="btn btn-sm btn-outline-light">Preço: do maior</a>
            </div>
        </div>

        <div class="filtro-lista">
            <h6 class="text-light">Categorias</h6>
            @php
                // get distinct categories from products
                $categorias = \App\Models\Produto::whereNotNull('categoria')
                    ->select('categoria')
                    ->distinct()
                    ->orderBy('categoria')
                    ->pluck('categoria');
            @endphp

            @forelse($categorias as $cat)
                @php
                    $params = array_merge($current, ['categoria' => $cat]);
                    $link = $base . '?' . http_build_query($params);
                @endphp
                <a href="{{ $link }}" class="d-block text-light text-decoration-none py-1">{{ $cat }}</a>
            @empty
                <div class="text-light small">Nenhuma categoria encontrada.</div>
            @endforelse
        </div>
    </div>
</div>