@extends('layouts.app')
@section('title', 'Quienes somos')

@section('content')

<h1>Descubre quienes somos</h1>

<div class="d-flex justify-content-center">
    
    <x-card name="Cervezamantes"
            {{-- place="{!! $brewery['poblacion'] !!}" --}}
            urlImg="{{ asset('img/cenosilicafobia.png')  }}"
            {{-- urlView="{{ route('brewery', $brewery['id']) }}" --}}
            {{-- urlBack="{{ route('breweries') }}" --}}
            classCard="col-sm-6 text-center">

            <x-slot:place>
                Somos el portal de cervecerías que te guiara en tus rutas cerveceras
                <ul >
                    <li class="list-group-item p-2"><a href="tel:34666222321" target="_system" class="bi bi-telephone-forward-fill text-decoration-none"> Teléfono</a></li>
                    <li class="list-group-item p-2"><a href="mailto:cervezamantes@hotmail.com" target="_system" class="bi bi-envelope-at-fill text-decoration-none"> Email</a></li>
                    <li class="list-group-item p-2"><a href="https://wa.mi?34666222321" target="_system" class="bi bi-whatsapp text-decoration-none"i> Whatsapp</a></li>
                    <li class="list-group-item p-2"><a href="" target="_system" class="bi bi-facebook text-decoration-none"> Facebook</a></li>
                    <li class="list-group-item p-2"><a href="" target="_system" class="bi bi-instagram text-decoration-none"> Instagram</a></li>
                </ul>
                <div id="map" aria-describedby="tooltip" style="width: 100%;"></div>
                <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
                integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
                crossorigin=""></script>
            <script>
                var map = L.map('map').setView([40.409461, -3.611824], 19);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                var marker = L.marker([40.409461, -3.611824]).addTo(map);
            </script>
            </x-slot:place>
            
    </x-card>
    
    <div id="tooltip" role="tooltip">
        My tooltip
        <div id="arrow" data-popper-arrow></div>
    </div>
{{-- <div class="cardabout card text-center" style="width: 36rem;">
    {{-- <img src="{{ asset('img/cenosilicafobia.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Cervezamantes</h5>
        <p class="card-text">Somos el portal de cervecerías que te guiara en tus rutas cerveceras</p>
    
    <ul >
        <li class="list-group-item p-2"><a href="tel:34666222321" target="_system" class="bi bi-telephone-forward-fill text-decoration-none"> Teléfono</a></li>
        <li class="list-group-item p-2"><a href="mailto:cervezamantes@hotmail.com" target="_system" class="bi bi-envelope-at-fill text-decoration-none"> Email</a></li>
        <li class="list-group-item p-2"><a href="https://wa.mi?34666222321" target="_system" class="bi bi-whatsapp text-decoration-none"i> Whatsapp</a></li>
        <li class="list-group-item p-2"><a href="" target="_system" class="bi bi-facebook text-decoration-none"> Facebook</a></li>
        <li class="list-group-item p-2"><a href="" target="_system" class="bi bi-instagram text-decoration-none"> Instagram</a></li>
    </ul>
    </div> --}}
{{-- 
    <div class="cardabout card text-center" style="width: 36rem;">
        <div id="map" class="card-img-top"></div>
        <div class="card-body">
            <h5 class="card-title">Encuentranos</h5>
        </div>
    </div> --}}

{{-- </div> --}}

</div>
{{-- <div class="class d-flex justify-content-center">
    <a href="javascript:window.saluda()">¡Dale al botón!</a>
</div> --}}

@endsection