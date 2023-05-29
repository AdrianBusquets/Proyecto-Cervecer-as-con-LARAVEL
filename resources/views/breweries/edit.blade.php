@extends('layouts.app')
@section('title','Modificar cervecería')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-6">
        <h1>Modifica esta cervecería</h1>
        <x-msgflash />
        {{-- <form class="text-white fondocreate needs-validation" method="POST" action="{{ route('breweries.store') }}" novalidate> 
            
        </form>   --}}
        <form class="text-white needs-validation" enctype="multipart/form-data" method="POST" action="{{ route('breweries.update', $brewery->id) }}" novalidate> 
            @method('PUT')
            @csrf  

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $brewery->name }}" aria-describedby="nameHelp" required/>
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
                <input type="text" class="form-control" id="exampleInputPlace1"  name="place" value="{{ $brewery->place }}" aria-describedby="placeHelp" required>
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
                <textarea class="form-control" id="description" name="description" aria-describedby="descriptionHelp" required>{{ $brewery->description }}</textarea>
                <div id="descriptionHelp" class="form-text text-white">Describenos el lugar</div><div class="valid-feedback">
                    Descripción validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputLatitude1" class="form-label">Latitud</label>
                <input type="number" step= "0.000001" class="form-control" id="exampleInputLatitude1"  name="latitude" value="{{ $brewery->latitude }}" aria-describedby="latitudeHelp" required>
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
                <input type="number" step= "0.000001" class="form-control" id="exampleInputlongitude1"  name="longitude" value="{{ $brewery->longitude }}" aria-describedby="longitudeHelp" required>
                <div id="longitudeHelp" class="form-text text-white">Su longitud</div>
                <div class="valid-feedback">
                    Longitud validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 row m-2">
                <label class="form-label">Cervezas que sirve</label>
                @foreach ($beers as $beer)
                <div class="col-sm-6 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="beer_{{ $beer->id }}" value="{{ $beer->id }}" name="beers[]"
                    {{ ($brewery->beers->find($beer->id) ? "checked" : "") }}>
                    <label class="form-check-label" for="beer_{{ $beer->id }}">{{ $beer->brand }}</label>
                </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="img"  name="img">
                <div id="longitudeHelp" class="form-text text-white">Sube una imagen</div>
            </div>
            <div class="mb-3">
                <label for="images" class="form-label">Más imágenes</label>
                <div class="row" id="contImages">
                    <div class="d-flex mb-2">
                        <input type="file" class="form-control" id="images_0"  name="images[]">
                        <a href="javascript: otraImg()" class="btn btn-warning" style="width: 20%">+</a>
                    </div>
                </div>
                <div id="longitudeHelp" class="form-text text-white">Sube más imágenes</div>
            </div>
            <button type="submit" class="btn btn-secondary">Modificar</button>
        </form> 
    </div>
</div>
<script>

function otraImg(){
        let contenedor= document.getElementById('contImages');
        if(contenedor){
            contenedor.insertAdjacentHTML('beforeEnd', '<div class="d-flex mb-2"> <input type="file" class="form-control" id="images_0"  name="images[]"><a href="javascript: otraImg()" class="btn btn-warning" style="width: 20%">+</a></div>');
        }
    }
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