@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Contato')

@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-6">

                @component('site.layouts._components.form_contato')
                @endcomponent

            </div>
        </div>
    </div>

@endsection