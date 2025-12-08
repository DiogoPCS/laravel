<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<div class="d-flex flex-column h-100">
    
    <div class="d-flex justify-content-between align-items-center mb-3 pt-1">
        <span class="text-white-50 small text-uppercase fw-bold">Filtros</span>
        
        <a role="button" 
           class="text-light text-decoration-none d-lg-none" 
           data-bs-toggle="collapse" 
           data-bs-target="#filtroCollapse" 
           aria-expanded="true" 
           aria-controls="filtroCollapse">
            <i class="bi bi-chevron-down transition-icon"></i>
        </a>
    </div>
    
    <div class="collapse show d-lg-block" id="filtroCollapse">
        
        @php
            $base = route('produtos.search');
            $current = request()->except(['page']);
        @endphp

        <div class="mb-4">
            <a href="{{ route('produtos.search') }}" 
               class="btn btn-outline-light btn-sm w-100 rounded-pill d-flex align-items-center justify-content-center gap-2 ajax-filter"
               style="border-color: #333; background-color: #202020;">
               <i class="bi bi-x-lg" style="font-size: 0.8rem;"></i> 
               <span style="font-size: 0.85rem;">Limpar</span>
            </a>
        </div>

        <hr class="border-secondary opacity-25 my-4">

        <div class="mb-4">
            <label class="text-white fw-bold mb-2" style="font-size: 0.9rem;">Preço</label>
            <div class="d-flex gap-2">
                <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_asc'])) }}" 
                   class="btn flex-fill text-center py-2 ajax-filter price-btn {{ request('sort') == 'price_asc' ? 'active' : '' }}">
                   Menor
                </a>
                
                <a href="{{ $base.'?'.http_build_query(array_merge($current, ['sort' => 'price_desc'])) }}" 
                   class="btn flex-fill text-center py-2 ajax-filter price-btn {{ request('sort') == 'price_desc' ? 'active' : '' }}">
                   Maior
                </a>
            </div>
        </div>

        <hr class="border-secondary opacity-25 my-4">

        <div class="filtro-lista">
            <h6 class="text-white fw-bold mb-3" style="font-size: 0.9rem;">Categorias</h6>
            
            @php
                $dbCats = \App\Models\Produto::whereNotNull('categoria')
                    ->where('categoria', '<>', '')
                    ->select('categoria', \Illuminate\Support\Facades\DB::raw('count(*) as total'))
                    ->groupBy('categoria')
                    ->get()
                    ->keyBy('categoria');

                $static = ['Action Figures', 'Perifericos', 'Jogos', 'Acessório', 'Console', 'Informática'];
                $merged = collect(array_merge($dbCats->keys()->toArray(), $static))->unique()->sort()->values();
                $totalProducts = \App\Models\Produto::count();
                $allNames = collect(['Todos'])->merge($merged->filter(function($n){ return $n !== 'Todos'; }))->values();
                $catAtual = request('categoria');
            @endphp

            <div class="d-flex flex-column gap-1">
                @foreach($allNames as $catName)
                    @php
                        if ($catName === 'Todos') {
                            $link = $base; 
                            $active = empty($catAtual);
                            $count = $totalProducts;
                        } else {
                            $params = array_merge($current, ['categoria' => $catName]);
                            $link = $base . '?' . http_build_query($params);
                            $active = ($catAtual == $catName);
                            $count = isset($dbCats[$catName]) ? $dbCats[$catName]->total : 0;
                        }
                    @endphp
                    
                    <a href="{{ $link }}" 
                       class="text-decoration-none ajax-filter category-item d-flex justify-content-between align-items-center py-2 px-2 rounded {{ $active ? 'active' : '' }}">
                        <span>{{ $catName }}</span>
                        <span class="small count-badge ms-2" style="font-size: 0.75rem;">({{ $count }})</span>
                        <i class="bi bi-check2 check-icon {{ $active ? 'd-block' : 'd-none' }}"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    
    .transition-icon { transition: transform 0.3s ease; }
    a[aria-expanded="true"] .transition-icon { transform: rotate(180deg); }
    
   
    .category-item {
        color: rgba(255, 255, 255, 0.5);
        transition: all 0.2s ease-in-out;
        border-left: 3px solid transparent;
    }
    .category-item:hover {
        background-color: #2a2a2a;
        color: #fff;
        padding-left: 12px !important;
    }
    .category-item.active {
        background-color: #333;
        color: #fff;
        font-weight: 600;
        padding-left: 12px !important;
        border-left: 3px solid #fff;
    }
    .category-item .count-badge { transition: color 0.2s; }
    .category-item.active .count-badge { color: #fff !important; }

   
    .price-btn {
        background-color: #2a2a2a;
        color: #aaa;
        border: 1px solid transparent;
        font-size: 0.8rem;
        transition: all 0.2s ease; 
    }
    

    .price-btn:hover {
        background-color: #333;
        color: #fff;
        transform: translateY(-2px); 
    }

    .price-btn.active {
        background-color: #404040;
        color: #fff;
        font-weight: bold;
        border: 1px solid #fff; 
        box-shadow: 0 0 10px rgba(255,255,255,0.1);
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    
    const categoryLinks = document.querySelectorAll('.category-item');
    categoryLinks.forEach(link => {
        link.addEventListener('click', function() {
            categoryLinks.forEach(el => {
                el.classList.remove('active');
                const check = el.querySelector('.check-icon');
                if(check) { check.classList.remove('d-block'); check.classList.add('d-none'); }
            });
            this.classList.add('active');
            const activeCheck = this.querySelector('.check-icon');
            if(activeCheck) { activeCheck.classList.remove('d-none'); activeCheck.classList.add('d-block'); }
        });
    });

    const priceBtns = document.querySelectorAll('.price-btn');
    priceBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            priceBtns.forEach(el => el.classList.remove('active'));
            
            this.classList.add('active');
        });
    });

});
</script>