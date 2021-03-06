<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

    <!-- Animate Css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <div id="app">
        

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <nav class="navbar navbar-light bg-light">
                    <div class="container">
                      <a class="navbar-brand" href="#">
                        <img src="https://www.fisu.net/medias/images/fisu_logo_2020_color_square.png?v=52" alt="logo" width="50" height="40">
                      </a>
                    </div>
                  </nav>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('shop') ? 'active' : '' }}" href="{{route('shop')}}">Shop</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('about') ? 'active' : '' }} href="{{route('about')}}">About Us</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('contact') ? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a>
                          </li>
                          @if(auth()->user() && auth()->user()->role == "Admin")
                          <li class="nav-item">
                            <a class="nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                          </li>
                          @endif
                          
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteNamed('login') ? 'active' : '' }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link {{ Route::currentRouteNamed('register') ? 'active' : '' }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <div class="ico">
                                    <li class="nav-item mr-2">
                                        <a href="{{route('carts.index')}}" class="nav-link nav-icons {{ Route::currentRouteNamed('carts.index') ? 'active' : '' }}"><i class="fab fa-opencart"></i></a>
                                    </li>
                                    <div class="num">
                                        {{  App\Models\Cart::where('user_id','=',auth()->user()->id)->count() }}
                                    </div>
                                </div>

                                <div class="ico">
                                    <li class="nav-item mr-2">
                                        <a href="/favroites" class="nav-link nav-icons {{ (request()->is('/favroites')) ? 'active' : '' }}"><i class="far fa-heart"></i></a>
                                    </li>
                                    {{-- <div class="num">
                                        {{  App\Models\Favroite::where('user_id','=',auth()->user()->id)->count() }}
                                    </div> --}}
                                </div>
                                
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="" class="dropdown-item ">Profile</a>

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

        <main>
            @yield('content')
        </main>
    </div>

    <footer>
        <div class="container-fluid bg-dark">
            <div class="container pt-4 pb-4">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="footer-heading">Categories</h3>
                        <ul class="navbar-nav">
                            <li class="nav-item mb-2"> <a href="" class="foot-link">All</a></li>
                            <li class="nav-item mb-2"> <a href="" class="foot-link">Mens</a></li>
                            <li class="nav-item mb-2"> <a href="" class="foot-link">Womens</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="footer-heading">Help</h3>
                        <ul class="navbar-nav">
                            <li class="nav-item mb-2"> <a href="" class="foot-link">About</a></li>
                            <li class="nav-item mb-2"> <a href="" class="foot-link">Contact</a></li>
                            <li class="nav-item mb-2"> <a href="" class="foot-link">My Cart</a></li>
                            <li class="nav-item mb-2"> <a href="" class="foot-link">FAQs</a></li>

                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="footer-heading">Get In Touch</h3>
                        <p class="foot-info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima architecto sequi quibusdam quaerat 
                            repellendus debitis accusantium enim earum eaque provident officiis quia rerum similique voluptatibus, 
                            neque facere iusto fuga omnis.
                        </p>
                        <p>
                            <span class="mr-3"><a href="www.facebook.com" class="foot-social"><i class="fab fa-facebook"></i></a></span>
                            <span class="mr-3"><a href="" class="foot-social"><i class="fab fa-instagram" ></i></a></span>
                            <span><a href="" class="foot-social"><i class="fab fa-tiktok"></i></a></span>

                        </p>
                    </div>
                </div>
            </div>
            <div class="container d-flex justify-content-center">
                <p class="copy-section">
                    Copyright &copy; 2021 All rights reserved | Made By <a href="www.bitmapitsolutions.com">BITS</a>
                </p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/index.js') }}" defer></script>
</body>
</html>
