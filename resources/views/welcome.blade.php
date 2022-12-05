<x-layouts.app title="Home">
    <x-layouts.nav />
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Adopta! No Compres</h3>
                            <h1 class="display-3 text-white mb-3">Salva una vida :)</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">NO TE ARREPENTIRAS</h5>
                            <a href="{{ route('pets.index') }}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Quiero
                                Adoptar</a>
                            <a href="{{ route('adoption') }}" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Quiero
                                dar en
                                adopcion</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h3 class="text-white mb-3 d-none d-sm-block">Adopta! No Compres</h3>
                            <h1 class="display-3 text-white mb-3">Salva una vida :)</h1>
                            <h5 class="text-white mb-3 d-none d-sm-block">NO TE ARREPENTIRAS </h5>
                            <a href="{{ route('pets.index') }}" class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Quiero
                                Adoptar</a>
                            <a href="{{ route('adoption') }}" class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Quiero
                                dar en
                                adopcion</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary rounded" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>

    <!-- About Start -->
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Por que adoptar?</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Felicidad</span> & <span
                        class="text-secondary">Comodidad</span></h1>
                <h5 class="text-muted mb-3">Afuera existen miles de vidas que sufren todos los dias por intentar
                    sobrevivir, vidas en espera de un hogar y ser amados.
                    Nosotros creamos esta pagina para dar a conocer todas estos seres en busca de una casita :)
                </h5>
                <p class="mb-4">Adoptar es muy sencillo!</p>
                <ul class="list-inline">
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Registrate</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Escoge a tu companero</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Llena la solicitud</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-check-double text-secondary mr-3"></i>Si eres candidato, te contactaremos :D
                        </h5>
                    </li>
                </ul>
                <a href="{{ route('pets.index') }}" class="btn btn-lg btn-primary mt-3 px-4">Adopta Aqui!</a>
            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="img/feature.jpg" alt="">
            </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Tambien puedes dar en adopcion!</h4>
                <h1 class="display-4 mb-4"><span class="text-primary">Piensa</span> En Ellos</h1>
                <p class="mb-4">Sabemos que el tener una mascota en casa no siempre resulta facil, asi que por
                    favor, no la abandones y publicala!
                    quiza alguien esta esperando para darle mucho amor
                </p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Sera muy feliz</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Alguien cuidara de el</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Le daran amor</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">No estara solo</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Blog Start -->
    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Algunos de nuestros pequeños</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Dale</span> La Oportunidad</h1>
        </div>
        <div class="row pb-3">
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-1.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-2.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card border-0 mb-2">
                    <img class="card-img-top" src="img/blog-3.jpg" alt="">
                    <div class="card-body bg-light p-4">
                        <h4 class="card-title text-truncate">Diam amet eos at no eos</h4>
                        <div class="d-flex mb-3">
                            <small class="mr-2"><i class="fa fa-user text-muted"></i> Admin</small>
                            <small class="mr-2"><i class="fa fa-folder text-muted"></i> Web Design</small>
                            <small class="mr-2"><i class="fa fa-comments text-muted"></i> 15</small>
                        </div>
                        <p>Diam amet eos at no eos sit lorem, amet rebum ipsum clita stet, diam sea est diam eos, rebum
                            sit vero stet justo</p>
                        <a class="font-weight-bold" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
    <x-layouts.footer />
</x-layouts.app>
