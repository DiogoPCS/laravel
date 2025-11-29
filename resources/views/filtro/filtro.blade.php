
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="row my-3">
    <div class="col-12 d-flex justify-content-between align-items-center" 
         style="background: black; border-top-right-radius: 8px; padding: 1rem;">
        
        <h5 class="mb-0 fw-bold text-white">Filtros</h5>

        <a role="button" 
           class="text-light text-decoration-none" 
           data-bs-toggle="collapse" 
           data-bs-target="#filtroCollapse" 
           aria-expanded="true" 
           aria-controls="filtroCollapse">
            <i class="bi bi-chevron-down transition-icon"></i>
        </a>
    </div>
    
    <div class="col-12 bg-dark p-3 collapse show" 
         style="border-bottom-right-radius: 8px;"
         id="filtroCollapse">
        
        @php
            $base = route('produtos.search');
            $current = request()->except(['page']);
        @endphp

        <div class="mb-4">
            <a href="{{ route('produtos.search') }}" 
               class="btn btn-light rounded-pill w-100 fw-bold d-flex align-items-center justify-content-center py-2 ajax-filter"
               style="box-shadow: 0 2px 4px rgba(0,0,0,0.2);">
               <i class="bi bi-funnel-fill me-2"></i> 
               Limpar filtros
            </a>
        </div>

        <div class="d-flex gap-2 mb-4">
            <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_asc'])) }}" 
               class="btn btn-outline-light flex-fill text-center py-2 ajax-filter {{ request('sort') == 'price_asc' ? 'active' : '' }}"
               style="font-size: 0.9rem; border-radius: 4px;">
               Preço: do<br>menor
            </a>
            
            <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_desc'])) }}" 
               class="btn btn-outline-light flex-fill text-center py-2 ajax-filter {{ request('sort') == 'price_desc' ? 'active' : '' }}"
               style="font-size: 0.9rem; border-radius: 4px;">
               Preço: do<br>maior
            </a>
        </div>

        <div class="filtro-lista">
            <h6 class="text-white fw-bold mb-3">Categorias</h6>
            
            @php
                $categorias = \App\Models\Produto::whereNotNull('categoria')
                    ->distinct()->orderBy('categoria')->pluck('categoria');
                $catAtual = request('categoria');
            @endphp

            <div class="d-flex flex-column gap-2">
                @forelse($categorias as $cat)
                    @php
                        $params = array_merge($current, ['categoria' => $cat]);
                        $link = $base . '?' . http_build_query($params);
                        $active = $catAtual == $cat;
                    @endphp
                    <a href="{{ $link }}" 
                       class="text-decoration-none ajax-filter category-item {{ $active ? 'text-light fw-bold' : 'text-light' }}"
                       style="transition: all 0.2s;">
                        {{ $cat }}
                    </a>
                @empty
                    <div class="text-white-50 small">Nenhuma categoria.</div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<style>
    /* Faz a seta girar quando abre/fecha */
    .transition-icon {
        transition: transform 0.3s ease;
    }
    a[aria-expanded="true"] .transition-icon {
        transform: rotate(180deg);
    }

    /* Efeito de hover nas categorias */
    .category-item:hover {
        padding-left: 5px;
        color: #fff !important;
    }

    /* Ajuste para o botão ativo ficar preenchido */
    .btn-outline-light.active {
        background-color: white;
        color: black;
    }
</style>