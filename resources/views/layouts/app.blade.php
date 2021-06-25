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
                
                <div class="w-100" style="">
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
                    <ul class="navbar-nav ml-auto mr-5">
                         <li class="nav-item dropdown">
                             <a href="#" id="navbarDropdown_t" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre><i class="far fa-user text-dark"></i></a>
                             
                             <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                                    
                                <a class="dropdown-item" href="{{ route('user.show',Auth::user()->id) }}">
                                    <i class="far fa-user-circle"></i>  プロフィール
                                </a>
                                <a class="dropdown-item" href="{{ route('postItem.create') }}">
                                    <i class="fas fa-camera-retro"></i>  投稿する
                                </a>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i>  ログアウトする
                                </a>
                
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                
                            </div>
                            
                         </li>
                         
                    </ul>
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
