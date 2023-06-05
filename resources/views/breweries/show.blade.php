@extends('layouts.app')
@section('title', 'Cervecería '. $brewery->name)
@section('content')
            <h1 class="">Descubre la cervecería</h1>
            
            <div class="row d-flex justify-content-center">
                <x-card name="{!! $brewery->name !!}"
                        place="{!! $brewery->place !!}"
                        description="{!! $brewery->description !!}"
                        
                        urlBack="{{ route('breweries') }}"
                        classCard="col-sm-6 col-md-6 col-lg-6"
                        map="S"
                        lat="{{ $brewery->latitude }}"
                        long="{{ $brewery->longitude }}"    
                        >
                        <x-slot:badges>
                            @foreach ($brewery->beers as $beer)
                            @if (($beer->id % 5) == 0)
                                <a href="{{ route('beers.show', $beer) }}"><span class="badge rounded-pill text-warning bg-dark">{{ $beer->brand }}</span></a>
                            @elseif (($beer->id % 5) == 1)
                                <a href="{{ route('beers.show', $beer) }}"><span class="badge rounded-pill text-warning bg-secondary">{{ $beer->brand }}</span></a>
                            @elseif (($beer->id % 5) == 2)
                                <a href="{{ route('beers.show', $beer) }}"><span class="badge rounded-pill text-bg-light">{{ $beer->brand }}</span></a>
                            @elseif (($beer->id % 5) == 3)
                                <a href="{{ route('beers.show', $beer) }}"><span class="badge rounded-pill text-dark bg-warning">{{ $beer->brand }}</span></a>
                            @else
                                <a href="{{ route('beers.show', $beer) }}"><span class="badge rounded-pill text-dark bg-success">{{ $beer->brand }}</span></a>
                            @endif
                            @endforeach
                        </x-slot:badges>
                        @isset ($brewery->user)
                        <x-slot:author>{{ $brewery->user->name }}</x-slot:author>
                        @endisset

                        <x-slot:urlImg>
                            @if(isset($brewery->img) && ($brewery->img != ''))
                        {{ $brewery->img }}
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
                        @if (((! isset($brewery->user)) && (null !== Auth::user())) ||
                        (null !== Auth::user()) && isset($brewery->user) && ($brewery->user->id == Auth::user()->id))
                        <x-slot:urlEdit>{{ route('breweries.edit', $brewery) }}</x-slot:urlEdit>
                        <x-slot:urlDelete>{{ route('breweries.delete', $brewery) }}</x-slot:urlDelete>
                        @endif
                <x-slot:place>
                <div class="card-body">
                    <a href="#" class="card-link">Carta de cervezas</a>
                    <a href="#" class="card-link">Como llegar</a>
                </div>
                </x-slot:place>
                <a urlBack="{{ route('breweries') }}"></a>
                </x-card>
            </div>
@endsection