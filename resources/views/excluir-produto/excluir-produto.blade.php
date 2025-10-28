{{-- ID do modal agora é dinâmico e bate com o ID do botão --}}
<div class="modal fade" id="modalExcluirProduto-{{ $produto->id }}" 
     tabindex="-1" aria-labelledby="modalExcluirLabel-{{ $produto->id }}" aria-hidden="true" 
     data-bs-backdrop="static">
     
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
            
            {{-- ID do label também é dinâmico --}}
            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title" id="modalExcluirLabel-{{ $produto->id }}">Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir o produto: <br><strong>{{ $produto->nome }}</strong>?</p>
                <p class="text-danger">Esta ação não pode ser desfeita.</p>
            </div>

            <div class="modal-footer border-top border-secondary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                
                {{-- Adiciona o formulário de exclusão --}}
                <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Sim, Excluir</button>
                </form>
            </div>
        </div>
    </div>
</div>