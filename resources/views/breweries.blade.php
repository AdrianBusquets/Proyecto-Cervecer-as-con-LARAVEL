@extends('layouts.app')
@section('title', 'Listado de cervecerías')
@section('content')
            <h1 class="">Listado de cervecerías</h1>
            
            <div class="row d-flex justify-content-between">
                @foreach ($breweries as $brewery)
                <div class= "col-lg-4 col-md-6">
                    <div class="card mb-4 text-center w-100" style="width: 18rem;">
                        <img src="{{ $brewery['imagen'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $brewery["nombre"] }}</h5>
                            <p class="card-text">{{ $brewery["poblacion"] }}</p>
                            <a href="{{ route('brewery', $brewery["id"]) }}" class="btn btn-dark">Descubrela</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
@endsection