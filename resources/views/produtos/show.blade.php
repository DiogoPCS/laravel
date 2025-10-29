@include('head.head')

<body>
    @include('cabecalho.cabecalho')

    <div class="container" style="margin-top:120px;">
        <h1>{{ $produto->nome ?? 'Produto' }}</h1>

        <div class="row">
            <div class="col-md-4">
                @if(!empty($produto->foto_1))
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($produto->foto_1) }}" class="img-fluid" alt="">
                @endif
            </div>
            <div class="col-md-8">
                <p><strong>Preço:</strong> {{ isset($produto->preco) ? 'R$'.number_format($produto->preco,2,',','.') : 'R$0,00' }}</p>
                <p><strong>Categoria:</strong> {{ $produto->categoria ?? '—' }}</p>
                <p>{!! $produto->descricao ?? '' !!}</p>
            </div>
        </div>

        <a href="{{ url('/produtos-cadastrados') }}" class="btn btn-secondary mt-3">Voltar</a>
    </div>

    @include('footer.footer')
</body>
