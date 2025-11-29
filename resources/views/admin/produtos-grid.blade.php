<div class="row g-2 align-items-stretch">
    <div class="col-12 col-md-2 d-flex">
       <a href="{{ route('produtos.create') }}" class="text-decoration-none d-block w-100">
            <div class="bg-dark text-light rounded h-100 d-flex flex-column w-100" style="position: relative; min-height: 240px; border: 2px solid  rgba(255,255,255,0.15);">
                <div class="p-2 d-flex align-items-center justify-content-center overflow-hidden" style="height:140px;">
                    <img src="{{ asset('images/mais.svg') }}" class="opacity-50" alt="mais" style="width:64px; height:64px;">
                </div>

                <div class="text-center px-2 pt-2 flex-grow-1 d-flex flex-column">
                    <div>
                        <h6 class="mb-1 text-light opacity-75">Adicionar produto</h6>
                        <div class="mb-1 small text-muted text-truncate">&nbsp;</div>
                        <p class="mb-1 small text-truncate">&nbsp;</p>
                        <h6 class="mb-2">&nbsp;</h6>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @if(isset($produtos) && $produtos->count())
        @foreach($produtos as $produto)
            <div class="col-12 col-md-2 d-flex">
                @include('card-adimin.card-adimin', ['produto' => $produto])
            </div>
        @endforeach
    @else
        <div class="col-12">
            <div class="alert alert-info">Nenhum produto cadastrado.</div>
        </div>
    @endif
</div>
