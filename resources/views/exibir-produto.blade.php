@include('head.head')

<body style="background-color: #121212; color: #f5f5f5;">
    
    @include('cabecalho.cabecalho')

    <div class="container" style="margin-top: 130px; margin-bottom: 50px;">

        <div class="mb-4">
            <a href="{{ url('/') }}" class="text-decoration-none text-white-50 hover-white small">
                <i class="bi bi-arrow-left"></i> Voltar para a loja
            </a>
        </div>

        <div class="row g-5">
            <div class="col-md-7 col-lg-8">
                
                <div class="row g-2">
                    <div class="col-2 d-flex flex-column gap-2" id="miniImg">
                        @php
                            $lateralImages = [];
                            if (!empty($produto->foto_1)) $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_1);
                            if (!empty($produto->foto_2)) $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_2);
                            if (!empty($produto->foto_3)) $lateralImages[] = \Illuminate\Support\Facades\Storage::url($produto->foto_3);
                            $mainImage = count($lateralImages) ? $lateralImages[0] : null;
                        @endphp

                        @if(count($lateralImages))
                            @foreach($lateralImages as $idx => $imgUrl)
                                <img src="{{ $imgUrl }}" 
                                     data-src="{{ $imgUrl }}" 
                                     style="cursor:pointer; object-fit: cover; height: 80px;" 
                                     class="img-fluid rounded border-0 thumb-select {{ $idx===0 ? 'opacity-100 ring-active' : 'opacity-50' }}" 
                                     role="button" 
                                     alt="Miniatura {{ $idx+1 }}">
                            @endforeach
                        @endif
                    </div>

                    <div class="col-10">
                        @if($mainImage)
                            <div class="rounded overflow-hidden bg-black d-flex align-items-center justify-content-center" style="min-height: 400px;">
                                <img id="mainProductImage" src="{{ $mainImage }}" class="img-fluid" style="max-height: 500px;" alt="Imagem do produto">
                            </div>
                        @endif
                    </div>
                </div>

                <div class="mt-5">
                    <h4 class="mb-3 fw-bold">Sobre o Jogo/Produto</h4>
                    <div class="text-white-50" style="line-height: 1.6;">
                        @if(!empty($produto->descricao))
                            {!! nl2br(e($produto->descricao)) !!}
                        @else
                            <p>Nenhuma descrição informada para este produto.</p>
                        @endif
                    </div>

                    <div class="row mt-4 g-3">
                        <div class="col-md-6">
                            <div class="p-3 rounded" style="background-color: #202020;">
                                <span class="text-white-50 small d-block mb-1">Categoria</span>
                                <span class="fw-bold">{{ $produto->categoria ?? 'Geral' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5 col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    
                   <div class="d-flex align-items-center mb-2 gap-2">
                        @if($produto->created_at >= now()->subDays(7))
                            <span class="badge bg-warning text-dark small px-2 py-1 fw-bold text-uppercase shadow-sm">
                                NOVO
                            </span>
                        @endif
                        </div>

                    <h2 class="fw-bold mb-3">{{ $produto->nome ?? 'Produto sem nome' }}</h2>
                    
                    <div class="mb-4">
                        <h3 class="fw-bold mb-0">{{ isset($produto->preco) ? 'R$'.number_format($produto->preco,2,',','.') : 'R$0,00' }}</h3>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg py-3 fw-bold text-uppercase">
                            Comprar Agora
                        </button>
                    </div>

                    <div class="mt-4 pt-4 border-top border-secondary border-opacity-25">
                        <div class="d-flex justify-content-between text-white-50 small">
                            <span>Estoque</span>
                            <span class="{{ ($produto->estoque ?? 0) > 0 ? 'text-success' : 'text-danger' }}">
                                {{ $produto->estoque ?? 0 }} unidades
                            </span>
                        </div>
                    </div>

                    <div class="mt-4 p-3 rounded" style="background-color: #202020;">
                        <h6 class="small text-white-50 mb-2">Fale Conosco</h6>
                        <form>
                            <div class="mb-2">
                                <textarea class="form-control bg-dark text-light border-secondary placeholder-gray" 
                                          id="comentario" 
                                          rows="3" 
                                          placeholder="Dúvidas sobre o produto?"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-light">Enviar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div> 
       
        <hr class="my-5 border-secondary border-opacity-25">

        <div class="row">
            <div class="col-12">
                <h4 class="mb-4 fw-bold">Você também pode gostar</h4>
            </div>
            <div class="col-12">
                @include('listagem.produtos', ['produtos' => $recommended ?? collect()])
            </div>
        </div>

    </div> 

    @include('footer.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function(){
            const thumbs = document.querySelectorAll('.thumb-select');
            const main = document.getElementById('mainProductImage');

            if(!thumbs || !main) return;

            function setActive(thumb){
                thumbs.forEach(t => {
                    t.classList.remove('opacity-100', 'ring-active');
                    t.classList.add('opacity-50');
                });
                thumb.classList.remove('opacity-50');
                thumb.classList.add('opacity-100', 'ring-active');
            }

            thumbs.forEach(thumb => {
                thumb.addEventListener('click', function(e){
                    const src = this.dataset.src || this.src;
                    if(src) main.src = src;
                    setActive(this);
                });
            });
        })();
    </script>

    <style>
        .form-control:focus {
            background-color: #2a2a2a;
            color: #fff;
            border-color: #555;
            box-shadow: none;
        }
        
        .placeholder-gray::placeholder {
            color: