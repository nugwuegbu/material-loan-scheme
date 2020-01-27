<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Payhomes') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img class="img-responsive" src="{{ asset('img/logo2.png') }}" alt="Payhomes logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                           
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-info btn-lg" href="{{ route('register') }}">{{ __('Join') }}</a>
                                </li>
                            @endif
                             <li class="nav-item">
                                <a class="nav-link btn btn-lg btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-info dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
    @if(Auth::user())        
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container-fluid">
                        <div class="row clearfix">
                            <div class="col-md-4">
                               <div class="list-group">
                                  <a href="{{ route('home')}}" class="list-group-item list-group-item-action active">
                                    Main
                                  </a>
                                  <a href="#" class="list-group-item list-group-item-action">My Payments</a>
                                  <a href="{{ route('loans.index') }}" class="list-group-item list-group-item-action">My Applications</a>
                                  <a href="#" class="list-group-item list-group-item-action">Feedback</a>
                                  <a href="/documents/" class="list-group-item list-group-item-action">My Documents</a>
                                  <a href="" class="list-group-item list-group-item-action">Settings</a>
                                  <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault();   document.getElementById('logout-form').submit();">Sign Out
                                  </a>
                                </div>
                            </div>
                            @endif
            @yield('content')
        </main>
    </div>
</body>
</html>

