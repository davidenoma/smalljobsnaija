<!DOCTYPE html>
{{-- This utilizes the markup from craigs list template --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100008897-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100008897-2');
</script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Scripts -->
    {{-- <script src="{{ asset('/assets/js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Libre+Franklin|Montserrat&display=swap" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" id="css-main" href="/assets/css/codebase.min.css"> --}}
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" type="text/css">  
    <link rel="stylesheet" href="/assets/css/style.min.css">
  
    {{-- <link rel="stylesheet" href="/assets/css/selectize.css" type="text/css"> --}}

    <link rel="stylesheet" href="/assets/fonts/font-awesome.css" >
    <link rel="stylesheet" href="/assets/css/user.min.css" type="text/css">
    <script src="/assets/js/jquery.min.js"></script>
    <link rel="icon" href="/assets/img/logo-crop.png" sizes="192x192" >
    <script data-ad-client="ca-pub-1334157382323517" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    
        <title>@yield('title')</title>
</head>
<body>
    <div id="app"> 
          {{-- bg-white shadow-sm --}}
        <nav class="navbar navbar-expand-md navbar-light justify-content-between" style="
        background-color: #008000;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                     <img src="/assets/img/small-jobs-logo.svg" alt="" width="130" height="130">
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
                            <li class="nav-item">
                                <a style="color:white;" class="nav-link" href="{{ route('login') }}" >{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a style="color:white;" class="nav-link" href="{{ route('registration') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
{{-- 
        <main class="py-4">
            @yield('content')
        </main> --}}
    </div>
    @yield('content')
   
    <script src="/assets/js/codebase.core.min.js"></script>
    <script src="/assets/js/codebase.app.min.js"></script>
    <script src="/assets/js/be_comp_rating.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBp8XdPDEu9dRjuZQRfgIFyPBRMLm5JcOE&libraries=places"></script>
    <script src="/assets/js/jquery-raty/jquery.raty.js"></script>
    <script>
        var searchInput = 'search_input';
      
        $(document).ready(function(){
      var autocomplete;
      autocomplete = new google.maps.places.Autocomplete((document.getElementById('location')),{
        types : ['geocode'],
        
      })
      autocomplete.setComponentRestrictions(
                  {'country': ['ng']});
        });
      </script>
    
</body>
</html>
