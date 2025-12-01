@include('head.head')

<body class="bg-login">
    
    <div class="container" style="margin-top: 152px;">
        <div id="admin-products-list">
            @include('admin.produtos-grid', ['produtos' => $produtos ?? collect()])
        </div>
    </div> 

    <div class="d-flex justify-content-center my-5 pb-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger px-5 py-2 rounded-pill fw-bold shadow-sm">
                Sair do Sistema
            </button>
        </form>
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="alert alert-warning small py-2">
                            <i class="bi bi-info-circle"></i> Recomendado: Imagens 1400x600px (Formato JPG ou PNG).
                        </div>

                        <div class="mb-3">
                            <label for="banner1" class="form-label">Banner 1 (Principal)</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner1" name="banner1" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="banner2" class="form-label">Banner 2</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner2" name="banner2" accept="image/*">
                        </div>

                        <div class="mb-3">
                            <label for="banner3" class="form-label">Banner 3</label>
                            <input class="form-control bg-secondary text-light border-0" type="file" id="banner3" name="banner3" accept="image/*">
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
