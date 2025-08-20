{{-- Por padrão extends aponta para a pasta View --}}
@extends('site.layouts.basico')

{{-- Definição de um parãmetro --}}
@section('titulo', $pagina . 'Principal')

{{-- Definição de um bloco de HTML --}}
@section('conteudo')
    {{-- <ul>
        <li>
            <a href="{{ route('site.principal') }}">Principal</a>
        </li>
        <li>
            <a href="{{ route('site.sobrenos') }}">Sobre Nós</a>
        </li>
        <li>
            <a href="{{ route('site.contato') }}">Contato</a>
        </li>
        <li>
            <a href="{{ route('app.clientes') }}">Clientes</a>
        </li>
        <li>
            <a href="{{ route('app.produtos') }}">Produtos</a>
        </li>
        <li>
            <a href="{{ route('app.fornecedores') }}">fornecedores</a>
        </li>
        <li>
            <a href="{{ route('site.login') }}">Login</a>
        </li>
    </ul> --}}
    <h1>Página Principal </h1>
@endsection