@extends('layouts.app')
@section('title', 'Listado de cervezas')
@section('content')
<h1 class="">Listado de cervezas</h1>

<x-msgflash />
<div class="d-flex justify-content-center my-4">
    @auth
    <a href="{{ route('beers.create') }}" class="btn btn-secondary mb-4" style="width: 35%">Agrega una cerveza</a>
    @endauth
    @guest
        <h4>Registrate para agregar una cerveza</h4>
    @endguest
</div class="col-lg-4 col-md-6 col-sm-12">
    <div class="row d-flex justify-content-between">
        <div id="InfiniteScroll" class="row d-flex justify-content-between">
        @foreach ($beers as $beer)
        <x-card
                
                name="{!! $beer->brand !!}"
                {{-- classCard= "{{ $classCard }}" --}}
                description="{!! $beer->description !!}"
                urlView="{{ route('beers.show', $beer) }}">
                <x-slot:place>
                    <x-stars  step="1" value="{{ $beer->vol }}">
                        {{-- <x-slot:value>
                            @if(null !== $beer->vol && $beer->vol != "")
                        {{ intval($beer->vol, 10) }}
                        @else
                        0
                        @endif
                        </x-slot:value> --}}
                    </x-stars>
                </x-slot:place>
                
                <x-slot:urlImg>
                    @if(isset($beer->img) && ($beer->img != ''))
                    {{ $beer->img }}
                    @else
                    {{ asset('../img/default.jpg') }}
                    @endisset
                </x-slot:urlImg>
        </x-card>
        @endforeach
    </div>
    </div>
    <div id="loading" class="text-center d-none"><img src="{{ asset('img/loading.gif') }}"></div>
    {{-- <a href="javascript:window.loadData()">+</a> --}}
    {{-- <div class="d-flex justify-content-center">{{ $beers->links() }}</div> --}}
</div>
<script>
    window.page= 1;
    window.contenedor= "InfiniteScroll";
    window.finScroll = false;
    window.divLoading= 'loading';

    window.loadData = ( () => {
        if (window.finScroll == false){
            window.finScroll = true;
            $('#' + window.divLoading).removeClass('d-none');
            
            window.page++;
        urlInfiniteScroll= '?page=' + window.page;
        console.log(urlInfiniteScroll);
        $.ajax(
            {
                url: urlInfiniteScroll,
                type: 'get',
                beforeSend: function(){
                    console.log(urlInfiniteScroll);
                }
            }
        )
        .done (function (data) {
            if(data.beers == ''){
                $('#' + window.contenedor).append('<p class="text-warning text-center">Has llegado al final del listado</p>');
            } else{
                $('#' + window.contenedor).append(data.beers);
                window.finScroll = false;
            }
            $('#' + window.divLoading).addClass('d-none');
        })
        
        .fail (function (jqXHR, ajaxOptions, thrownError){
            $('#' + window.contenedor).append('<p class= "text-danger">Ha ocurrido un error</p>');
            $('#' + window.divLoading).addClass('d-none');
        })
    }
    });

    

    window.addEventListener ('scroll', function(){
            if($(window).scrollTop + $(window).height >= $('#' + window.contenedor).scrollTop + $('#' + window.contenedor).height){
                window.loadData();
            }
        });

</script>

@endsection


