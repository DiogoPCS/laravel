
<div class="card h-100 shadow-sm border-0">
    <div style="padding:12px;">
        <img src="{{ $imagem ?? asset('images/controle.svg') }}" class="w-100 rounded" alt="Produto" style="height:140px; object-fit:cover;">
    </div>
    <div class="card-body pt-0 d-flex flex-column" style="padding-top:6px; padding-bottom:12px;">
        <p class="card-title mb-1" style="font-size:0.95rem; font-weight:600;">{{ $nome ?? 'Nome do Produto' }}</p>
        <h5 class="card-text fw-bold mb-1" style="font-size:1.05rem;">{{ $preco ?? 'R$256,00' }}</h5>
        <p class="card-text text-muted small mt-auto" style="font-size:0.85rem;">{{ $estoque ?? 'Quantidade em estoque: 20 unidades' }}</p>
    </div>
</div>