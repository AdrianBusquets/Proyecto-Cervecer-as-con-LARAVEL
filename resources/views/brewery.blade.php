@extends('layouts.app')
@section('title', 'Cervecería '. $brewery["nombre"])
@section('content')
            <h1 class="">Descubre la cervecería</h1>
            
            <div class="row d-flex justify-content-center">
                
                <div class= "col-6 text-center">
                    <div class="card text-center w-100" style="width: 18rem;">
                        <img src="{{ $brewery['imagen'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $brewery["nombre"] }}</h5>
                            <p class="card-text">{{ $brewery["poblacion"] }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Carta de cervezas</a>
                            <a href="#" class="card-link">Como llegar</a>
                        </div>
                    </div>    
                    <a href="{{ route('breweries') }}" class="btn btn-dark m-5">Volver</a>
                </div>
                
            </div>
@endsection