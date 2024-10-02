@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Fornecedores')

@section('conteudo')

    <div class="container-fluid">
        
        {{-- MENU --}}
        <div class="row d-flex justify-content-center mb-3">
            <div class="col-12 col-lg-6">
                <a type="submit" class="btn btn-primary" href={{ route('app.fornecedor.adicionar') }}>Cadastrar</a>
                <a type="submit" class="btn btn-primary" href={{ route('app.fornecedor') }}>Pesquisar</a>
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
                        {{-- Lista de Fornecedores aqui .... --}}
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Site</th>
                                    <th>UF</th>
                                    <th>E-mail</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fornecedores as $fornecedor)
                                    <tr>
                                        <td>{{ $fornecedor->nome }}</td>
                                        <td>{{ $fornecedor->site }}</td>
                                        <td>{{ $fornecedor->uf }}</td>
                                        <td>{{ $fornecedor->email }}</td>
                                        <td>
                                            <a href="{{ route('app.fornecedor.editar', $fornecedor->id) }}">Editar</a>
                                            {{-- <a href="{{ route('app.fornecedor.excluir', $fornecedor->id) }}">Excluir</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                                    <tr>
                                        <td colspan="5">
                                            {{ $fornecedores->links() }}
                                        </td>
                                    </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection