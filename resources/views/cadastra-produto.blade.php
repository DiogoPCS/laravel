@include('head.head')


<body class="bg-login d-flex flex-column min-vh-100">
    @include('cabecalho.cabecalho')

    @include('menu-superior.menu')

    <main class="flex-grow-1 d-flex justify-content-center align-items-center" style="padding-top:160px;">
        <div class="container">
            <div class="row w-100 justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 mb-3">
                    <div class="bg-light rounded-2 p-4 form-card">
                        <h4 class="mb-3 text-center">Cadastrar Produto</h4>
                        <form action="/cadastrar-produto" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome do produto</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Nome do produto">
                            </div>
                            <div class="mb-3">
                                <label for="tipoproduto">Tipo de produto</label>
                                <select id="tipoproduto" name="tipoproduto" class="form-select" required>
                                    <option value="" disabled selected hidden>Selecione o tipo do produto</option>
                                
                                        <option value="1">Jogos</option>
                                        <option value="2">Consoles</option>
                                        <option value="3">Acessórios</option>
                            
                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea id="descricao" name="descricao" class="form-control" rows="3" placeholder="Descreva o produto"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="preco" class="form-label">Preço</label>
                                <input id="preco" name="preco" type="number" step="0.01" class="form-control" placeholder="R$ 0.00">
                            </div>

                            <div class="mb-3">
                                <label for="imagem" class="form-label">Foto do produto</label>
                                <input id="imagem" name="imagem" type="file" class="form-control">
                            </div>

                            <div class="d-grid">
                                <a href="#" class=" btn btn-primary text-decoration-none"><h2 class="text-black opacity-50">Salvar produto</h2></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

