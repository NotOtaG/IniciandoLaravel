@extends('site.layouts.base')

@section('titulo', 'Principal')

@section('conteudo')

    @if(isset($message))
        <script>
            alert("{{ $message }}");
        </script>
    @endif

@endsection