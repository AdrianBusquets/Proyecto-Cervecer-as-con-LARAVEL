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
                urlBack="{{ route('beers.index') }}">
                @isset($beer->price)
                    <x-slot:price>Precio aproximado: {{ $beer->price }}</x-slot:price>
                @endisset
                <x-slot:badges>
                    @foreach ($beer->breweries as $brewery)
                            @if (($brewery->id % 5) == 0)
                                <a href="{{ route('breweries.show', $brewery) }}"><span class="badge rounded-pill text-warning bg-dark">{{ $brewery->name }}</span></a>
                            @elseif (($brewery->id % 5) == 1)
                                <a href="{{ route('breweries.show', $brewery) }}"><span class="badge rounded-pill text-warning bg-secondary">{{ $brewery->name }}</span></a>
                            @elseif (($brewery->id % 5) == 2)
                                <a href="{{ route('breweries.show', $brewery) }}"><span class="badge rounded-pill text-bg-light">{{ $brewery->name }}</span></a>
                            @elseif (($brewery->id % 5) == 3)
                                <a href="{{ route('breweries.show', $brewery) }}"><span class="badge rounded-pill text-dark bg-warning">{{ $brewery->name }}</span></a>
                            @else
                                <a href="{{ route('breweries.show', $brewery) }}"><span class="badge rounded-pill text-dark bg-success">{{ $brewery->name }}</span></a>
                            @endif
                    @endforeach
                </x-slot:badges>
                
                @if ((null !== Auth::user()) && ($beer->author == Auth::user()->id))
                <x-slot:urlEdit>{{ route('beers.edit', $beer) }}</x-slot:urlEdit>
                <x-slot:urlDelete>{{ route('beers.destroy', $beer) }}</x-slot:urlDelete>
                @endif
                <x-slot:place>
                    <x-stars value="{{ $beer->vol }}" step="1" />
                </x-slot:place>
                <x-slot:urlImg>
                    @if(isset($beer->img) && ($beer->img != ''))
                    {{ $beer->img }}
                    @else
                    {{ asset('../img/default.jpg') }}
                    @endif
                </x-slot:urlImg>
                @isset($brewery->images)
                        <x-slot:urlImgs>
                            @php
                                $imagenes= [];
                                foreach ($brewery->images as $image) {
                                    $imagenes[]= $image->img;
                                }
                            @endphp
                            {{ implode(",", $imagenes) }}
                        </x-slot:urlImgs>
                @endisset
        </x-card>
        </div>
    </div>
@endsection