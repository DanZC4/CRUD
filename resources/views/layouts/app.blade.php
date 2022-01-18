<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="/js/app.js"></script>
</head>

<body>
    <div id="app">
        <nav class="bg-green-600 text-white font-bold text-xl">
            <div class="flex ">
                <div class="">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="flex ">
                        <!-- Authentication Links -->

                        <li class="flex items-center hover:bg-green-500 duration-150">
                            <a class="p-4" href="{{ url('/') }}">
                                Home
                            </a>
                        </li>
                        <li class="flex items-center hover:bg-green-500 duration-150">
                        
                                <a class="p-4" href="{{ route('contactanos.index') }}">Contact Us</a>
                           
                        </li>


                        @guest
                            @if (Route::has('login'))
                                <li class="flex items-center hover:bg-green-500 duration-150">
                                    <a class="p-4" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="flex items-center hover:bg-green-500 duration-150">
                                    <a class="p-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="flex items-center hover:bg-green-500 duration-150">


                       
                                    <a class="p-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                        
                            </li>
                        @endguest
                        <li class="flex items-center hover:bg-green-500 duration-150">
                            <a id="navbarDropdown" class="p-4" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name ?? 'CRUD' }}
                            </a>
                        </li>

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
