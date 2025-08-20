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
                        <form action={{ route('app.fornecedor.adicionar') }} method="POST">
                            <input type="hidden" name="id" value="{{ $fornecedor->id ?? ''}}">
                            @csrf
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome do Fornecedor" class="form-control" value={{ $fornecedor->nome ?? old('nome') }}>
                            <h5>{{ $errors->has('nome') ? $errors->first('nome') : '' }}</h5>
                    
                            <label for="site">Site</label>
                            <input type="text" name="site" id="site" placeholder="E-mail" class="form-control" value={{ $fornecedor->site ?? old('site') }}>
                            <h5>{{ $errors->has('site') ? $errors->first('site') : '' }}</h5>

                            <label for="uf">UF</label>
                            <input type="text" name="uf" id="uf" placeholder="Estado" class="form-control" value={{ $fornecedor->uf ?? old('uf') }}>
                            <h5>{{ $errors->has('uf') ? $errors->first('uf') : '' }}</h5>

                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control" value={{ $fornecedor->email ?? old('email') }}>
                            <h5>{{ $errors->has('email') ? $errors->first('email') : '' }}</h5>
                    
                    
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
        
                            <h5>
                                {{ $msg ?? '' }}
                                {{ isset($erro) && $erro != '' ? $erro : '' }}
                            </h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection