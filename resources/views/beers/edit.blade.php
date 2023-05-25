@extends('layouts.app')
@section('title','Modificar cerveza')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-6">
        <h1>Modifica esta cerveza</h1>
        <x-msgflash />
        {{-- <form class="text-white fondocreate needs-validation" method="POST" action="{{ route('breweries.store') }}" novalidate> 
            
        </form>   --}}
        <form class="text-white needs-validation" enctype="multipart/form-data" method="POST" action="{{ route('beers.update', $beer) }}" novalidate> 
            @method('PUT')
            @csrf  

            <div class="mb-3">
                <label for="brand" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="brand" name="brand" value="{{ $beer->brand }}" aria-describedby="nameHelp" required/>
                <div id="brandHelp" class="form-text text-white">Dinos como se llama</div>
                <div class="valid-feedback">
                    Nombre validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripción</label>
                <textarea class="form-control" id="description" name="description" aria-describedby="descriptionHelp" required>{{ $beer->description }}</textarea>
                <div id="descriptionHelp" class="form-text text-white">Describenos el lugar</div><div class="valid-feedback">
                    Descripción validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="vol" class="form-label">Graduación alcohólica</label>
                <input type="number" step= "0.000001" class="form-control" id="vol"  name="vol" value="{{ $beer->vol }}" aria-describedby="latitudeHelp" required>
                <div id="volHelp" class="form-text text-white">Su graduación alcohólica</div>
                <div class="valid-feedback">
                    Graduación alcohólica validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 row m-2">
                <label class="form-label">Cervecerías que la sirven sirve</label>
                @foreach ($breweries as $brewery)
                <div class="col-sm-6 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="beer_{{ $brewery->id }}" value="{{ $brewery->id }}" name="breweries[]"
                    {{ ($beer->breweries->find($brewery->id) ? "checked" : "") }}>
                    <label class="form-check-label" for="brewery_{{ $brewery->id }}">{{ $brewery->name }}</label>
                </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="img"  name="img">
                <div id="longitudeHelp" class="form-text text-white">Sube una imagen</div>
            </div>
            <button type="submit" class="btn btn-secondary">Modificar</button>
        </form> 
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