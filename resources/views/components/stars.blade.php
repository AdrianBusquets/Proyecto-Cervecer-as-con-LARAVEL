{{-- @php
    dd($value);
@endphp --}}
@for ($i = 0 ; $i < 10 ; $i++)
    @if (isset($value) && $value >= (($step * $i) + ($step /1)))
        <img src="{{ asset('img/estrellita.png') }}" style="height: 1.5em" title="{{ $value }}%">
    @else
        <img src="{{ asset('img/estrellita.png') }}" style="height: 1.5em; opacity: 0.5; filter: grayscale(100%)">
    @endif
@endfor