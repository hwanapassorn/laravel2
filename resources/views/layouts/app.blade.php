<!DOCTYPE html>
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
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <div class="container">
                      <a class="navbar-brand" href="#">Start Bootstrap</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                              <span class="sr-only">(current)</span>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                          </li>



                          @if (Route::has('login'))

                              @auth
                                  <a class="nav-link" href="{{Auth::logout() }}">logout</a>
                              @else
                                   @if (Route::has('register'))
                              <li class="nav-item">
                                  <a  class="nav-link" href="{{ route('login') }}">Login</a>
                              </li>


                                  <li class="nav-item">
                                      <a class="nav-link" href="{{ route('register') }}">Register</a>
                                  </li>
                                  @endif
                              @endauth

                      @endif

          <body>
                        </ul>
                        <span class="navbar-text">
                              Navbar text with an inline element
                            </span>
                      </div>
                    </div>
                  </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
