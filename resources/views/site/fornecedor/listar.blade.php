@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Fornecedores')

@section('conteudo')

    <div class="container-fluid">
        
        {{-- MENU --}}
        <div class="row d-flex justify-content-center mb-3">
            <div class="col-12 col-lg-6">
                <a type="submit" class="btn btn-primary" href={{ route('app.fornecedor.adicionar') }}>Cadastrar</a>
                <a type="submit" class="btn btn-primary" href={{ route('app.fornecedor.listar') }}>Pesquisar</a>
            </div>
        </div>

        {{-- FORMULÁRIO --}}
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card shadow">
                    <div class="card-header">
                        Fornecedor
                    </div>
                    <div class="card-body">
                        Lista de Fornecedores aqui ....
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection