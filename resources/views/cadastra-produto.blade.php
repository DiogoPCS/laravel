@include('head.head')

<body class="bg-login d-flex flex-column min-vh-100">
   

    <main class="flex-grow-1 d-flex justify-content-center align-items-center" style="padding-top:160px;">
        <div class="container">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 mb-3">
                    <div class="bg-light rounded-2 p-4 form-card">
                        
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="mb-0">Cadastrar Produto</h4>
                            <a href="{{ url('/produtos-cadastrados') }}" class="btn btn-outline-secondary btn-sm">Voltar</a>
                        </div>

                        <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do produto</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome do produto" required>
                            </div>
                            
                           <div class="mb-3">
    <label for="categoria" class="form-label">Categoria</label>
    <select id="categoria" name="categoria" class="form-select" required>
        <option value="" disabled selected hidden>Selecione a categoria</option>
        
        @php
            // Lista Fixa e Já Ordenada (Removemos o sort() para evitar trocas acidentais)
            $categorias = [
                'Acessório',
                'Action Figures', 
                'Console', 
                'Informática',
                'Jogos', 
                'Perifericos'
            ];
        @endphp

        @foreach($categorias as $cat)
            {{-- O old() garante que se a validação falhar, a categoria volta selecionada --}}
            <option value="{{ $cat }}" {{ old('categoria') == $cat ? 'selected' : '' }}>
                {{ $cat }}
            </option>
        @endforeach
    </select>
</div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea id="descricao" name="descricao" class="form-control" rows="3" placeholder="Descreva o produto"></textarea>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="preco" class="form-label">Preço</label>
                                    <input id="preco" name="preco" type="number" step="0.01" class="form-control" placeholder="R$ 0.00" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="estoque" class="form-label">Estoque</label>
                                    <input id="estoque" name="estoque" type="number" class="form-control" placeholder="0" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="foto_1" class="form-label">Foto 1 (Obrigatória)</label>
                                <input id="foto_1" name="foto_1" type="file" class="form-control" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="foto_2" class="form-label">Foto 2 (Opcional)</label>
                                    <input id="foto_2" name="foto_2" type="file" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="foto_3" class="form-label">Foto 3 (Opcional)</label>
                                    <input id="foto_3" name="foto_3" type="file" class="form-control">
                                </div>
                            </div>
                             
                            <div class="d-grid mt-2">
                                <button type="submit" class="btn btn-primary text-decoration-none">
                                    <h2 class="text-black opacity-50 m-0">Salvar produto</h2>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>