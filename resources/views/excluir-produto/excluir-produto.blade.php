

<div class="modal fade" id="modalExcluirProduto" 
     tabindex="-1" aria-labelledby="modalExcluirLabel" aria-hidden="true" 
     data-bs-backdrop="static">
     
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
            
            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title" id="modalExcluirLabel">Confirmar Exclusão</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <p>Você tem certeza que deseja excluir este produto?</p>
                <p class="text-danger">Esta ação não pode ser desfeita.</p>
            </div>

            <div class="modal-footer border-top border-secondary">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Sim, Excluir</button> {{-- Este botão fará a ação real --}}
            </div>
        </div>
    </div>
</div>