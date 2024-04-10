<h1>Fornecedores</h1>

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10) 
    <h3>Há alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Há muitos fornecedores cadastrados</h3>
@else
    <h3>Não há fornecedores cadastrados</h3>
@endif
