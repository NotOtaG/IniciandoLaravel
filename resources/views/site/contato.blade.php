@extends('site.layouts.base')

@section('titulo', 'Principal')

@section('conteudo')

    <div>
        <h1>Entre em contato com a turma da etec</h1>
    </div>

    <div>
        @component('site.layouts.components.form_contato', ['classe' => 'borda-preta'])
        @endcomponent
    </div>

@endsection