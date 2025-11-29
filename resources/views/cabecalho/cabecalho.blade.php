<div class="container-fluid fixed-top bg-black text-light" style="height: 76px;">
    <div class="row h-100 align-items-center">
                <div class="col-6 d-flex align-items-center">
                    <a href="{{ url('/') }}" class="d-inline-block" aria-label="Ir para a página inicial">
                        <img src="{{ asset('images/logo.svg') }}" width="120" class="me-2" alt="logo">
                    </a>

            <a href="" class="d-flex text-decoration-none align-items-center text-light ms-2">
                <img src="{{ asset('images/shield.svg') }}" style="width:20px;" class="me-2" alt="assist">
                <span style="color: white; margin: 0; font-size:0.9rem;">Assistência</span>
            </a>
        </div>

       <div class="col-6 d-flex justify-content-end align-items-center">
            <form method="GET" action="{{ route('produtos.search') }}" class="d-flex position-relative w-100 justify-content-end">
                
                <div class="bg-light rounded-pill d-flex align-items-center position-relative" style="height:36px; padding-left:6px; padding-right:8px; z-index: 1060; width: 220px;">
                    <label for="search" class="me-2 mb-0"><img src="{{ asset('images/search.svg') }}" alt="search" style="height:24px;"></label>
                    
                    <input id="search" name="q" type="text" class="form-control bg-transparent border-0" placeholder="Pesquisar" style="box-shadow:none;" value="{{ request('q') }}" autocomplete="off">
                </div>

                <div id="search-suggestions" class="position-absolute bg-white shadow-sm" 
                     style="z-index:1050; display:none; top: 25px; right: 0; width: 220px; max-height:420px; overflow:auto; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding-top: 15px;">
                    
                    <div id="suggestions-list" class="list-group list-group-flush"></div>
                    <div id="suggestions-products" class="p-2 border-top small text-muted"></div>
                </div>
            </form>
        </div>

            <script>
            // Função Debounce mantida
            function debounce(fn, delay){
                let t;
                return function(...args){
                    clearTimeout(t);
                    t = setTimeout(()=> fn.apply(this,args), delay);
                }
            }

            (function(){
                const input = document.getElementById('search');
                const panel = document.getElementById('search-suggestions');
                const list = document.getElementById('suggestions-list');
                const products = document.getElementById('suggestions-products');

                // 4. REMOVIDA A FUNÇÃO positionPanel()
                // O CSS 'position-relative' no form e 'absolute' na div já garantem a fixação correta.

                if (!input || !panel) return;

                function render(items){
                    list.innerHTML = '';
                    products.innerHTML = '';

                    if (!items.length){
                        panel.style.display = 'none';
                        return;
                    }

                    // Sugestões
                    items.slice(0,6).forEach(it => {
                        const a = document.createElement('a');
                        a.href = it.url;
                        a.className = 'list-group-item list-group-item-action d-flex align-items-center border-0'; // border-0 para visual mais limpo
                        a.innerHTML = `<img src="${it.imagem}" style="width:38px;height:38px;object-fit:cover;margin-right:10px;border-radius:4px;">` +
                                      `<div><div class="fw-bold" style="font-size:0.9rem;">${it.nome}</div><div class="small text-success fw-bold">R$${(it.preco!==null? Number(it.preco).toFixed(2): '0.00')}</div></div>`;
                        list.appendChild(a);
                    });

                    // Produtos
                    const grid = document.createElement('div');
                    grid.className = 'd-flex flex-column gap-2 mt-2';
                    items.slice(0,8).forEach(it => {
                        const card = document.createElement('a');
                        card.href = it.url;
                        card.className = 'd-flex align-items-center text-decoration-none text-dark p-1 hover-bg-light';
                        card.innerHTML = `<img src="${it.imagem}" style="width:32px;height:32px;object-fit:cover;border-radius:6px;margin-right:8px;">` +
                                         `<div><div class="small fw-bold">${it.nome}</div><div class="small text-muted">R$${(it.preco!==null? Number(it.preco).toFixed(2): '0.00')}</div></div>`;
                        grid.appendChild(card);
                    });
                    products.appendChild(grid);

                    panel.style.display = 'block';
                }

                const fetchSuggestions = debounce(function(){
                    const q = input.value.trim();
                    if (!q){ render([]); return; }

                    const url = '{{ route('produtos.suggest') }}?q=' + encodeURIComponent(q);
                    fetch(url)
                        .then(r => r.json())
                        .then(data => {
                            render(data.items || []);
                        })
                        .catch(()=> render([]));
                }, 250);

                input.addEventListener('input', fetchSuggestions);

                // Ocultar ao clicar fora
                document.addEventListener('click', function(e){
                    if (!panel.contains(e.target) && e.target !== input) {
                        panel.style.display = 'none';
                    }
                });
                
                // Mostrar novamente ao focar se houver texto
                input.addEventListener('focus', function(){
                    if(input.value.trim().length > 0 && list.children.length > 0){
                        panel.style.display = 'block';
                    }
                });

            })();
            </script>
    </div>

    <div class="row bg-dark text-light" style="height:40px;">
        <div class="col-6 d-flex align-items-center">
            <button class="btn text-light d-flex align-items-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <img src="{{ asset('images/menu.svg') }}" style="width:22px;" class="me-2">
                <span style="font-size:0.95rem;">Categorias</span>
            </button>
        </div>
        <div class="col-6 d-flex align-items-center justify-content-end text-light">
            <p class="mb-0" style="font-size:0.95rem;">Ofertas</p>
        </div>
    </div>

</div>

<div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header bg-black d-flex justify-content-between">
    <h5 class="offcanvas-title text-light" id="offcanvasWithBothOptionsLabel">Categorias</h5>
    <button type="button" class=" bg-black text-reset border-0 " data-bs-dismiss="offcanvas" aria-label="Close"><img src="{{ asset('images/x.svg') }}" style="width: 8px; height: auto;"></button>
  </div>
  <div class="offcanvas-body">
     <div class="row">
        <div class="col-12">
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Jogos</p>
            </div>
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Consoles</p>
            </div>
            <div class="bg-black text-light rounded d-flex justify-content-center align-items-center w-100 m-2" style="height: 50px">
                <p class="m-0">Informática</p>
            </div>
        </div>
    </div>
    </div>
  </div>