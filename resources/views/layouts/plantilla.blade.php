<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('bootstrap-5.0/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title')</title>
</head>
<body>
    <div class="header">
        @yield('header')
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="{{route('inicio.index')}}">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('inicio.index')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contacto.index')}}">Contacto</a>
                  </li>
                  
                  @auth

                     <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}">Mis Productos</a>
                  </li>

                  @endauth
                 
                </ul>
                <form class="d-flex" action="{{route('product.search','search')}}" method="GET">
                  @csrf

                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                  <button class="btn btn-outline-success" type="submit">Buscar</button>

                </form> 
              </div>
              @auth
               
                 <ul>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{route('profile.show')}}">Perfil</a></li>
                        <li><a class="dropdown-item" href="{{route('dashboard')}}">Mis Productos</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"></a>
                          <form action="{{route('logout')}}" method="post">
                              @csrf
                              <button type="submit" class="btn btn-danger m-3">Cerrar Sessión</button>
                          </form>
                        </li>
                      </ul>
                    </li> 
                 </ul>
                 
                @else

                  <div class="p-3">
                  <a name="" id="" class="btn btn-primary " href="{{route('login')}}" role="button">Login</a>
                  <a name="" id="" class="btn btn-primary p-" href="{{route('register')}}" role="button">Registrarse</a>
                </div>

              @endauth
              
            </div>
          </nav>
    </div>

    <div class="container">
        @yield('container')
    </div>

    <div class="footer">
        @yield('footer')
    </div>

    <script src="{{asset('bootstrap-5.0/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>