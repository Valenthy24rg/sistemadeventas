<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content=" {{csrf_token()}} ">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="//https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">


        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Left Side Of Navbar -->

                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side of NavBar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('departments.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('departments.index') }}">{{ __('Department') }}</a>
                            </li>
                        @endif
                        @if (Route::has('cities.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cities.index') }}">{{ __('City') }}</a>
                            </li>
                        @endif
                        @if (Route::has('categories.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.index') }}">{{ __('Category') }}</a>
                            </li>
                        @endif
                        @if (Route::has('providers.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('providers.index') }}">{{ __('Provider') }}</a>
                            </li>
                        @endif
                        @if (Route::has('products.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('products.index') }}">{{ __('Product') }}</a>
                            </li>
                        @endif
                        @if (Route::has('employees.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employees.index') }}">{{ __('Employee') }}</a>
                            </li>
                        @endif
                        @if (Route::has('clients.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('clients.index') }}">{{ __('Client') }}</a>
                            </li>
                        @endif

                        @if (Route::has('bills.index'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('bills.index') }}">{{ __('Bill') }}</a>
                            </li>
                        @endif
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"> {{__('Login')}} </a>
                            </li>
                        @endif

                        @if (Route::has('register-user'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register-user') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown"></li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
