<x-layouts.app title="Home">
    <x-layouts.nav />
    {{--
    <h2>{{ $pet->Species }}</h2>
    <h1> {{ $pet->Name }} </h1>
    <h1> {{ $pet->Race }} </h1>
    <h1> {{ $pet->Comments }} </h1>
    <h1></h1>
    <img src="{{ $pet->file }}" alt="imagen de referencia"><br>
    <a href="{{ route('pets.adopt', $pet) }}">Quiero adoptarlo</a>
    <a href="{{ route('pets.index') }}">Regresar</a> --}}
    <div>
        <div class="container py-5">
            <div class="row pt-5">
                <div class="col-lg-8">
                    <div class="d-flex flex-column text-left mb-4">
                        <h4 class="text-secondary mb-3">{{ $pet->Species }}</h4>
                        <h1 class="mb-3">{{ $pet->Name }}</h1>
                        <div class="d-index-flex mb-2">
                            <span class="mr-3"><i class="fa fa-user text-muted"></i>{{ $pet->Gender }}</span>
                            <span class="mr-3"><i class="fa fa-folder text-muted"></i> {{ $pet->race }}</span>
                            <span class="mr-3"><i class="fa fa-comments text-muted"></i> {{ $pet->Age }}
                                años</span>
                        </div>
                    </div>

                    <div class="media bg-light mb-5 p-4 p-md-5">
                        <img src="{{ $pet->file }}" alt="Image" class="img-fluid mr-4 mt-1" style="width: 500px;">
                        <div class="media-body">
                            <h5 class="mb-3">{{ $pet->Name }}</h5>
                            <p class="m-0">{{ $pet->Comments }}</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('pets.index') }}"
                                class="btn btn-lg btn-primary mt-3 mt-md-4 px-4">Regresar</a>
                            <a href="{{ route('pets.adopt', $pet) }}"
                                class="btn btn-lg btn-secondary mt-3 mt-md-4 px-4">Quiero
                                Adoptarlo!</a>
                        </div>
                    </div>


                    {{--
                    <div style="padding: 30px; background: #f6f6f6;">
                        <h3 class="mb-4">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment" class="btn btn-primary px-3">
                            </div>
                        </form>
                    </div>
                </div> --}}

                    <div class="mb-5">
                        <h3 class="mb-4">Tags</h3>
                        <div class="d-flex flex-wrap m-n1">
                            <a href="" class="btn btn-outline-primary m-1">Gato</a>
                            <a href="" class="btn btn-outline-primary m-1">Bonito</a>
                            <a href="" class="btn btn-outline-primary m-1">Naranja</a>
                            <a href="" class="btn btn-outline-primary m-1">Macho</a>
                        </div>
                    </div>
                    <div class="mb-5">
                        <img src="img/blog-3.jpg" alt="" class="img-fluid">
                    </div>
                    <div>
                        <h3 class="mb-4">Detalles de adopcion</h3>
                        Requerda que al adoptar te vuelves responsable de una vida asi que te pedimos el mayor
                        compromiso y seriedad posible

                        ahora llena el formulario y el dueno te contactara en caso de que seas aceptado para ser su
                        nuevo dueño
                    </div>
                </div>
            </div>
        </div>
        <!-- Detail End -->
    </div>
    <x-layouts.footer />
</x-layouts.app>
