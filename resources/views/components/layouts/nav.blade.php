<ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('pets.index') }}">quiero adoptar</a></li>
    <li><a href="{{ route('adoption') }}">quiero dar en adopcion</a></li>
    @guest
        <li><a href="{{ route('register') }}">Registrate</a></li>
        <li><a href="{{ route('login') }}">login</a></li>
    @else
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button>LogOut</button>
        </form>
    @endguest
</ul>
