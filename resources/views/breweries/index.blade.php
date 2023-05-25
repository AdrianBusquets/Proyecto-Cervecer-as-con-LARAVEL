@extends('layouts.app')
@section('title', 'Listado de cervecerías')
@section('content')
            <h1 class="">Listado de cervecerías</h1>
            <div id="map" class="mapalist mb-4" style="height: 250px; width:100%; border-radius:10px"></div>
            <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
                integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
                crossorigin=""></script>
            <script>
                var map = L.map('map').setView([40.409461, -3.611824], 5);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                
            </script>
            <x-msgflash />
        <div class="d-flex justify-content-around my-4">
            @auth
            <a href="{{ route('breweries.create') }}" class="btn btn-secondary mb-4" style="width: 35%">Agrega una cervecería</a>
            <a href="{{ route('breweries.proposals') }}" class="btn btn-light mb-4" style="width: 35%">Tus propuestas</a>
            @endauth
            @guest
                <h4>Registrate para agregar una cervecería</h4>
            @endguest
        </div class="col-lg-4 col-md-6 col-sm-12">
            <div class="row d-flex justify-content-between">
                
                @foreach ($breweries as $brewery)
                <x-card
                        
                        name="{!! $brewery->name !!}"
                        {{-- classCard= "{{ $classCard }}" --}}
                        place="{!! $brewery->place !!}"
                        urlView="{{ route('breweries.show', $brewery->id) }}">
                        <x-slot:urlImg>
                            @if(isset($brewery->img) && ($brewery->img != ''))
                            {{ $brewery->img }}
                            @else
                            {{ asset('../img/default.jpg') }}
                            @endisset
                        </x-slot:urlImg>
                </x-card>
                <script>
                    L.marker([{{ $brewery->latitude }}, {{ $brewery->longitude }}]).addTo(map);
                </script>
                @endforeach
            </div>

@endsection