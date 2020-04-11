<!doctype html>
<!-- include(app_path().'/includes/myconfig.php'); -->

<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100008897-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100008897-2');
</script>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Noma Integrated Technology">
    <meta name="description" content="A Community based social platform for top talents to be found in
    your area for no cv, student, part time, blue collar small jobs.
    .We help you find skilled talents and freelancers to solve your Digital, Enterrtainment, 
    Web, Plumbing, Electrical, Artistic, Fashion, Educational, Repair, Food, Cleaning, Design and all no
    cv jobs near you" >
    <meta name="keywords" content=" websites for, do part time job,    online jobs for students, part time jobs,    part time jobs near me,  online part time jobs,    part time,    student jobs,    casual jobs available,    jobs hiring near me part time no experience,    career for arts students,
    science tutor jobs near me,    casual jobs,    weekend jobs near me,    freelance sites,
    freelancer,    freelance writing,    freelancing websites,  
    article writing,    application letter for teacher,    job application letter for teacher,    application letter for the post of a teacher,
    writing jobs,    jobs under art course,    online writing jobs,    graphic design jobs,    content writing jobs,
    freelance writing jobs,     graphic design jobs,    design engineer,    security guard,    cyber security jobs,
       photo shoot,    photography,    photo studio near me,    jobs for interior designers,    
    dog training,    seamstress,        careers in music,      web developer,    front end web developer,
    web design and development,    backend developer,    web programming, do part time job web sites,  photography jobs website,
    freelance writing website, article writing service, 
    "> 
    

    <!-- Scripts -->
    {{-- <script src="{{ asset('/assets/js/app.js') }}" defer></script> --}}
    
    <link href="https://fonts.googleapis.com/css?family=DM+Sans|Libre+Franklin|Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
       
    <link rel="stylesheet" type="text/css" id="css-main" href="/assets/css/codebase.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css" type="text/css">  
    <link rel="icon" href="/assets/img/logo-crop.png" sizes="192x192" >
    <link rel="stylesheet" type="text/css" id="css-theme" href="/assets/css/earth.css">
    <link rel="icon" src="/assets/img/logo-crop.png" sizes="192x192" >
    
  <title>  @yield('title') </title>
</head>
<body>
    {{-- <div id="app">  --}}
        {{-- bg-white shadow-sm --}}
      {{-- <nav class="navbar navbar-expand-md navbar-light justify-content-between" style="
      background-color: #008000;">
          <div class="container">
              <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="assets/img/small-jobs-logo.svg" alt="" width="130" height="130">
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
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('registration') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                        	 @else
                          <li class="nav-item dropdown" style="color:white">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" style="color: white;" v-pre>
                                  {{ Auth::user()->username }} <span class="navbar-toggler-icon" style="color:white"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                                  class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav> --}}
      

      {{-- <main class="py-4">
          
           
          
     
    </main> --}}
   
  {{-- </div> --}}
  
        @yield('content')
        {{-- <footer style="position: fixed" class="footer"> <a target="_new"href="https://nomatechnology.com"> Noma Technology  &#169; 2016 </a> </footer> --}}
        <script src="/assets/js/codebase.core.min.js"></script>
        <script src="/assets/js/codebase.app.min.js"></script>
        <script src="/assets/js/codebase/app.js"></script>
        <!-- Page JS Code -->
        
        <script>
           jQuery(function () {
            Codebase.helpers('table-tools');
        });
        </script>
    </body>

  

</html>