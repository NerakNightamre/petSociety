{{-- <ul>
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
</ul> --}}
<div class="col-lg-6 text-center text-lg-right">
    <div class="d-inline-flex align-items-center">
        <a class="text-white px-3" href="">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="text-white px-3" href="">
            <i class="fab fa-twitter"></i>
        </a>
        <a class="text-white px-3" href="">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a class="text-white px-3" href="">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="text-white pl-3" href="">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
</div>
</div>
<div class="row py-3 px-lg-5">
    <div class="col-lg-4">
        <a href="" class="navbar-brand d-none d-lg-block">
            <h1 class="m-0 display-5 text-capitalize"><span class="text-primary">Pet</span>Society</h1>
        </a>
    </div>
    <div class="col-lg-8 text-center text-lg-right">
        <h1>Hay un pequeño esperando por ti </h1>
    </div>
</div>
</div>

<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-5 text-capitalize font-italic text-white"><span
                    class="text-primary">Pet</span>Society
            </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
            <div class="navbar-nav mr-auto py-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('pets.index') }}" class="nav-item nav-link">Quiero Adoptar</a>
                <a href="{{ route('adoption') }}" class="nav-item nav-link">Quiero dar en adopcion</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Animalitos</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{ route('pets.index') }}" class="dropdown-item">Perros</a>
                        <a href="{{ route('pets.index') }}" class="dropdown-item">Gatos</a>
                        <a href="{{ route('pets.index') }}" class="dropdown-item">Otros</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            @guest
                <a href="{{ route('login') }}" class="btn btn-lg btn-primary px-3 d-none d-lg-block">Log in</a>
            @else
                <form action="{{ route('logout') }}" method="POST" class="btn btn-lg btn-primary px-3 d-none d-lg-block">
                    @csrf
                    <button>LogOut</button>
                </form>
            @endguest

        </div>
    </nav>
</div>
