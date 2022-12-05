<x-layouts.app title="Solicitud de adopcion">
    <x-layouts.nav />
    {{-- <form action=" https://formsubmit.co/{{ Auth::user()->email }} " method="POST">
        @csrf
        <div>
            <label>
                Nombre
                <input type="text" name="nombre" value=" {{ old('name') }} " autofocus="autofocus"> <br>
                @error('name')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label>

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

    </form> --}}
    <div style="padding: 30px; background: #f6f6f6;">
        <h3 class="mb-4">Solicitud de adopcion de {{ $pet->Name }}</h3>
        <form action=" https://formsubmit.co/{{ Auth::user()->email }} " method="POST">
            <div class="form-group">
                <label><br>
                    Nombre
                    <input type="text" name="nombre" value=" {{ old('name') }} " autofocus="autofocus"
                        class="form-control">
                    @error('name')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror
                </label>
            </div>
            <div class="form-group">
                <label>
                    email <br>
                    <input type="email" name="email" value=" {{ old('email') }} " class="form-control"> <br>
                    @error('email')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror

                </label><br>
            </div>
            <label>
                Telefono <br>
                <input type="tel" name="telefono" class="form-control"> <br>
                @error('tel')
                    <small style="color: red"> {{ $message }} </small>
                @enderror
            </label><br>

            <div class="form-group">
                <label>
                    por que deseas llevarme a casa? <br>
                    <input type="textArea" name="Comentarios" class="form-control"> <br>
                    @error('textArea')
                        <small style="color: red"> {{ $message }} </small>
                    @enderror

                </label>
            </div>
            <div class="form-group mb-0">
                <input type="submit" value="Quiero Adoptarlo!" class="btn btn-primary px-3">
            </div>
        </form>
    </div>
    <x-layouts.footer />
</x-layouts.app>
