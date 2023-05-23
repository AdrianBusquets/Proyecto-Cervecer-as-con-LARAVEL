@extends('layouts.app')
@section('title', 'Listado de cervezas')
@section('content')
<h1 class="">Listado de cervezas</h1>

<x-msgflash />
<div class="d-flex justify-content-center my-4">
    @auth
    <a href="{{ route('beers.create') }}" class="btn btn-secondary mb-4" style="width: 35%">Agrega una cerveza</a>
    @endauth
    @guest
        <h4>Registrate para agregar una cerveza</h4>
    @endguest
</div class="col-lg-4 col-md-6 col-sm-12">
    <div class="row d-flex justify-content-between">
        
        @foreach ($beers as $beer)
        <x-card
                
                name="{!! $beer->brand !!}"
                {{-- classCard= "{{ $classCard }}" --}}
                description="{!! $beer->description !!}"
                urlView="{{ route('beers.show', $beer) }}">
                <x-slot:place>
                    <x-stars value="{{ $beer->vol }}" step="1" />
                </x-slot:place>
                
                <x-slot:urlImg>
                    @if(isset($beer->img) && ($beer->img != ''))
                    {{ $beer->img }}
                    @else
                    {{ asset('../img/default.jpg') }}
                    @endisset
                </x-slot:urlImg>
        </x-card>
        @endforeach
    </div>
@endsection