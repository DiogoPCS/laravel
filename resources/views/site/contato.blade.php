@extends('site.layouts.basico')

@section('titulo', 'Página de Clientes')

@section('conteudo')
    @include('site.layouts._partials.menu')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-6">
    
              @component('site.layouts._components.form_contato', ['dark' => 'bg-light'])
                <p>A nossa equipe analisará o caso e entraremos em contato!</p>
                <p>Tempo de resposta de 48 horas!</p>
              @endcomponent
    
            </div>
        </div>
    </div>
@endsection
