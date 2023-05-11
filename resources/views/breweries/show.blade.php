@extends('layouts.app')
@section('title', 'Cervecería '. $brewery->name)
@section('content')
            <h1 class="">Descubre la cervecería</h1>
            
            <div class="row d-flex justify-content-center">
                <x-card name="{!! $brewery->name !!}"
                        place="{!! $brewery->place !!}"
                        description="{!! $brewery->description !!}"
                        {{-- urlView="{{ route('brewery', $brewery['id']) }}" --}}
                        urlBack="{{ route('breweries') }}"
                        map="S"
                        lat="{{ $brewery->latitude }}"
                        long="{{ $brewery->longitude }}">
                        @isset($brewery->imagen)
                        <x-slot:urlImg>{{ $brewery->imagen }}</x-slot:urlImg>
                        @endisset
                <x-slot:place>
                    <ul class="card-body">
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