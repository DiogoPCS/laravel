@include('head.head')

<body style="background-color: #f0f2f5;" >
    
    @include('cabecalho.cabecalho')
    @include('menu-superior.menu')

   
    <div class="container bg-white rounded shadow-sm p-4" style="margin-top: 198px; margin-bottom: 50px;">

        <p class="text-muted small mb-3">Produto</p>

        <div class="row">
            <div class="col-md-5">
                
                <div class="row g-2">
                    <div class="col-2 d-flex flex-column align-items-center">
                        {{-- Thumbnails: clicking or pressing Enter/Space will set the main image --}}
                        <img src="{{ asset('images/controle.svg') }}" data-src="{{ asset('images/controle.svg') }}" style="cursor:pointer;" class="img-fluid rounded border border-primary p-1 mb-2 thumb-select" role="button" tabindex="0" aria-pressed="true" alt="Miniatura 1">
                        <img src="{{ asset('images/controle2.svg') }}" data-src="{{ asset('images/controle2.svg') }}" style="cursor:pointer;" class="img-fluid rounded border p-1 mb-2 thumb-select" role="button" tabindex="0" aria-pressed="false" alt="Miniatura 2">
                        <img src="{{ asset('images/controle3.svg') }}" data-src="{{ asset('images/controle3.svg') }}" style="cursor:pointer;" class="img-fluid rounded border p-1 mb-2 thumb-select" role="button" tabindex="0" aria-pressed="false" alt="Miniatura 3">
                    </div>
                    <div class="col-10">
                        <img id="mainProductImage" src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border p-3 w-100" alt="Imagem do produto">
                    </div>
                </div>

                <div class="row g-3 mt-3 align-items-center justify-content-center">
                        <h6 class="small">Fotos da loja</h6>
                    <div class="col-6 ">

                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border">
                    </div>
                    <div class="col-12">
                        <h6 class="small">Tamanho do produto</h6>
                        <ul class="list-unstyled text-muted small">
                            <li>Tamanho da embalagem: 18 cm x 18 cm x 18 cm</li>
                            <li>Peso bruto: 0,345 Kg</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                
                <div class="row">
                    
                    <div class="col-md-8">
                        <span class="badge bg-warning text-dark mb-2">Novo</span>
                        <h1>Controle PS4 Sony Dualshock 4 Sem Fio Preto</h1>
                        <div class="mb-2">
                            <span class_ ="text-warning">★★★★☆</span>
                            <span class="text-muted small">(70)</span>
                        </div>
                        <h2 class="fw-bold my-3">R$200,00</h2>

                        <h6 class="small">Cor: <strong>Preto</strong></h6>
                        <img src="{{ asset('images/controle.svg') }}" class="border rounded p-1" style="width: 50px;">
                        
                        <div class="mt-3">
                            <label for="quantidade" class="form-label small">Quantidade:</label>
                            <input type="number" class="form-control" id="quantidade" value="1" style="width: 100px;">
                            <span class="text-muted small">30 unidades disponíveis</span>
                        </div>

                        <h5 class="mt-4">Especificações Técnicas</h5>
                        <ul class="list-unstyled small text-muted">
                            <li>- Unidades por kit: 1</li>
                            <li>- Possui Bluetooth.</li>
                            <li>- Com sensor de toque.</li>
                            <li>- Com vibração incorporada.</li>
                            <li>- ... e mais</li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <div class="border rounded p-3 bg-light h-100">
                            <form>
                                <div class="mb-3">
                                    <label for="comentario" class="form-label small text-muted">Deixe um comentário sobre o atendimento</label>
                                    <textarea class="form-control" id="comentario" rows="8"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm float-end">Comentar</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div> 
       
        <hr class="my-5">

        <div class="row">
            <div class="col-12">
                <h3 class="mb-4">Produtos Recomendados</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                @include('listagem.produtos')
            </div>
        </div>

    </div> 

    @include('footer.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function(){
            // Find elements
            const thumbs = document.querySelectorAll('.thumb-select');
            const main = document.getElementById('mainProductImage');

            if(!thumbs || !main) return;

            function setActive(thumb){
                thumbs.forEach(t => {
                    t.classList.remove('border-primary');
                    t.classList.add('border');
                    t.setAttribute('aria-pressed','false');
                });
                thumb.classList.remove('border');
                thumb.classList.add('border-primary');
                thumb.setAttribute('aria-pressed','true');
            }

            thumbs.forEach(thumb => {
                // click handler
                thumb.addEventListener('click', function(e){
                    const src = this.dataset.src || this.src;
                    if(src) main.src = src;
                    setActive(this);
                });

                // keyboard (Enter / Space)
                thumb.addEventListener('keydown', function(e){
                    if(e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            });
        })();
    </script>
</body>