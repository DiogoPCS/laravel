@extends('site.layouts.basico')
{{-- Por padrão extends aponta para a pasta View --}}

@section('titulo', $pagina . 'Contato')

@section('conteudo')

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-6">

                <div class="card shadow">
                    <div class="card-header">
                        Contato
                    </div>
                    <div class="card-body">
                        @component('site.layouts._components.form_contato', ['dark' => 'bg-light'])
                            <p>A nossa equipe analisará a sua mensagem e retornaremos o mais breve possível!</p>
                            <p>Nosso tempo médio de resposta é de 48 horas.</p>
                        @endcomponent
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection