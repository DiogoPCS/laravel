
<div class="row g-3">
    {{-- Loop pelos produtos fornecidos pela view (passados pelo controller/route) --}}
    @forelse($produtos ?? [] as $produto)
        <div class="col-6 col-sm-4 col-md-3 col-lg-3">
            @include('listagem.card-produto', [
                'produto' => $produto,
                'imagem' => $produto->foto_1 ? \Illuminate\Support\Facades\Storage::url($produto->foto_1) : asset('images/controle.svg'),
                'nome' => $produto->nome ?? 'Produto sem nome',
                'preco' => isset($produto->preco) ? 'R$'.number_format($produto->preco, 2, ',', '.') : 'R$0,00',
                'estoque' => isset($produto->estoque) ? 'Quantidade em estoque: '.$produto->estoque.' unidades' : 'Sem estoque'
            ])
        </div>
    @empty
        <div class="col-12">
            <div class="alert alert-info">Nenhum produto encontrado.</div>
        </div>
    @endforelse

</div>