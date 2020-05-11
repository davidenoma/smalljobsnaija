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
    <meta name="description" content="Quickly find top talents who search for jobs near me to meet your needs! " >
    <meta name="keywords" content="search for jobs, work for home, vacancy for job, google for jobs, online jobs for students,hot nigerian jobs, jobs near me, jobs in lagos, jobs in Nigeria,
    jobs near me, jobs in nigeria, online jobs, jobs, job vacancy, job openings near me jobs in dubai, career, jobs in canada, job hunting, 
    looking for a job, online jobs for teens, jobs for students, apply for jobs, apply for jobs online, post jobs for free, vacancy for teachers, earn money online without investment for students, jobs for writers, jobs for computer science, jobs for nurses, websites for jobs, 
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
    <footer class="footer" style="background-color: #008000;color:white;padding-top: 0">
        <div class="wrapper">
            <div class="container" style="color:white;padding-top:0">
                <div class="row" >
                    <div class="col-md-3" style="color:white;padding-top:0">
                        <a href="#" class="brand">
                            <img src="assets/img/logo-crop.png" alt="" height="100px" width="100px">
                        </a>
                        <p style="color:white;opacity:100;">
                            We help you find talents for small jobs near you. <br> 
                                We showcase and find talents for jobs near you like writing, stylists, 
                                painting, designing, teaching and others.
                          
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-5" style="color:white;opacity:100">
                        <h4>Navigation</h4>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <nav>
                                    <ul class="list-unstyled" style="color:white;padding-top:0">
                                        <li>
                                            <a style="color:white" href="/">Home</a>
                                        </li>
                                        <li>
                                            <a style="color:white" href="/about">About</a>
                                        </li>
                                        <li>
                                            <a style="color:white" href="/termsofservice">Terms of Service</a>
                                        </li>
                                        <li>
                                            <a style="color:white" href="/privacypolicy">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <a style="color:white" href="/faqs">Frequently Asked Questions</a>
                                        </li>
                                        <li>
                                            <a style="color:white" href="/forumtopics">Forums</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>

                           
                        </div>
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4" style="color:white;opacity:100">
                        <h4>Social Links</h4>
                        <i class="fa fa-facebook" aria-hidden="true"><a href="https://facebook.com/nomatechnology">Facebook</a></i>
                        <i class="fa fa-instagram" aria-hidden="true"> <a href="https://instagram.com/nomatechnology">Instagram</a></i>
                        <i class="fa fa-twitter" aria-hidden="true"><a href="https://twitter.com/smalljobsnaija">Twitter</a></i>
                                                    <address>
                            <figure>
                                <a href="https://nomatechnology.com"></a>
                                Noma Integrated Technology Solutions<br>
                                <i class="fa fa-copyright" aria-hidden="true"></i>2016
                            </figure>
                            
                            
                            <strong>Email:</strong> <a href="mailto:admin@smalljobsnaija.com">admin@smalljobsnaija.com</a>
                            <br>
                            
                          
                            
                        </address>
                    </div>
                    <!--end col-md-4-->
                </div>
                <!--end row-->
            </div>
           
            <!--end background-->
        </div>
    </footer>
      </main> 
      
      <script src="/assets/js/codebase.core.min.js"></script>
      <script src="/assets/js/codebase.app.min.js"></script>
      <script src="/assets/js/codebase/app.js"></script>
    
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/velocity.min.js"></script>
        
        <script src="/assets/js/forum-app.js"></script>
</body>
</html>