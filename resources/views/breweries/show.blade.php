@extends('layouts.app')
@section('title', 'Cervecería '. $brewery->name)
@section('content')
            <h1 class="">Descubre la cervecería</h1>
            
            <div class="row d-flex justify-content-center">
                <x-card name="{!! $brewery->name !!}"
                        place="{!! $brewery->place !!}"
                        description="{!! $brewery->description !!}"
                        urlEdit="{{ route('breweries.edit', $brewery->id) }}"
                        urlDelete="{{ route('breweries.delete', $brewery->id) }}"
                        urlBack="{{ route('breweries') }}"
                        classCard="col-sm-6 col-md-6 col-lg-6"
                        map="S"
                        lat="{{ $brewery->latitude }}"
                        long="{{ $brewery->longitude }}">

                        <x-slot:urlImg>
                            @if(isset($brewery->img) && ($brewery->img != ''))
                        {{ $brewery->img }}
                        @else
                        {{ asset('../img/default.jpg') }}
                        @endisset
                        </x-slot:urlImg>
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