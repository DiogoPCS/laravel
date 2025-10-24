
<div class="row g-3">
    {{-- Exemplo: renderiza 4 produtos. Substitua pelo loop real: @foreach($produtos as $produto) --}}
    @for($i = 0; $i < 4; $i++)
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            @include('listagem.card-produto', [
                'imagem' => asset('images/controle.svg'),
                'nome' => 'Nome do Produto',
                'preco' => 'R$256,00',
                'estoque' => 'Quantidade em estoque: 20 unidades'
            ])
        </div>
    @endfor

</div>