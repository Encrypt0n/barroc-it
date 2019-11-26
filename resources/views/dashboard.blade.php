<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Barroc Intens</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light home-header">
        <div class="container">
            <a class="navbar-brand header-logo-container" href="{{ url('/') }}">
                <img class="header-logo" src="{{ asset('storage/img/Logo5_groot_cutout.png') }}" alt="logo5_groot">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav nav-pills header-navbar">
                    <li class="nav-item">
                        <a class="nav-link header-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                    </li>
                    <!-- Authentication Links -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" class="logout-button" value="Uitloggen">
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="sidebar-menu">
            <div class="sidebar-menu-container">
                {{-- Sales --}}
                @if (Auth::user()->role == 3)
                    <a class="dashboard-link" href="{{ route('createQuotation.create') }}">Prijsopgave aanmaken</a>
                    <div class="yellow-splitter-line"></div>
                @endif
                {{-- Klant --}}
                @if (Auth::user()->role == 0)
                    <a class="dashboard-link" href="{{ route('failureRequest.create') }}">Storing melding</a>
                    <div class="yellow-splitter-line"></div>
                @endif
                {{-- Finance --}}
                @if (Auth::user()->role == 1)
                    <a class="dashboard-link" href="{{ route('reviewQuotation.index') }}">Offerte overzicht</a>
                    <div class="yellow-splitter-line"></div>
                @endif

                {{-- Maintenance--}}
                @if (Auth::user()->role == 2)
                    <a class="dashboard-link" href="{{ route('jobTicket.create') }}">Werkbon aanmaken</a>
                    <div class="yellow-splitter-line"></div>
                    <a class="dashboard-link" href="{{ route('failureRequest.index') }}">Storings meldingen</a>
                @endif


            </div>
        </div>
        <div class="dashboard-content">
            @yield('content')
        </div>
    </main>
</body>
</html>
