@extends('layouts.app')
@section('title', 'Portal de cervecerías')
@section('content')
            <h1 class="">¡Encuentra la cervecería que más te guste!</h1>
            @isset($joke)
                <h5 class="text-center text-warning bg-secondary rounded m-3">{{ $joke }}</h5>
            @endisset

            <div class="d-flex justify-content-around m-3">
                <img class="rounded" src="{{  asset('img/cenosilicafobia.png') }}" width="50%">
                @if (Auth::check())
                <div class="row">
                    <h3 class="mx-auto">Hola {{ Auth::user()->name }}<br>¿Qué estas buscando?</h3>
                </div>
                @endif
            </div>
@endsection
