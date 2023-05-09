@extends('layouts.app')
@section('title', 'Cervecería '. $brewery["nombre"])
@section('content')
            <h1 class="">Descubre la cervecería</h1>
            
            <div class="row d-flex justify-content-center">
                <x-card name="{!! $brewery['nombre'] !!}"
                        place="{!! $brewery['poblacion'] !!}"
                        urlImg="{{ asset($brewery['imagen']) }}"
                        {{-- urlView="{{ route('brewery', $brewery['id']) }}" --}}
                        urlBack="{{ route('breweries') }}"
                        map="S"
                        lat="{{ $brewery['latitud'] }}"
                        long="{{ $brewery['longitud'] }}">
                
                <x-slot:place>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Carta de cervezas</a>
                    <a href="#" class="card-link">Como llegar</a>
                </div>
                </x-slot:place>
                <a urlBack="{{ route('breweries') }}"></a>
                </x-card>
            </div>
@endsection