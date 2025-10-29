@include('head.head')

<body>
    @include('cabecalho.cabecalho')

    <div class="container" style="margin-top:120px;">
        <h1>Editar Produto</h1>

        <form method="POST" action="{{ route('produtos.update', $produto->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="{{ old('nome', $produto->nome) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control" value="{{ old('preco', $produto->preco) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" name="categoria" class="form-control" value="{{ old('categoria', $produto->categoria) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Descrição</label>
                <textarea name="descricao" class="form-control">{{ old('descricao', $produto->descricao) }}</textarea>
            </div>

            <button class="btn btn-primary">Salvar</button>
        </form>

        <a href="{{ url('/produtos-cadastrados') }}" class="btn btn-link mt-3">Cancelar</a>
    </div>

    @include('footer.footer')
</body>
