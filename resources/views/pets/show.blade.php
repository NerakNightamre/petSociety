<x-layouts.app title="Home">
    <x-layouts.nav />

    <h2>{{ $pet->Species }}</h2>
    <h1> {{ $pet->Name }} </h1>
    <h1> {{ $pet->Race }} </h1>
    <h1> {{ $pet->Comments }} </h1>
    <h1></h1>
    {{-- <a href="{{ route('pets.form') }}">Me gustaria adoptar :)</a> --}}
    <a href="{{ route('pets.adopt', $pet) }}">Quiero adoptarlo</a>
    <a href="{{ route('pets.index') }}">Regresar</a>
</x-layouts.app>
