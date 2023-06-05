{{-- <div wire:model="brewerymap"> --}}
    {{-- @foreach ($breweries as $brewery)
        <x-card
                        
        name="{!! $brewery->name !!}"
        {{-- classCard= "{{ $classCard }}" --}}
        {{-- place="{!! $brewery->place !!}"
        urlView="{{ route('breweries.show', $brewery->id) }}"> --}}
        {{-- <x-slot:urlImg>
            @if(isset($brewery->img) && ($brewery->img != ''))
            {{ $brewery->img }}
            @else
            {{ asset('../img/default.jpg') }}
            @endisset
        </x-slot:urlImg> --}}
        {{-- </x-card>
        <script> --}}
            {{-- L.marker([{{ $brewery->latitude }}, {{ $brewery->longitude }}]).addTo(map);
        </script>
    @endforeach --}}
{{-- </div>  --}}
