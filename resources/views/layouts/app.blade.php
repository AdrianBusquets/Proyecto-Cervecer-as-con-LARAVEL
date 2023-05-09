<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    @vite(['resources/sass/app.scss','resources/css/app.css','resources/js/popperabout.js', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
        crossorigin=""/>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

</head>
<body>
    <nav class="barra navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="container d-flex flex-center">
                <a class="navbar-brand barradenav" href={{ route('home') }}><img class="rounded" src="{{ asset("img/logo.png") }}" alt="{{ env('APP_NAME') }}" style="height:4em"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="{{ route('breweries') }}">Cervecerías</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Cervezas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="{{ route('contact.create') }}">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="{{ route('about') }}">¿Quienes somos?</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2"  type="search" placeholder="Cervecería" aria-label="Search">
                        <button class="btn btn-dark" type="submit">¡Adelante!</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class=" fondo container">
        {{-- //href="{{ $brewery['name'] }}" --}}
        <article>
            @yield('content')
        </article>
    
        @isset($map)
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
            integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
            crossorigin=""></script>
        @endisset

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="{{ route('about') }}">Cervezamantes.com</a>
        </div>
    </div>
    
    <footer class="conlogos text-center text-white fixed-bottom">
        <div class="container p-3 pb-2">
            <div class="container">
                <section class="mb-1">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="bi bi-facebook"></i
                ></a>
                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="bi bi-twitter"></i
                ></a>
                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="bi bi-google"></i
                ></a>
                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
                    ><i class="bi bi-instagram"></i
                ></a>
            </div>
            
        </div>
        
    </footer>

    <footer class="barra text-center text-white fixed-bottom">
        <div class="container p-3 pb-2">
            
        </div>
        
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>