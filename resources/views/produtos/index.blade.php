@include('head.head')

<body>
    @include('cabecalho.cabecalho')

    <div class="container" style="margin-top:120px;">
        <h1 class="mb-4">Produtos (Admin)</h1>

        @includeIf('listagem.produtos', ['produtos' => $produtos ?? collect()])

        @if(method_exists($produtos, 'links'))
            <div class="mt-4">{{ $produtos->links() }}</div>
        @endif
    </div>

    @include('footer.footer')
</body>
