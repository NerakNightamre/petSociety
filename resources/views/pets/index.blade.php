<x-layouts.app title="Adoptame">
    <x-layouts.nav />

    <div class="container pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">ADOPTAME!</h4>
            <h1 class="display-4 m-0"><span class="text-primary">Todos estos</span> Pequeños disponibles</h1>
        </div>
        <div class="card border-0 mb-2">
            @foreach ($pets as $pet)
                <div class="row pb-3">
                    <div class="col-lg-4 mb-4">
                        <img class="card-img-top" src=" {{ $pet->file }} " alt="">
                        <div class="card-body bg-light p-4">
                            <h4 class="card-title text-truncate">{{ $pet->Name }}</h4>
                            <div class="d-flex mb-3">
                                <p class="mr-2"><i class="fa fa-user text-muted"></i> {{ $pet->Species }} </p>
                                <p class="mr-2"><i class="fa fa-folder text-muted"></i> {{ $pet->Age }}
                                    año</p>
                                <p class="mr-2"><i class="fa fa-comments text-muted"></i>{{ $pet->race }} </p>
                            </div>
                            <p>{{ $pet->Comments }} </p>
                            <a class="font-weight-bold" href="{{ route('pets.show', $pet) }}">Saber mas</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center mb-4">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo; Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

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
        @if ($pet->owner_id == Auth::user()->id)
            @auth
                <div>
                    <a href="{{ route('pets.edit', $pet) }}">Editar</a>
                    <form action="{{ route('pets.destroy', $pet) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                </div>
            @endauth
        @endif
    @endforeach



</x-layouts.app>
