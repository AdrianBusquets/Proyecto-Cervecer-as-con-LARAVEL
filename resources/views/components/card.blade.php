{{-- @isset($classCard)
<div class="{{ $classCard }}"></div>
@else
<div class= "col-lg-4 col-md-6">
@endisset --}}


<div class= "col-sm-6">
    <div class="listas card mb-4 text-center w-100 text-white shadow-lg bg-body-dark rounded" style="border-radius:15px; width: 18rem;">
        @isset($urlImg)
        <img src="{{ $urlImg }}" class="card-img-top" alt="...">
        @endisset
        @isset($map)
        <div id="map" style= "widht:100% ; height:18rem ; border-radius:10px " class="card-img-top w-100"></div>
        @endisset
        <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            
            @isset($place)
            <p class="card-text">{{ $place }}</p>
            @endisset

            @isset($description)
            <p class="card-text">{{ $description }}</p>
            @endisset
            
            @isset($urlView)
            <a href="{{ $urlView }}" class="btn btn-secondary">Descubrela</a>
            @endisset
            
            
        </div>
        @if (isset($map) && isset($urlImg))
        <div id="map" style= "widht:100% ; height:18rem" class="card-img-top w-100"></div>
        @endif
    </div>
    @isset($urlBack)
    <div class="text-center">
        <a href="{{ $urlBack }}" class="btn btn-secondary">Volver</a>
    </div>
    @endisset
    @isset($map)
        <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
                integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
                crossorigin=""></script>
            <script>
                var map = L.map('map').setView([{{ $lat }},{{ $long }}], 17);
                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);
                
                L.marker([{{ $lat }}, {{ $long }}]).addTo(map);
            </script>
        @endisset
</div>
