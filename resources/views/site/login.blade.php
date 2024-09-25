@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Login')

@section('conteudo')
    {{-- <h1>Login</h1> --}}


    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-3">
                <div class="card shadow">
                    <div class="card-header">
                        Acesso
                    </div>
                    <div class="card-body">
                        <form action={{ route('site.login') }} method="POST">
                            @csrf
                            <label for="email">E-mail</label>
                            <input type="text" name="email" id="email" placeholder="E-mail" class="form-control" value={{ old('email') }}>
                            <h5>
                                {{ $errors->has('email') ? $errors->first('email') : '' }}
                            </h5>
                    
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" placeholder="Senha" class="form-control" value={{ old('password') }}>
                            <h5>
                                {{ $errors->has('password') ? $errors->first('password') : '' }}
                            </h5>
                    
                            <button type="submit" class="btn btn-primary">Acessar</button>
        
                            <h5>
                                {{ isset($erro) && $erro != '' ? $erro : '' }}
                            </h5>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection