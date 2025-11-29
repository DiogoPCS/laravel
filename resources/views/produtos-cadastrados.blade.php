@include('head.head')

<body class="bg-login">
    
    @include('cabecalho.cabecalho')
    <form method="POST" action="{{ route('logout') }}" class="d-inline">
    @csrf

    <a href="{{ route('logout') }}" 
       onclick="event.preventDefault(); this.closest('form').submit();"
       class="text-decoration-none text-light">
        Sair
    </a>
</form>
    <div class="container" style="margin-top: 152px;">
        <div id="admin-products-list">
            @include('admin.produtos-grid', ['produtos' => $produtos ?? collect()])
        </div>

        {{-- AJAX handlers for edit/delete forms inside the admin grid --}}
        <script>
            (function(){
                const containerId = 'admin-products-list';
                const container = document.getElementById(containerId);
                if (!container) return;

                const tokenMeta = document.querySelector('meta[name="csrf-token"]');
                const csrf = tokenMeta ? tokenMeta.getAttribute('content') : '';

                document.addEventListener('submit', function(e){
                    const form = e.target;
                    if (!form) return;

                    const isEdit = form.id && form.id.startsWith('formEditarProduto-');
                    const isDelete = form.classList && form.classList.contains('ajax-delete');
                    if (!isEdit && !isDelete) return;

                    e.preventDefault();
                    const url = form.getAttribute('action');
                    const formData = new FormData(form);

                    // send AJAX request
                    fetch(url, {
                        method: 'POST',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrf
                        },
                        body: formData
                    })
                    .then(resp => {
                        if (!resp.ok) throw new Error('Network response was not ok');
                        return resp.text();
                    })
                    .then(html => {
                        // replace admin grid
                        container.innerHTML = html;

                        // hide modal if form was in one
                        const modalEl = form.closest('.modal');
                        if (modalEl && window.bootstrap) {
                            try {
                                const inst = window.bootstrap.Modal.getInstance(modalEl) || new window.bootstrap.Modal(modalEl);
                                inst.hide();
                            } catch (err) { /* ignore */ }
                        }
                    })
                    .catch(err => {
                        console.error('AJAX form error', err);
                        alert('Erro ao processar a operação. Veja o console para detalhes.');
                    });
                });
            })();
        </script>

        <div class="row justify-content-center my-4 "> 
            <div class="col-auto ">
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        Sair
                    </button>
                </form>
            </div>
        </div>
        

    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>