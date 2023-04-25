
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fontawesome 6 cdn -->
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Usando Vite -->
        @vite(['resources/js/app.js'])
    </head>

    <body class="app">
        <div id="app">
        <div class="background-white">

            <header class="navbar sticky-top flex-md-nowrap p-2">
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Utente --}}
                <div class="nav-item dropdown custom-color px-2">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle custom-color" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    @if (Auth::user()->role === 'admin')
                    {{-- Dropdow super admin --}}
                    <div class="dropdown-menu dropdown-menu-right custom-color" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item custom-color" href="{{ url('dashboard') }}">{{ __('Pannello di controllo') }}</a>
                        <a class="dropdown-item custom-color" href="{{ url('profile') }}">{{ __('Profilo') }}</a>
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
                        <a class="dropdown-item custom-color" href="{{ url('dashboard') }}">{{ __('Pannello di controllo') }}</a>
                        <a class="dropdown-item custom-color" href="{{ url('profile') }}">{{ __('Profilo') }}</a>
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
                </div>

                {{-- Logo --}}
                <a class="navbar-brand col-md-3 col-lg-2 text-center" href="/">
                    <i class="fa-solid fa-burger"></i> <strong>Deliveboo</strong>
                </a>

                {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
                
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap ms-2 px-4">
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Esci') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </header>

            <div class="container-fluid vh-100">
                <div class="row h-100">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
                        <div class="position-sticky pt-4">
                            <ul class="nav flex-column">
                                <li class="nav-item">

                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.dashboard' ? 'active' : '' }}" href="{{route('admin.dashboard')}}">
                                        <i class="fa-solid fa-house"></i> Home
                                    </a>

                                    <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.restaurants.index' ? 'active' : '' }}" href="{{route('admin.restaurants.index')}}">
                                        <i class="fa-solid fa-building"></i> Il tuo ristorante
                                    </a>

                                    @php
                                        use App\Models\Restaurant;

                                        //Prendo l'id dell'user che è al momento loggato
                                        $user_id = auth()->user()->id;

                                        // Prendo i ristoranti
                                        $restaurants = Restaurant::all();
                                        
                                        // Inizializzo un avariabile flag
                                        $flag = false;

                                        // Per ogni ristorante, se lo user_id corrisponde all'id dell'utente autenticato (e quindi l'utente ha un ristorante associato), la flag diventa true
                                        foreach ($restaurants as $restaurant) {
                                            if ($restaurant->user_id == $user_id) {
                                                $flag = true;
                                            }
                                        }
                                    @endphp

                                    {{-- Se la flag è true, significa che l'utente autenticato ha un ristorante e, quindi, può avere accesso alle sezioni menù e ordini --}}
                                    @if ($flag == true)
                                        <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.foods.index' ? 'active' : '' }}" href="{{route('admin.foods.index')}}">
                                            <i class="fa-solid fa-utensils"></i> Menù
                                        </a>

                                        <a class="nav-link text-white {{ Route::currentRouteName() == 'admin.orders.index' ? 'active' : '' }}" href="{{route('admin.orders.index')}}">
                                            <i class="fa-solid fa-circle-check"></i> Ordini
                                        </a>
                                    @endif
                                </li>
                            </ul>


                        </div>
                    </nav>

                    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                        @yield('content')
                </div>
            </div>
        </div>
        </div>
    </body>

</html>
<style scoped>
    .app{
        background-color: #fff2ccc3;
        background-image: url('https://img.freepik.com/premium-vector/seamless-pattern-cute-funny-fast-food-kawaii-style-icons-isolated-pink-background_71374-1384.jpg?w=2000');
        /* background-image: url('https://i.pinimg.com/564x/b5/7d/ee/b57dee88a2914487905c8516f8df2a19.jpg'); */
        /* background-image: url('https://i.pinimg.com/564x/cf/f4/23/cff4237259e33904ab1a617e9d57603c.jpg'); */
        background-size: cover;
        
        background-blend-mode:screen;
    }
    .background-white{
        /* background-color: rgba(255, 255, 255, 0.3); */
    }

    /* Navbar */
    .navbar{
        background-color: #FFD966;
        color: black !important;
    }
    .sidebar{
        background-color: #FF8400;
        border-radius:0 0 50px 50px;
        height: 85%;
        align-self: flex-start
    }
    .active{
        background-color: #FFD966;
        border-radius: 15px;
        color: black !important;
    }
</style>
