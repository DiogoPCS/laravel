@include('head.head')

{{-- Adicionamos um fundo cinza-claro para o body, como no seu design --}}
<body style="background-color: #f0f2f5;">
    
    @include('cabecalho.cabecalho')
    @include('menu-superior.menu')

    {{-- 
      Container principal.
      - 'bg-white' para o miolo branco.
      - 'rounded' e 'shadow-sm' para o efeito de card.
      - 'p-4' para o espaçamento interno.
      - 'margin-top' para não ficar atrás dos menus 'fixed-top'.
    --}}
    <div class="container bg-white rounded shadow-sm p-4" style="margin-top: 150px; margin-bottom: 50px;">

        {{-- Breadcrumb "Produto" --}}
        <p class="text-muted small mb-3">Produto</p>

        {{-- ============================================== --}}
        {{-- ROW PRINCIPAL (Imagens + Infos) --}}
        {{-- ============================================== --}}
        <div class="row">

            {{-- COLUNA DA ESQUERDA (GALERIA) --}}
            <div class="col-md-5">
                
                {{-- Row aninhada para a galeria principal --}}
                <div class="row g-2">
                    {{-- Miniaturas Verticais --}}
                    <div class="col-2">
                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border border-primary p-1 mb-2">
                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border p-1 mb-2">
                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border p-1 mb-2">
                    </div>
                    {{-- Imagem Principal --}}
                    <div class="col-10">
                        <img src="{{ asset('images/controle.svg') }}" class="img-fluid rounded border p-3 w-100">
                    </div>
                </div>

                {{-- Row aninhada para as fotos da loja e specs de tamanho --}}
                <div class="row g-3 mt-3">
                    <div class="col-6">
                        <h6 class="small">Fotos da loja</h6>
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

            {{-- COLUNA DA DIREITA (INFORMAÇÕES E COMENTÁRIOS) --}}
            <div class="col-md-7">
                
                {{-- Row aninhada para Infos e Comentários --}}
                <div class="row">
                    
                    {{-- Infos do Produto --}}
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

                    {{-- Caixa de Comentários --}}
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
        {{-- Fim da Row Principal --}}


        {{-- ============================================== --}}
        {{-- ROW DE PRODUTOS RECOMENDADOS --}}
        {{-- ============================================== --}}
        <hr class="my-5">

        <div class="row">
            <div class="col-12">
                <h3 class="mb-4">Produtos Recomendados</h3>
            </div>
            
            {{-- Aqui usamos o novo componente que criamos --}}
            <div class="col-md-3">
                @include('listagem.produtos')
            </div>
          
        </div>

    </div> 
    {{-- Fim do Container --}}


    @include('footer.footer')
    
    {{-- Importante: Adicionar o JS do Bootstrap no final --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>