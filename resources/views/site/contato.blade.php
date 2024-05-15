@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Contato')

@section('conteudo')

    <div class="container">
        <div class="row">
            <div class="col-6">

                @component('site.layouts._components.form_contato', ['dark' => 'bg-dark'])
                    <p>A nossa equipe analisará a sua mensagem e retornaremos o mais breve possível!</p>
                    <p>Nosso tempo médio de resposta é de 48 horas.</p>
                @endcomponent

            </div>
        </div>
    </div>

@endsection