<!DOCTYPE html>
<html>
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
    

    <!-- STYLESHEET -->
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- icon -->
    <link rel="stylesheet" type="text/css" id="css-main" href="/assets/css/codebase.min.css">
    <link rel="stylesheet" href="/assets/fonts/icons/main/mainfont/style.css">
    <link rel="stylesheet" href="/assets/fonts/icons/font-awesome/css/font-awesome.min.css">
    <!-- Vendor -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap-grid.css">
    <!-- Custom -->
    <link rel="stylesheet" href="/assets/css/forum-style.css">
    <link rel="icon" href="/assets/img/logo-crop.png" sizes="192x192" >
    <title>  @yield('title') </title>
</head>
<body>
    <header>
        <div class="header js-header js-dropdown">
            <div class="container">
                <div class="header__logo">
                    <a href="/"> <img src="/assets/img/small-jobs-logo.svg" alt="" width="130" height="130"></a>
                   
                    
                    
              
                </div>
                <div class="header__search">
                    <form action="#">
                        <label>
                            <i class="icon-Search js-header-search-btn-open"></i>
                            <input type="search" placeholder="Search all forums" class="form-control">
                        </label>
                    </form>
                  
                </div>
            
                <div class="header__notification">
                    {{-- <ol> --}}
                        @guest
                        <p class="nav-item">
                             <a style="color:white;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                         </p>
                     @if (Route::has('register'))
                         <p class="nav-item">
                             <a style="color:white;" class="nav-link" href="{{ route('registration') }}">{{ __('Register') }}</a>
                         </p>
                    {{-- </ol> --}}
              
         
                 @endif
                 @else


                    <div class="header__notification-btn" data-dropdown-btn="notification">
                        
                        <p class="dropdown-item" style="color:white"> {{ Auth::user()->username }}</p>
                        
                        <i class="icon-User"></i>
                        
                        <span>6</span>
                        
                    </div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                        
                        <div>
                            
                            <a class="dropdown-item" href="{{url('/user/publicprofile')}}">
                                
                                <i class="si si-user mr-5"></i> Profile
                            </a>
                            <a class="dropdown-item" href="{{url('/user/home')}}">
                                <i class="si si-home mr-5"></i> Home
                            </a>
                           
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('/user/chat')}}">
                                <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                <span class="badge badge-primary">1</span>
                            </a>
                        <a class="dropdown-item" href="{{url('/forumtopics')}}">
                                <i class="si si-note mr-5"></i> Forums
                            </a>
                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="{{url('/user/profile')}}" data-toggle="layout" data-action="side_overlay_toggle">
                                <i class="si si-wrench mr-5"></i> Update Profile
                            </a>
                           
                            
                        </div>
                    </div>
                
                </div>
                @endguest
              
             
             
            </div>
            
        </div>
    </header>
  <main>
   
    @yield('main')
      </main> 
      <script src="/assets/js/codebase.core.min.js"></script>
      <script src="/assets/js/codebase.app.min.js"></script>
      <script src="/assets/js/codebase/app.js"></script>
    
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/velocity.min.js"></script>
        
        <script src="/assets/js/forum-app.js"></script>
</body>
</html>