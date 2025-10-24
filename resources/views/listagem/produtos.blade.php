{{-- 
  Arquivo: resources/views/listagem/card-produto.blade.php
  (Um card simples para o público, baseado no seu design)
--}}
<div class="card h-100 shadow-sm border-0">
    <img src="{{ $imagem ?? asset('images/controle.svg') }}" class="card-img-top p-3" alt="Produto">
    <div class="card-body pt-0 d-flex flex-column">
        <p class="card-title small">{{ $nome ?? 'Nome do Produto' }}</p>
        <h5 class="card-text fw-bold mb-1">{{ $preco ?? 'R$256,00' }}</h5>
        <p class="card-text text-muted small mt-auto">{{ $estoque ?? 'Quantidade em estoque: 20 unidades' }}</p>
    </div>
</div>  