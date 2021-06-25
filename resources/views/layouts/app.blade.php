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
</head>
<body>
    <div id="app">
        
        @auth
        <nav class="navbar navbar-expand-md navbar-light bg-white w-50 mx-auto mt-3 border-bottom pb-3">
            <div class="container ">
                
                <div class="w-100" style="margin-left:230px;">
                    <a class="navbar-brand" href="{{ url('/postItem') }}">
                        <img src="{{asset('img/logo_02.png')}}" class="rounded" alt="..." style="width:120px;height:50px;">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!--<ul class="navbar-nav mr-auto">-->

                    <!--</ul>-->

                    <!-- Right Side Of Navbar -->
                    <!--<ul class="navbar-nav ml-auto">-->
                        <!-- Authentication Links -->
                    <!--    @guest-->
                    <!--        <li class="nav-item">-->
                    <!--            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>-->
                    <!--        </li>-->
                    <!--        @if (Route::has('register'))-->
                    <!--            <li class="nav-item">-->
                    <!--                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>-->
                    <!--            </li>-->
                    <!--        @endif-->
                    <!--    @else-->
                            
                    <!--    @endguest-->
                    <!--</ul>-->
                </div>
            </div>
        </nav>
        @endauth

        <main class="w-50 mx-auto bg-white ">
            @yield('content')
        </main>
    </div>
</body>
</html>
