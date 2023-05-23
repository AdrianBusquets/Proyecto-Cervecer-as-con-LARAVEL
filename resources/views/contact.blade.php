@extends('layouts.app')
@section('title','Contacta con nosotros')
@section('content')
<div class="d-flex justify-content-center">
    <div class="col-sm-6">
        <h1>Contacta con nosotros</h1>
        <x-msgflash />
        <div id="contenedorform" style="position: relative">
            <div id="fondoform" style="position: absolute; top:0px ; left: 0px; right: 0px; bottom: 0px; z-index: -1; opacity: 0.5;" class="rounded-5"></div>
        <form class="text-white needs-validation text-center" method="POST" action="{{ route('contact.store') }}" novalidate> 
            @csrf  
            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" required>
                <div id="nameHelp" class="form-text text-white">Aquí tu nombre completo</div>
                <div class="valid-feedback">
                    Nombre validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  name="email"aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text text-white">Aquí tu email</div>
                <div class="valid-feedback">
                    Email validado
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Tu consulta</label>
                <textarea class="form-control" id="message" name="message" aria-describedby="messageHelp" required></textarea>
                <div id="messageHelp" class="form-text text-white">¿En qué podemos ayudarte?</div><div class="valid-feedback">
                    Consulta validada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="privacity" name="privacity" required>
                <label class="form-check-label" for="privacity">Acepto la política de privacidad</label>
                <div class="valid-feedback">
                    Política de privacidad aceptada
                </div>
                <div class="invalid-feedback">
                    Este campo es obligatorio
                </div>
            </div>
            <button type="submit" class="btn btn-secondary">Enviar</button>
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