@include('head.head')

<body style="background-color: #f0f2f5;" >
    
    @include('cabecalho.cabecalho')

   
    <div class="container bg-white rounded shadow-sm p-4" style="margin-top: 198px; margin-bottom: 50px;">

        <p class="text-muted small mb-3">Produto</p>

        <div class="row">
            <div class="col-md-5">
                
                <div class="row g-2">
                    <div class="col-2 d-flex flex-column align-items-center" id="miniImg">
                        @php
                            // Build an array of lateral image URLs from the produto model if present.
                            $lateralImages = [];
                            if (!empty($produto->foto_1)) {
                                $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_1);
                            }
                            if (!empty($produto->foto_2)) {
                                $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_2);
                            }
                            if (!empty($produto->foto_3)) {
                                $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_3);
                            }

                            // main image is the first available lateral image (or null)
                            $mainImage = count($lateralImages) ? $lateralImages[0] : null;
                        @endphp

                        @if(count($lateralImages))
                            @foreach($lateralImages as $idx => $imgUrl)
                                <img src="{{ $imgUrl }}" data-src="{{ $imgUrl }}" style="cursor:pointer;" class="img-fluid rounded border {{ $idx===0 ? 'border-primary' : '' }} p-1 mb-2 thumb-select" role="button" tabindex="0" aria-pressed="{{ $idx===0 ? 'true' : 'false' }}" alt="Miniatura {{ $idx+1 }}">
                            @endforeach
                        @endif
                    </div>
                    <div class="col-10">
                        @if($mainImage)
                            <img id="mainProductImage" src="{{ $mainImage }}" class="img-fluid rounded border p-3 w-100" alt="Imagem do produto">
                        @endif
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
                        <h1>{{ $produto->nome ?? 'Produto sem nome' }}</h1>
                        
                        <h2 class="fw-bold my-3">{{ isset($produto->preco) ? 'R$'.number_format($produto->preco,2,',','.') : 'R$0,00' }}</h2>

                        <h6 class="small">Tipo: <strong>{{ $produto->categoria ?? '—' }}</strong></h6>
                        @if(!empty($mainImage))
                            <img src="{{ $mainImage }}" class="border rounded p-1" style="width: 50px;">
                        @endif
                        
                        <div class="mt-3">
                            <label for="quantidade" class="form-label small">Quantidade:</label>
                            <input type="number" class="form-control" id="quantidade" value="1" style="width: 100px;">
                            <span class="text-muted small">{{ $produto->estoque ?? 0 }} unidades disponíveis</span>
                        </div>

                        <h5 class="mt-4">Descrição</h5>
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
                {{-- Passa os produtos recomendados para o partial de listagem --}}
                @include('listagem.produtos', ['produtos' => $recommended ?? collect()])
            </div>
        </div>

    </div> 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function(){
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
                thumb.addEventListener('click', function(e){
                    const src = this.dataset.src || this.src;
                    if(src) main.src = src;
                    setActive(this);
                });

                thumb.addEventListener('keydown', function(e){
                    if(e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        this.click();
                    }
                });
            });
        })();
    </script>
        @include('footer.footer')

</body>