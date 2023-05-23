@extends('layouts.app')
@section('title', 'Detalle de cerveza')
@section('content')
<h1 class="">Detalle de cerveza</h1>

<x-msgflash />

    <div class="row d-flex justify-content-center">
        <div class="col-sm-6"
        <x-card
                name="{!! $beer->brand !!}"
                {{-- classCard= "{{ $classCard }}" --}}
                description="{!! $beer->description !!}"
                urlBack="{{ route('beers.index') }}"
                urlEdit="{{ route('beers.edit', $beer) }}"
                urlDelete="{{ route('beers.destroy', $beer) }}">
                <x-slot:place>
                    <x-stars value="{{ $beer->vol }}" step="1" />
                </x-slot:place>
                <x-slot:urlImg>
                    @if(isset($beer->img) && ($beer->img != ''))
                    {{ $beer->img }}
                    @else
                    {{ asset('../img/default.jpg') }}
                    @endisset
                </x-slot:urlImg>
        </x-card>
        </div>
    </div>
@endsection