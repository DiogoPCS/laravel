<div class="modal fade" id="modalEditarProduto-{{ $produto->id }}" 
     tabindex="-1" aria-labelledby="modalEditarProdutoLabel-{{ $produto->id }}" aria-hidden="true" 
     data-bs-backdrop="static">
     
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditarProdutoLabel-{{ $produto->id }}">Editar Produto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                
                <form id="formEditarProduto-{{ $produto->id }}" 
                      action="{{ route('produtos.update', $produto->id) }}" 
                      method="POST" 
                      enctype="multipart/form-data">
                    
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="editNome-{{ $produto->id }}" class="form-label">Nome do produto</label>
                        <input id="editNome-{{ $produto->id }}" name="nome" type="text" class="form-control" 
                               placeholder="Nome do produto" value="{{ $produto->nome }}" required>
                    </div>

                    {{-- ATUALIZAÇÃO DA LISTA DE CATEGORIAS --}}
                    <div class="mb-3">
    <label for="editCategoria-{{ $produto->id }}" class="form-label">Categoria</label>
    <select id="editCategoria-{{ $produto->id }}" name="categoria" class="form-select" required>
        <option value="" disabled>Selecione a categoria</option>
        
        @php
            $categorias = [
                'Action Figures', 
                'Perifericos', 
                'Jogos', 
                'Acessório', 
                'Console', 
                'Informática'
            ];
            sort($categorias);
        @endphp

        @foreach($categorias as $cat)
            <option value="{{ $cat }}" {{ $produto->categoria == $cat ? 'selected' : '' }}>
                {{ $cat }}
            </option>
        @endforeach

    </select>
</div>

                    <div class="mb-3">
                        <label for="editDescricao-{{ $produto->id }}" class="form-label">Descrição</label>
                        <textarea id="editDescricao-{{ $produto->id }}" name="descricao" class="form-control" rows="3">{{ $produto->descricao }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="editPreco-{{ $produto->id }}" class="form-label">Preço</label>
                        <input id="editPreco-{{ $produto->id }}" name="preco" type="number" step="0.01" 
                               class="form-control" placeholder="R$ 0.00" value="{{ $produto->preco }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="editEstoque-{{ $produto->id }}" class="form-label">Estoque</label>
                        <input id="editEstoque-{{ $produto->id }}" name="estoque" type="number" 
                               class="form-control" placeholder="0" value="{{ $produto->estoque }}" required>
                    </div>

                    <div class="mb-2">
                        <label class="form-label d-block">Imagens Atuais:</label>
                        @if($produto->foto_1) <img src="{{ Storage::url($produto->foto_1) }}" height="50" class="rounded me-2"> @endif
                        @if($produto->foto_2) <img src="{{ Storage::url($produto->foto_2) }}" height="50" class="rounded me-2"> @endif
                        @if($produto->foto_3) <img src="{{ Storage::url($produto->foto_3) }}" height="50" class="rounded"> @endif
                    </div>

                    <div class="mb-3">
                        <label for="editFoto1-{{ $produto->id }}" class="form-label">Foto 1 (Manterá a atual se não enviar nova)</label>
                        <input id="editFoto1-{{ $produto->id }}" name="foto_1" type="file" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editFoto2-{{ $produto->id }}" class="form-label">Foto 2</label>
                        <input id="editFoto2-{{ $produto->id }}" name="foto_2" type="file" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="editFoto3-{{ $produto->id }}" class="form-label">Foto 3</label>
                        <input id="editFoto3-{{ $produto->id }}" name="foto_3" type="file" class="form-control">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" form="formEditarProduto-{{ $produto->id }}" class="btn btn-primary">Salvar alterações</button>
            </div>
        </div>
    </div>
</div>