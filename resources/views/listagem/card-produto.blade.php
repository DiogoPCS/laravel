@php
    $cardImage = $imagem ?? ($produto->foto_1 ?? null);
    if ($cardImage) {
        $cardImage = \Illuminate\Support\Str::startsWith($cardImage, 'public/') ? \Illuminate\Support\Facades\Storage::url($cardImage) : (filter_var($cardImage, FILTER_VALIDATE_URL) ? $cardImage : asset($cardImage));
    } else {
        $cardImage = null;
    }

    $cardName = $nome ?? ($produto->nome ?? 'Nome do Produto');
    $cardPrice = $preco ?? (isset($produto->preco) ? 'R$'.number_format($produto->preco, 2, ',', '.') : 'R$0,00');
    $cardStock = $estoque ?? (isset($produto->estoque) ? 'Quantidade em estoque: '.$produto->estoque.' unidades' : 'Sem estoque');
    $cardDesc = $descricao ?? ($produto->descricao ?? null);
    $cardLink = isset($produto) ? route('produto.show', $produto->id) : null;
@endphp

<a href="{{ $cardLink ?? '#' }}" class="text-decoration-none product-card-link">
    <div class="card h-100 border-0 mt-3 product-card position-relative" style="background-color: #202020; color: #f5f5f5;">
        
        <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 shadow-sm" 
              style="z-index: 10; font-size: 0.75rem; font-weight: bold;">
            Novo
        </span>
        @if($cardImage)
            <div style="padding:0;">
                <img src="{{ $cardImage }}" class="w-100 rounded-top" alt="Produto" style="height:160px; object-fit:cover;">
            </div>
        @endif
        <div class="card-body d-flex flex-column p-3">
            <p class="card-title mb-1 text-truncate" style="font-size:0.95rem; font-weight:600;">{{ $cardName }}</p>
            
            @if($cardDesc)
                <div class="card-text text-white-50 small mb-2 text-truncate" style="font-size:0.85rem; max-height: 20px;">{!! strip_tags($cardDesc) !!}</div>
            @endif

            <div class="mt-auto pt-2">
                <h5 class="card-text fw-bold mb-1" style="font-size:1.05rem;">{{ $cardPrice }}</h5>
                <span class="badge bg-dark border border-secondary text-white-50 small" style="font-weight: normal; font-size: 0.75rem;">
                    {{ isset($produto->estoque) && $produto->estoque > 0 ? 'Disponível' : 'Indisponível' }}
                </span>
            </div>
        </div>
    </div>
</a>

<style>
    .product-card {
        transition: transform 0.2s, background-color 0.2s;
    }
    
    .product-card-link:hover .product-card {
        transform: translateY(-5px);
        background-color: #2a2a2a !important;
        box-shadow: 0 10px 20px rgba(0,0,0,0.5);
    }
</style>