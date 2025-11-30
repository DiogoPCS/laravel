@include('head.head')

<body class="bg-login">
    
    @include('cabecalho.cabecalho')
    
    <div class="position-absolute top-0 end-0 p-3" style="z-index: 1000; margin-top: 100px;">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm">Sair</button>
        </form>
    </div>

    <div class="container" style="margin-top: 152px;">
        <div id="admin-products-list">
            @include('admin.produtos-grid', ['produtos' => $produtos ?? collect()])
        </div>
    </div> 

    <div class="modal fade" id="modalEditarCarrossel" tabindex="-1" aria-labelledby="modalCarrosselLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-dark text-light border border-secondary">
                <div class="modal-header border-bottom border-secondary">
                    <h5 class="modal-title" id="modalCarrosselLabel">Editar Imagens da Home</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ url('/admin/carousel/update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="alert alert-warning small py-2">
                            <i class="bi bi-info-circle"></i> Recomendado: Imagens 1920x600px (Formato JPG ou PNG).
                        </div>

                        <div class="mb-3">
                            <label for="banner1" class="form-label">Banner 1 (Principal)</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner1" name="banner1">
                        </div>

                        <div class="mb-3">
                            <label for="banner2" class="form-label">Banner 2</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner2" name="banner2">
                        </div>

                        <div class="mb-3">
                            <label for="banner3" class="form-label">Banner 3</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner3" name="banner3">
                        </div>
                    </div>
                    <div class="modal-footer border-top border-secondary">
                        <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function(){
            // ... (Mantenha seu script JS existente aqui) ...
        })();
    </script>
</body> 