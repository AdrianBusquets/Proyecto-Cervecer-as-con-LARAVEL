<div class="row d-flex justify-content-between">
    <div class="input-group d-flex justify-content-center m-4">
        <div class="form-outline">
            <input id="search-focus" type="search" id="form1" class="form-control text-center" placeholder="Busca tu cervecería..." wire:model="searchText"/>
        </div>
        <button type="button" class="btn btn-warning rounded">
            <i class="bi bi-search"></i>
        </button>
    </div>
    @foreach ($breweries as $brewery)
        <x-card
                        
        name="{!! $brewery->name !!}"
        {{-- classCard= "{{ $classCard }}" --}}
        place="{!! $brewery->place !!}"
        urlView="{{ route('breweries.show', $brewery->id) }}">
        <x-slot:urlImg>
            @if(isset($brewery->img) && ($brewery->img != ''))
            {{ $brewery->img }}
            @else
            {{ asset('../img/default.jpg') }}
            @endisset
        </x-slot:urlImg>
        </x-card>
        <script>
            L.marker([{{ $brewery->latitude }}, {{ $brewery->longitude }}]).addTo(map);
        </script>
    @endforeach
</div>
