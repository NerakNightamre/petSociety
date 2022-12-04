<x-layouts.app title="Registro">
    <x-layouts.nav />
    <h1>registro</h1>

    <form action=" {{ route('register') }} " method="POST">
        @csrf
        <div>
            <label>
                Nombre <br>
                <input type="text" name="name" value=" {{ old('name') }} " autofocus="autofocus"> <br>
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
                Password <br>
                <input type="password" name="password"> <br>
                @error('password')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>


            <label>
                Confirma tu password <br>
                <input type="Password" name="password_confirmation"> <br>
                @error('password_confirmation')
                    <small style="color: red"> {{ $message }} </small>
                @enderror

            </label><br>

        </div>

        <button type="submit">Registrarme</button>

    </form>
    <a href="{{ route('login') }}">Login</a>
</x-layouts.app>
