<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color:grey">
        <div class="container-fluid">
            <div class="container d-flex flex-center">
                <a class="navbar-brand" href={{ route('home') }}><img class="rounded" src="{{ asset("img/Logo.png") }}" alt="{{ env('APP_NAME') }}" style="height:4em"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="#">{{ env('APP_NAME') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Cervezas</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#">Contacto</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#">¿Quienes somos?</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cervecería" aria-label="Search">
                        <button class="btn btn-dark" type="submit">¡Adelante!</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <article>
            <h1 class="text-center">¡Encuentra la cervecería que más te guste!</h1>
            <div class="d-flex">
                <img src="{{ asset("img/copas_de_cerveza.jpg") }}" width="50%">
                <ul class="text-center d-flex row justify-content-center align-items-center">
                    @foreach ($breweries as $brewery)
                    <li>{{ $brewery["nombre"] }} {{ $brewery["poblacion"] }}</li><br>
                    @endforeach
                </ul>
            </div>
        </article>



    </div>
    <footer class="text-center text-white fixed-bottom" style="background-color: grey">
        <div class="container p-4 pb-0">
            <div class="container">
                <section class="mb-4">
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
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">{{ env('APP_NAME') }}.com</a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>