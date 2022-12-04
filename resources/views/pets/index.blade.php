<x-layouts.app title="Adoptame">
    <x-layouts.nav />

    <h1>Quiero adoptar</h1>
    @foreach ($pets as $pet)
        <div style="display: flex; allign-items: baseline">
            <h2>
                <a href="{{ route('pets.show', $pet) }}">
                    {{ $pet->Name }}
                </a>
            </h2> &nbsp;
            </form>
        </div>
        @auth
            <div>
                <a href="{{ route('pets.edit', $pet) }}">Editar</a>
                <form action="{{ route('pets.destroy', $pet) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
            </div>
        @endauth
    @endforeach
</x-layouts.app>
