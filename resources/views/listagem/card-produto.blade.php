
@php
    // If a Produto model is passed, prefer its values
    $cardImage = $imagem ?? ($produto->foto_1 ?? null);
    if ($cardImage) {
        // If the stored path looks like 'public/...' convert to storage URL, otherwise keep asset
        $cardImage = \Illuminate\Support\Str::startsWith($cardImage, 'public/') ? \Illuminate\Support\Facades\Storage::url($cardImage) : (filter_var($cardImage, FILTER_VALIDATE_URL) ? $cardImage : asset($cardImage));
    } else {
        // No image: leave null so view can omit the <img>
        $cardImage = null;
    }

    $cardName = $nome ?? ($produto->nome ?? 'Nome do Produto');
    $cardPrice = $preco ?? (isset($produto->preco) ? 'R$'.number_format($produto->preco, 2, ',', '.') : 'R$0,00');
    $cardStock = $estoque ?? (isset($produto->estoque) ? 'Quantidade em estoque: '.$produto->estoque.' unidades' : 'Sem estoque');
    $cardDesc = $descricao ?? ($produto->descricao ?? null);
    $cardLink = isset($produto) ? route('produto.show', $produto->id) : null;
@endphp

<a href="{{ $cardLink ?? '#' }}" class="text-decoration-none text-reset">
    <div class="card h-100 shadow-sm border-0">
        @if($cardImage)
            <div style="padding:12px;">
                <img src="{{ $cardImage }}" class="w-100 rounded" alt="Produto" style="height:140px; object-fit:cover;">
            </div>
        @endif
        <div class="card-body pt-0 d-flex flex-column" style="padding-top:6px; padding-bottom:12px;">
            <p class="card-title mb-1" style="font-size:0.95rem; font-weight:600;">{{ $cardName }}</p>
            <h5 class="card-text fw-bold mb-1" style="font-size:1.05rem;">{{ $cardPrice }}</h5>
            @if($cardDesc)
                <div class="card-text text-muted small mb-2" style="font-size:0.85rem;">{!! $cardDesc !!}</div>
            @endif
            <p class="card-text text-muted small mt-auto" style="font-size:0.85rem;">{{ $cardStock }}</p>
        </div>
    </div>
</a>