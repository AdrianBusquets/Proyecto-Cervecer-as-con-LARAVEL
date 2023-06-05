@extends('layouts.app')
@section('title','Añade una cerveza')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-6">
        <div id="fondoform" style="position: absolute; top:0px ; left: 0px; right: 0px; bottom: 0px; z-index: -1; opacity: 0.5;" class="rounded-5"></div>
        <h1>Nueva cerveza</h1>
        <x-msgflash />
        {{-- <form class="text-white fondocreate needs-validation" method="POST" action="{{ route('breweries.store') }}" novalidate> 
            
        </form>   --}}
        <form class="text-white needs-validation" enctype="multipart/form-data" method="POST" action="{{ route('beers.store') }}" novalidate> 
            @csrf  

            <div class="mb-3 text-center">
                <label for="brand" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand') }}" aria-describedby="nameHelp" required/>
                <div id="brandHelp" class="form-text text-white">Dinos como se llama</div>
                <div class="valid-feedback">
                    Nombre validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 text-center">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" aria-describedby="descriptionHelp" required>{{ old('description') }}</textarea>
                <div id="descriptionHelp" class="form-text text-white">Describenos el lugar</div><div class="valid-feedback">
                    Descripción validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 text-center">
                <label for="vol" class="form-label">Graduación alcohólica</label>
                <input type="number" step= "0.000001" class="form-control" id="vol"  name="vol" value="{{ old('vol') }}" aria-describedby="volHelp" required>
                <div id="volHelp" class="form-text text-white">Su graduación alcohólica</div>
                <div class="valid-feedback">
                    Graduación alcohólica validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 text-center">
                <label for="price" class="form-label">Precio aproximado</label>
                <input type="number" step= "0.000001" class="form-control" id="price"  name="price" value="{{ old('price') }}" aria-describedby="priceHelp" required>
                <div id="priceHelp" class="form-text text-white">Su precio aproximado</div>
                <div class="valid-feedback">
                    Precio aproximado validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 row m-2">
                <label class="form-label text-center">Cervecerías que la sirven sirve</label>
                @foreach ($breweries as $brewery)
                <div class="col-sm-6 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="beer_{{ $brewery->id }}" value="{{ $brewery->id }}" name="breweries[]">
                    <label class="form-check-label" for="brewery_{{ $brewery->id }}">{{ $brewery->name }}</label>
                </div>
                @endforeach
            </div>
            <div class="mb-3 text-center">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="img"  name="img">
                <div id="longitudeHelp" class="form-text text-white">Sube una imagen</div>
            </div>
            <div class="mb-3 text-center">
                <label for="images" class="form-label">Más imágenes</label>
                <div class="row" id="contImages">
                    <div class="d-flex mb-2">
                        <input type="file" class="form-control" id="images_0"  name="images[]">
                        <a href="javascript: otraImg()" class="btn btn-warning" style="width: 20%">+</a>
                    </div>
                </div>
                <div id="longitudeHelp" class="form-text text-white">Sube más imágenes</div>
            </div>
            <div class=" text-center">
                <button type="submit" class="btn btn-secondary">Añadir</button>
            </div>
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