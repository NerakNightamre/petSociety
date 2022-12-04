<x-layouts.app title="Login">
    <x-layouts.nav />
    <h1>Login</h1>

    <form action=" {{ route('login') }} " method="POST">
        @csrf
        <div>

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
                Recuerdame <br>
                <input type="checkbox" name="remember"> <br>
            </label><br>

        </div>

        <button type="submit">Login</button>

    </form>
    <a href="{{ route('register') }}">Register</a>
</x-layouts.app>
