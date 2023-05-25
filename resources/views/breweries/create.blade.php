@extends('layouts.app')
@section('title','Agrega una cervecería')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-6">
        <h1>Agrega una cervecería</h1>
        <x-msgflash />
        @isset($errors)
            @foreach ($errors->all() as $error)
                <p class="bg-danger text-dark text-center">{{ $error }}</p>
            @endforeach
        @endisset
        {{-- <form class="text-white fondocreate needs-validation" method="POST" action="{{ route('breweries.store') }}" novalidate> 
            
        </form>   --}}
        <div class="opacidadCard">
        <form class="text-white needs-validation" enctype="multipart/form-data" method="POST" action="{{ route('breweries.store') }}" novalidate> 
            @csrf  
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" aria-describedby="nameHelp" required>
                <div id="nameHelp" class="form-text text-white">Dinos como se llama</div>
                <div class="valid-feedback">
                    Nombre validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPlace1" class="form-label">Localidad</label>
                <input type="text" class="form-control" id="exampleInputPlace1"  name="place" value="{{ old('place') }}" aria-describedby="placeHelp" required>
                <div id="placeHelp" class="form-text text-white">Localidad en la que se situa</div>
                <div class="valid-feedback">
                    Localidad validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" aria-describedby="descriptionHelp" required>{{ old('description') }}</textarea>
                <div id="descriptionHelp" class="form-text text-white">Describenos el lugar</div><div class="valid-feedback">
                    Descripción validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputLatitude1" class="form-label">Latitud</label>
                <input type="number" step= "0.000001" class="form-control" id="exampleInputLatitude1"  name="latitude" value="{{ old('latitude') }}" aria-describedby="latitudeHelp" required>
                <div id="latitudeHelp" class="form-text text-white">Su latitud</div>
                <div class="valid-feedback">
                    Latitud validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputlongitude1" class="form-label">Longitud</label>
                <input type="number" step= "0.000001" class="form-control" id="exampleInputlongitude1"  name="longitude" value="{{ old('longitude') }}" aria-describedby="longitudeHelp" required>
                <div id="longitudeHelp" class="form-text text-white">Su longitud</div>
                <div class="valid-feedback">
                    Longitud validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
                <div class="mb-3 row m-2">
                    <label class="form-label">Cervezas que sirve</label>
                    @foreach ($beers as $beer)
                    <div class="col-sm-6 form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="beer_{{ $beer->id }}" value="{{ $beer->id }}" name="beers[]">
                        <label class="form-check-label" for="beer_{{ $beer->id }}">{{ $beer->brand }}</label>
                    </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen</label>
                    <input type="file" class="form-control" id="img"  name="img">
                    <div id="longitudeHelp" class="form-text text-white">Sube una imagen</div>
                </div>
            </div>
            <button type="submit" class="btn btn-secondary">Agregar</button>
        </form> 
        </div>
    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
        console.log('pasa por aqui');
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }

        form.classList.add('was-validated')
        }, false)
    })
    })()
    </script>






@endsection