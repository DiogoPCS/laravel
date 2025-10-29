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

        <div class="row g-2 align-items-stretch">
            <div class="col-12 col-md-2 d-flex">
               <a href="{{ route('produtos.create') }}" class="text-decoration-none d-block">
                    <div class="bg-dark rounded-2 border text-center border-2 border-white border-opacity-25 d-flex flex-column justify-content-center align-items-center p-3 h-100 w-100">
                        <img src="{{ asset('images/mais.svg') }}" class="opacity-50 mb-2" alt="mais">
                        <h6 class="text-light opacity-50 mb-0">Adicionar produto</h6>
                    </div>
                </a>
            </div>

            @if(isset($produtos) && $produtos->count())
                @foreach($produtos as $produto)
                    <div class="col-12 col-md-2  d-flex" >
                        @include('card-adimin.card-adimin', ['produto' => $produto])
                    </div>
                @endforeach
            @else
            @endif
        </div> 

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