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
            <div class="row d-flex justify-content-between">
                
                @foreach ($breweries as $brewery)
                <x-card 
                        {{-- classCard="col-lg-4 col-md-6" --}}
                        name="{!! $brewery['nombre'] !!}"
                        place="{!! $brewery['poblacion'] !!}"
                        {{-- description="{!! $brewery['descripcion'] !!}" --}}
                        urlImg="{{ $brewery['imagen'] }}"
                        {{-- urlBack="{{ route('breweries') }}" --}}
                        urlView="{{ route('brewery', $brewery['id']) }}">
                </x-card>
                {{-- <div class= "col-lg-4 col-md-6">
                    <div class="listas card mb-4 text-center w-100 text-white" style="width: 18rem;">
                        <img src="{{ asset($brewery['imagen']) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{!! $brewery["nombre"] !!}</h5>
                            <p class="card-text">{!! $brewery["poblacion"] !!}</p>
                            <a href="{{ route('brewery', $brewery['id']) }}" class="btn btn-dark">Descubrela</a>
                        </div>
                    </div>
                </div> --}}
                <script>
                    L.marker([{{ $brewery['latitud'] }}, {{ $brewery['longitud'] }}]).addTo(map);
                </script>
                @endforeach
            </div>

@endsection