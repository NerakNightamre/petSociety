<x-layouts.app title="Agregar Mascotas">
    <x-layouts.nav />
    <h1>Crear Nueva Mascota</h1>


    <form action=" {{ route('pets.store') }} " method="POST" enctype="multipart/form-data">
        @csrf
        @include('pets.form')

        <button type="submit">Enviar</button>

    </form>
    <a href="{{ route('pets.index') }}">Regresar</a>
</x-layouts.app>
