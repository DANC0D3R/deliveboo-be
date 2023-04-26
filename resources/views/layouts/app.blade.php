<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ 'Deliveboo' }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">

        {{-- NAVBAR --}}
        <nav class="navbar navbar-expand-md navbar-light  shadow">
            <div class="container">
              
                {{-- Logo --}}
                <div class="logo fs-2 fw-bold d-flex align-items-center custom-color m-2 p-2" style="height:48px">
                    <i class="fa-solid fa-burger"></i>
                    DeliveBoo
                </div>
                    
                
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header">
                        {{-- <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5> --}}
                        @if (Auth::check())
                    <a class="navbar-brand d-flex align-items-center offcanvas-title" id="offcanvasNavbarLabel" href="{{ url('/dashboard') }}">
                        <div class="logo fs-2 fw-bold d-flex align-items-center custom-color" style="height:48px">
                            <i class="fa-solid fa-burger"></i>
                            DeliveBoo
                        </div>
                        {{-- config('app.name', 'Laravel') --}}
                    </a>
                @else
                    <a class="navbar-brand d-flex align-items-center offcanvas-title" id="offcanvasNavbarLabel" href="{{ url('/') }}">
                        <div class="logo fs-2 fw-bold d-flex align-items-center custom-color" style="height:48px">
                            <i class="fa-solid fa-burger"></i>
                            DeliveBoo
                        </div>
                        {{-- config('app.name', 'Laravel') --}}
                    </a>
                @endif
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                      </div>

                    <!-- Left Side Of Navbar -->
                    <div class="offcanvas-body">


                        <ul class="navbar-nav ms-auto pe-5">
                            <li class="nav-item">
                                @if (Auth::check())
                                    @if(Auth::user()->role === 'admin')
                                        <a class="nav-link custom-color" href="{{ url('admin/dashboard') }}">{{ __('Account') }}</a>
                                    @else
                                        <a class="nav-link custom-color" href="{{ url('admin/restaurants') }}">{{ __('Vai al tuo Ristorante') }}</a>
                                    @endif
                                @endif
                            </li>
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link orange-color link" href="{{ route('login') }}">
                                        <i class="fa-solid fa-user"></i>
                                        <strong> {{ __('Accedi') }} </strong>
                                    </a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link orange-color link"
                                            href="{{ route('register') }}">
                                            <strong> {{ __('Registrati') }} </strong> 
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown custom-color">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle custom-color" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                    @if (Auth::user()->role === 'admin')
                                    {{-- Dropdow super admin --}}
                                    <div class="dropdown-menu dropdown-menu-right custom-color" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item custom-color" href="{{ url('admin/dashboard') }}">{{ __('Account') }}</a>
                                        <a class="dropdown-item custom-color" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Esci') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    
                                    
                                    @else
                                    <div class="dropdown-menu dropdown-menu-right custom-color" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item custom-color" href="{{ url('admin/dashboard') }}">{{ __('Account') }}</a>
                                        <a class="dropdown-item custom-color" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Esci') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                    @endif
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>

</html>

<style scoped>
.orange-color{
    color: #8f4a00;
}
   
</style>