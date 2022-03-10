<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Perpustakaan</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-primary bg-primary">
            <h2 class="mt-1 warnagelap"><strong>Inixindo Bandung</strong></h2>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            </div>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <button><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></button>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <button><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> </button>
                        </li>
                    @endif
                @else
                <div class="navbar">
                    <li class="nav-item dropdown">
                        <a id="btn btn-primary" class="btn btn-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
                @endguest
            </ul>
        </nav>
                <div class="col kolom">
                    @yield('content')
                </div>
        </div>
    </body>
</html>
