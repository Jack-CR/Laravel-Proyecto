<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('inicio.index') }}"><i class="bi bi-bootstrap"></i>
            Mercado Libre</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('inicio.index') }}"><i
                            class="bi bi-house-door-fill"></i> Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto.index') }}"><i class="bi bi-envelope-fill"></i>
                        Contacto</a>
                </li>

                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}"><i class="bi bi-folder-minus"></i> Mis
                            Productos</a>
                    </li>

                @endauth

            </ul>
            <form class="d-flex" action="{{ route('product.search', 'search') }}" method="GET">
                @csrf

                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    name="search">
                <button class="btn btn-outline-dark" type="submit">Buscar</button>

            </form>
        </div>
        @auth

            <ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-person-fill"></i>{{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('profile.show') }}"> <i
                                    class="bi bi-person-fill"></i>Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ route('dashboard') }}"><i
                                    class="bi bi-folder-minus"></i> Mis Productos</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"></a>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger m-3">Cerrar Sessión</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>

        @else

            <div class="p-3">
                <a name="" id="" class="btn btn-warning" href="{{ route('login') }}" role="button">Login</a>
                <a name="" id="" class="btn btn-success" href="{{ route('register') }}"
                    role="button">Registrarse</a>
            </div>

        @endauth

    </div>
</nav>