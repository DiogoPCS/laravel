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
                
                {{-- MUDANÇA 1: Background #2a2a2a (Cinza escuro) --}}
                <div class="rounded-pill d-flex align-items-center position-relative transition-search" 
                     style="height:40px; padding-left:12px; padding-right:12px; z-index: 1060; width: 260px; background-color: #2a2a2a;">
                    
                    {{-- MUDANÇA 2: Inverter a cor do ícone para branco usando filter --}}
                    <label for="search" class="me-2 mb-0" style="cursor: pointer;">
                        <img src="{{ asset('images/search.svg') }}" alt="search" style="height:20px; filter: invert(1);">
                    </label>
                    
                    {{-- MUDANÇA 3: Texto branco no input e placeholder ajustado via CSS --}}
                    <input id="search" name="q" type="text" 
                           class="form-control bg-transparent border-0 text-white placeholder-gray" 
                           placeholder="Pesquisar loja" 
                           style="box-shadow:none; font-size: 0.9rem;" 
                           value="{{ request('q') }}" autocomplete="off">
                </div>

                {{-- MUDANÇA 4: Painel de sugestões escuro (bg-dark text-light) --}}
                <div id="search-suggestions" class="position-absolute bg-dark text-light shadow-lg" 
                     style="z-index:1050; display:none; top: 35px; right: 0; width: 260px; max-height:420px; overflow:auto; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; padding-top: 20px; border: 1px solid #444;">
                    
                    <div id="suggestions-list" class="list-group list-group-flush bg-dark"></div>
                    <div id="suggestions-products" class="p-2 border-top border-secondary small text-muted"></div>
                </div>
            </form>
        </div>

        <script>
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
                        // MUDANÇA 5: Estilo escuro para os itens da lista
                        a.className = 'list-group-item list-group-item-action d-flex align-items-center border-0 bg-dark text-light hover-dark-item';
                        a.innerHTML = `<img src="${it.imagem}" style="width:38px;height:38px;object-fit:cover;margin-right:10px;border-radius:4px;">` +
                                      `<div><div class="fw-bold" style="font-size:0.9rem;">${it.nome}</div><div class="small text-warning fw-bold">R$${(it.preco!==null? Number(it.preco).toFixed(2): '0.00')}</div></div>`;
                        list.appendChild(a);
                    });

                    // Produtos
                    const grid = document.createElement('div');
                    grid.className = 'd-flex flex-column gap-2 mt-2';
                    items.slice(0,8).forEach(it => {
                        const card = document.createElement('a');
                        card.href = it.url;
                        // MUDANÇA 6: Estilo escuro para os cards pequenos
                        card.className = 'd-flex align-items-center text-decoration-none text-light p-2 rounded hover-bg-secondary';
                        card.innerHTML = `<img src="${it.imagem}" style="width:32px;height:32px;object-fit:cover;border-radius:6px;margin-right:8px;">` +
                                         `<div><div class="small fw-bold">${it.nome}</div><div class="small text-white-50">R$${(it.preco!==null? Number(it.preco).toFixed(2): '0.00')}</div></div>`;
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

                document.addEventListener('click', function(e){
                    if (!panel.contains(e.target) && e.target !== input) {
                        panel.style.display = 'none';
                    }
                });
                
                input.addEventListener('focus', function(){
                    if(input.value.trim().length > 0 && list.children.length > 0){
                        panel.style.display = 'block';
                    }
                });

            })();
        </script>

        <style>

            /* --- Customização da Scrollbar (Barra de Rolagem) --- */

/* Firefox */
#search-suggestions {
    scrollbar-width: thin; /* Deixa a barra mais fina */
    scrollbar-color: #555 #2a2a2a; /* Cor do "dedo" e Cor do fundo */
}

/* Chrome, Edge, Safari */
#search-suggestions::-webkit-scrollbar {
    width: 8px; /* Largura da barra */
}

#search-suggestions::-webkit-scrollbar-track {
    background: #2a2a2a; /* Cor do fundo da calha (mesma do menu) */
    border-radius: 0 15px 15px 0; /* Arredonda o canto inferior direito */
}

#search-suggestions::-webkit-scrollbar-thumb {
    background-color: #555; /* Cor da barra em si (cinza médio) */
    border-radius: 20px; /* Deixa a barra redondinha */
    border: 2px solid #2a2a2a; /* Cria uma margem visual para a barra "flutuar" */
}

#search-suggestions::-webkit-scrollbar-thumb:hover {
    background-color: #777; /* Fica mais clara quando passa o mouse */
}
            /* Cor do placeholder (texto de ajuda) para cinza claro */
            .placeholder-gray::placeholder {
                color: #bbb !important;
                opacity: 1;
            }
            
            /* Efeito ao focar na barra de pesquisa (fica um pouco mais clara) */
            .transition-search {
                transition: background-color 0.3s;
            }
            .transition-search:focus-within {
                background-color: #333 !important;
            }

            /* Efeito Hover nos itens da lista de sugestão */
            .hover-dark-item:hover {
                background-color: #333 !important;
                color: white !important;
            }
            .hover-bg-secondary:hover {
                background-color: #333 !important;
            }
            <style>
    /* Cor do placeholder... */
    .placeholder-gray::placeholder {
        color: #bbb !important;
        opacity: 1;
    }
    
    /* ... seus outros estilos ... */

    .hover-bg-secondary:hover {
        background-color: #333 !important;
    }

    /* === COLE O CÓDIGO DA SCROLLBAR AQUI === */
    #search-suggestions {
        scrollbar-width: thin;
        scrollbar-color: #555 #2a2a2a;
    }

    #search-suggestions::-webkit-scrollbar {
        width: 8px;
    }

    #search-suggestions::-webkit-scrollbar-track {
        background: #2a2a2a; 
        border-bottom-right-radius: 15px; 
    }

    #search-suggestions::-webkit-scrollbar-thumb {
        background-color: #555; 
        border-radius: 20px; 
        border: 2px solid #2a2a2a; 
    }

    #search-suggestions::-webkit-scrollbar-thumb:hover {
        background-color: #777; 
    }
</style>
        </style>
    </div>
</div>

{{-- Offcanvas mantido igual --}}
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

