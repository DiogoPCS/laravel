
<div class="modal fade" id="modalEditarProduto" tabindex="-1" aria-labelledby="modalEditarProdutoLabel" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarProdutoLabel">Editar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="formEditarProduto" action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="editId" name="id" value="">

                    <div class="mb-3">
                        <label for="editNome" class="form-label">Nome do produto</label>
                        <input id="editNome" name="nome" type="text" class="form-control" placeholder="Nome do produto">
                    </div>

                    <div class="mb-3">
                        <label for="editTipoproduto" class="form-label">Tipo de produto</label>
                        <select id="editTipoproduto" name="tipoproduto" class="form-select" required>
                            <option value="" disabled selected hidden>Selecione o tipo do produto</option>
                            <option value="1">Jogos</option>
                            <option value="2">Consoles</option>
                            <option value="3">Acessórios</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="editDescricao" class="form-label">Descrição</label>
                        <textarea id="editDescricao" name="descricao" class="form-control" rows="3" placeholder="Descreva o produto"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editPreco" class="form-label">Preço</label>
                        <input id="editPreco" name="preco" type="number" step="0.01" class="form-control" placeholder="R$ 0.00">
                    </div>

                    <div class="mb-3">
                        <label for="editImagem" class="form-label">Foto do produto</label>
                        <input id="editImagem" name="imagem" type="file" class="form-control">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formEditarProduto" class="btn btn-primary">Salvar alterações</button>
            </div>
        </div>
    </div>
</div>
