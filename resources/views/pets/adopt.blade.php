<x-layouts.app title="Solicitud de adopcion">
    <x-layouts.nav />
    <h1>Solicitud de adopcion de {{ $pet->Name }}</h1>
    <form action=" https://formsubmit.co/{{ Auth::user()->email }} " method="POST">
        @csrf
        <div>
            <label>
                Nombre <br>
                <input type="text" name="nombre" value=" {{ old('name') }} " autofocus="autofocus"> <br>
                @error('name')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>

            <label>
                email <br>
                <input type="email" name="email" value=" {{ old('email') }} "> <br>
                @error('email')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>

            <label>
                Telefono <br>
                <input type="tel" name="telefono"> <br>
                @error('tel')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>


            <label>
                por que deseas llevarme a casa? <br>
                <input type="textArea" name="Comentarios"> <br>
                @error('textArea')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>

        </div>

        <button type="submit">Quiero adoptar</button>

    </form>
</x-layouts.app>
