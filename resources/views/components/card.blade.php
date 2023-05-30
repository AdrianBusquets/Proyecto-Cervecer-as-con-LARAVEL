@isset($classCard)
<div class="{{ $classCard }}">
@else
<div class= "col-sm-12 col-md-6 col-lg-4">
@endisset 



    <div class="listas card mb-4 text-center text-white shadow-lg bg-body-dark rounded w-100" style="border-radius:15px;">
        @isset($urlImg)
            @isset($urlImgs)
            @php
                $urls= explode(",", $urlImgs);
            @endphp
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="{{ $urlImg }}" class="d-block w-100" alt="{{ $name }}">
                    </div>
                    @foreach ($urls as $url)
                    <div class="carousel-item">
                        <img src="{{ $url }}" class="d-block w-100" alt="{{ $name }}">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
                </div>
            @else
                <img src="{{ $urlImg }}" class="card-img-top w-100" alt="{{ $name }}">
            @endisset
        @endisset
        @isset($map)
        <div id="map" style= "widht:100% ; height:18rem ; border-radius:10px " class="card-img-top w-100"></div>
        @endisset
        
        <div class="card-body">
            <h5 class="card-title">{{ $name }}</h5>
            
            @isset($badges)
                <p class="car-text">{{ $badges }}</p>
            @endisset
            @isset($place)
            <p class="card-text">{!! $place !!}</p>
            @endisset

            @isset($author)
            <p class="card-text text-warning">Cervecería añadida por {{ $author }}</p>
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
