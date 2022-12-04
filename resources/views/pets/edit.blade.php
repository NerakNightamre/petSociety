<x-layouts.app title="Formulario de edicion">
    <x-layouts.nav />

    <h1> {{ $pet->Name }} </h1>
    <form action=" {{ route('pets.update', $pet) }} " method="POST">
        @csrf
        @method('PATCH')

        @include('pets.form')

        <button type="submit">Enviar</button>

    </form>
    <a href="{{ route('pets.index') }}">Regresar</a>
</x-layouts.app>
