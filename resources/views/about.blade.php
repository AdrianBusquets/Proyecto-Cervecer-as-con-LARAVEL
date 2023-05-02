@extends('layouts.app')
@section('title', 'Quienes somos')

@section('content')

<h1>Descubre quienes somos</h1>

<div class="d-flex justify-content-center">
<div class="card text-center" style="width: 36rem;">
    <img src="{{ asset('img/cenosilicafobia.png') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Cervezamantes</h5>
        <p class="card-text">Somos el portal de cervecerías que te guiara en tus rutas cerveceras</p>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="tel:34666222321" target="_system" class="bi bi-telephone-forward-fill text-decoration-none"> Teléfono</a></li>
        <li class="list-group-item"><a href="mailto:cervezamantes@hotmail.com" target="_system" class="bi bi-envelope-at-fill text-decoration-none"> Email</a></li>
        <li class="list-group-item"><a href="https://wa.mi?34666222321" target="_system" class="bi bi-whatsapp text-decoration-none"i> Whatsapp</a></li>
        <li class="list-group-item"><a href="" target="_system" class="bi bi-facebook text-decoration-none"> Facebook</a></li>
        <li class="list-group-item"><a href="" target="_system" class="bi bi-instagram text-decoration-none"> Instagram</a></li>
    </ul>
</div>
</div>
@endsection