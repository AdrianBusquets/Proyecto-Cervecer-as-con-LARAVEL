@extends('layouts.app')
@section('title', 'Portal de cervecerías')
@section('content')
            <h1 class="">¡Encuentra la cervecería que más te guste!</h1>
            @isset($joke)
                <h5 class="text-center text-warning bg-secondary rounded">{{ $joke }}</h5>
            @endisset

            <div class="row">
                <img src="{{ asset("img/copas_de_cerveza.jpg") }}" width="50%">
                @if (Auth::check())
                <h3>Hola {{ Auth::user()->name }}</h3>
                <h4>¿Qué estas buscando?</h4>
                @endif
            </div>
@endsection
