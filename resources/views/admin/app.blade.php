<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--  Favicon icon -->
    <link rel="icon" href="{{ asset('assets/img/app-logo.png') }}" type="image/x-icon">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm w-75 m-auto">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user"></i>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('users.profile.index') }}">
                                        {{ __('Profile') }}
                                    </a>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 row justify-content-center col-lg-10 m-auto">

            @auth()
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card">
                                <div class="card-header {{!auth()->user()->isAdmin ? 'invisible' : ''}} ">
                                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                            <ul class="navbar-nav">
                                                <li class="nav-item fw-bold {{ \Request::route()->getName() === 'admin.users.index' ? 'border-bottom border-dark' : '' }}">
                                                    <a class="nav-link" role="button" href="{{route('admin.users.index')}}">{{__('Users')}}</a>
                                                </li>
                                                <li class="nav-item fw-bold {{ \Request::route()->getName() === 'admin.products.index' ? 'border-bottom border-dark' : '' }}">
                                                    <a class="nav-link" role="button" href="{{route('admin.products.index')}}">{{__('Products')}}</a>
                                                </li>
                                                <li class="nav-item fw-bold {{ \Request::route()->getName() === 'admin.commands.index' ? 'border-bottom border-dark' : '' }}">
                                                    <a class="nav-link" role="button" href="{{route('admin.commands.index')}}">{{__('Commands')}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    <a class="btn btn-primary float-end {{(\Request::route()->getName() === 'admin.products.create' or !auth()->user()->isAdmin) ? 'invisible' : ''}}" role="button" href="{{route('admin.products.create')}}">{{__('New Product')}}</a>
                                    </nav>
                                </div>
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="card-body">
                    @yield('content')
                </div>
            @endauth

        </main>
    </div>
</body>
</html>
