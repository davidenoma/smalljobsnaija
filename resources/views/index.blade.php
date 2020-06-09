@extends('layouts.dashboardmaster')

@section('title')
SmallJobsNaija: Find talents for small jobs near you
@endsection

@section('content')
    <div id = "page-container" class="page page-header-fixed page-header-glass main-content-boxed">
    
    <header id="page-header" style="background-color: #008000;">
        <div class="content-header">
            <div class="content-header-section">
     
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/assets/img/small-jobs-logo.svg" alt="" width="100" height="100">
                </a>            
        
        </div>
        <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group" >
        
                  
                   <a href="/login">   <button type="button" class="btn btn-rounded btn-noborder btn-outline-primary min-width-125"> <h3 style="color:white">Login</h3></button></a>
                <a href="/registration">   <button type="button" class="btn btn-rounded btn-noborder btn-outline-primary min-width-125"><h3 style="color:white">Register</h3></button></a>
                  
                    <button type="button" class="btn btn-rounded btn-noborder btn-outline-warning min-width-125"><h3 style="color:yellow">Post a Job</h3> </button>
                
              
            </div>
            

            <!-- Notifications -->
            <div class="btn-group" role="group">
                
            </div>
            

         
        </div>
        </div>
      

    </header>
    
    <main id="main-container" style="background-image: url(/assets/img/austin-d-72XZgeY3IY4-unsplash.jpg)">
        <div class="content"  >
            <div class="hero-wrapper">
                <form class="hero-form form" method="GET" action="/search"  >
                    @csrf
            
                     
                            <div class="page-title" style="padding-top: 100px;padding-bottom: 20px">
                                <div class="container">
                                    <h1 class="center" style="color:white">
                                        Find Top talents for Small Jobs near you!
                                        
                                    </h1>
                                    
                                </div>
                             
                            </div>
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            {{-- <label for="what" class="col-form-label" style="color:white">Find</label> --}}
                                            <input name="talent" type="text" class="form-control" id="what" placeholder="Talent, Skill or Craft">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-6-->
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            {{-- <label for="input-location" class="col-form-label" style="color:white">Your Area</label> --}}
                                            <input name="location" type="text" class="form-control" id="input-location" placeholder="Your Location ">
                                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                               
                                  
                              
                                    
                                    </div>
                                    <div class="clear-fix"> <br><br></div>
                                    <div class="form-row">
                                        <div class="col-md-3 col-sm-3"> </div>
                                        <div class="col-md-6 col-sm-6 center">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-rounded btn-primary width-100" > <h3 style="color:yellow">Search</h3></button>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-3 col-sm-3"> </div>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                
                    </form> 
            </div>
          
           
        </div>

    </main>
    <section class="content" style="background-color: white">
        <section class="block">
            <div class="container">
             
                <div class="row justify-content-center">
                   
                    <div class="col-md-4">
                        <form class="form clearfix" method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="form-group">
                                
                                <input class="form-control {{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                type="text" id="name" value="{{ old('username') ?: old('email') }}" 
                                 placeholder="E-mail Address/Phone" name="name" required >
                                 @error('username')
                                 <span 
                                 class="invalid-feedback" role="alert">
                                      <strong >{{ $message }}</strong>
                                  </span>
                                 @enderror
                                 @error('email')
                                 <span class="invalid-feedback" role="alert" >
                                      <strong>{{ $message }}</strong>
                                  </span>
                                 @enderror

                            </div>
                            
                            <div class="form-group">
                                
                                <input class="form-control" id="password" @error('password') is-invalid @enderror  type="password" name="password" placeholder="Password" required>
        
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-baseline">
                                <label>
                                    <input type="checkbox" name="remember" value="1">
                                    Remember Me
                                </label>
                                <a href="/registration "> Register </a>
                               
                                
                                <button type="submit" class="btn btn-primary ">Sign In</button>
                            </div>
                        </form>
                        <a href="/employer/login"><button class="btn btn-warning center " type="button">Employer Sign In</button></a>
                        <hr>
                        <p>
                            Forgot Password? <a href="/reset" class="link">Reset Password</a>
                        </p>
                       
                    </div>
                    <!--end col-md-6-->
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>
        
        

        
    






</div>
  
     
    
    <footer class="footer" style="background-color: white; color: #008000;padding-top: 0">
        <div class="wrapper">
            <div class="container" style="color:#008000;padding-top:0">
                <div class="row" >
                    <div class="col-md-4 center" style="color:#008000;padding-top:0">
                        <a href="#" class="brand">
                            <img src="assets/img/logo-crop.png" alt="" height="100px" width="100px">
                        </a>
                        <p style="color:#008000;opacity:100"> 
                            We help you find talents for small jobs near you. 
                            <br> 
                            <br>
                            Small Jobs helps to showcase and find talents for jobs near you like writing, styling, 
                            painting, designing, teaching and others.
                            <br> 
                            <br>
                            Find Talents and Post Jobs for free
                          
                        </p>
                    </div>
                    <!--end col-md-5-->
                    <div class="col-md-4 center" style="color:#008000;opacity:100" >
                        <h2>Navigation</h2>
                   
                                <nav>
                                    <ul class="list-unstyled" style="color:#008000;padding-top:0;opacity:100">
                                        <li>
                                            <a style="color:#008000" href="/">Home</a>
                                        </li>
                                         <li>
                                            <a style="color:#008000" href="/forumtopics">Forums</a>
                                        </li>
                                        <li>
                                            <a style="color:#008000" href="/blog">Blog</a>
                                        </li>
                                        <li>
                                            <a style="color:#008000" href="/faqs">Frequently Asked Questions</a>
                                        </li>
                                        <li>
                                            <a style="color:#008000" href="/termsofservice">Terms of Service</a>
                                        </li>
                                        <li>
                                            <a style="color:#008000" href="/privacypolicy">Privacy Policy</a>
                                        </li>
                                       
                                       
                                    </ul>
                                </nav>                    
                    </div>
                    <!--end col-md-3-->
                    <div class="col-md-4 center" >
                        <h2>Social Links</h2>
                        
                        <a href="https://facebook.com/nomatechnology" style="color:#008000;"><i class="fa fa-facebook-official fa-3x " aria-hidden="true"></i></a></i>
                         <a href="https://instagram.com/nomatechnology" style="color:#008000;"> <i class="fa fa-instagram fa-3x  "></i></a>
                        <a href="https://twitter.com/smalljobsnaija" style="color:#008000;"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></i>
                                                    <address>
                            <figure>
                                <a href="https://nomatechnology.com" style="color:#008000;"> Noma Integrated Technology Solutions</a>
                               <br>
                                <i class="fa fa-copyright" aria-hidden="true"></i>2016
                            </figure>
                            
                            
                            <strong>Email:</strong> <a href="mailto:admin@smalljobsnaija.com " style="color:#008000;">admin@smalljobsnaija.com</a>
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
@endsection

