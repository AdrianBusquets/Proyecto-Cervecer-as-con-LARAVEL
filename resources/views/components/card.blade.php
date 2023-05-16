@isset($classCard)
<div class="{{ $classCard }}">
@else
<div class= "col-sm-12 col-md-6 col-lg-4">
@endisset 



    <div class="listas card mb-4 text-center text-white shadow-lg bg-body-dark rounded w-100" style="border-radius:15px;">
        @isset($urlImg)
        <img src="{{ $urlImg }}" class="card-img-top w-100" alt="...">
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
            <div class="d-flex justify-content-around">
            @isset($urlEdit)
            <a href="{{ $urlEdit }}" class="btn btn-light">Modificar</a>
            @endisset

            @isset($urlDelete)
            <form method="POST" action="{{ $urlDelete }}">
                @method('DELETE')
                @csrf
            <button type="submit" href="{{ $urlDelete }}" class="btn btn-danger">Eliminar</button>
            @endisset
            </form>
            </div>
        </div>
        
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
