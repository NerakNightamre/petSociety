<x-layouts.app title="Home">
    <x-layouts.nav />

    <h2>{{ $pet->Species }}</h2>
    <h1> {{ $pet->Name }} </h1>
    <h1> {{ $pet->Race }} </h1>
    <h1> {{ $pet->Comments }} </h1>
    <h1></h1>
    <img src="{{ $pet->file }}" alt="imagen de referencia"><br>
    <a href="{{ route('pets.adopt', $pet) }}">Quiero adoptarlo</a>
    <a href="{{ route('pets.index') }}">Regresar</a>
</x-layouts.app>
