<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        
        
        <!-- Scripts -->
        @vite(['resources/js/app.js'])
    </head>
    <body class="font-sans antialiased" id="app">
        <div class="container-fluid">
            <div class="row d-flex">
                
                <div class="sidebars ">
                    <h1 class="text-white p-2">BoolFolio</h1>
                    <hr class="text-white">
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <h4><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></h4>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <h4><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></h4>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
                <div class="navBar pt-4">
                    {{-- <nav>
                        <form action="">
                            <a href="#">HOME</a>
                            <a href="#">MENU</a>
                            <a href="#" class="pe-2">SETTINGS</a>
                            <input placeholder="Search" type="text" name="" id="">
                        </form>
                    </nav> --}}
                   


                    @yield('content')

                    

                </div>

            
            </div>
        </div>
    </body>
</html>