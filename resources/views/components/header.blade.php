{{-- fixed top-0 right-0 px-6 py-4 sm:block --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo/gth.png') }}" class="logo-gth " alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                @if (Route::has('login'))

                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link active" aria-current="page">Home</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Iniciar sesión</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Registro</a>
                            </li>
                        @endif
                    @endauth
                @endif

            </ul>


            <div class="d-flex mr-auto justify-content-end">

            </div>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn  btn-gth-blue my-2 my-sm-0" type="submit">Search</button>
            </form>

        </div>
    </div>
</nav>
