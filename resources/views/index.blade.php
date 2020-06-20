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
    <div class="background">
        <div class="background-image">
            <img src="" alt="">
        </div>
        <!--end background-image-->
    </div>
    <main id="main-container" style="background-image: url(/assets/img/small-jobs-background.jpg)">
        <div class="content"  >
            <div class="hero-wrapper">
                <form class="hero-form form" method="GET" action="/search"  >
                    @csrf
            
                     
                            <div class="page-title" style="padding-top: 100px;padding-bottom: 20px">
                                <div class="container">
                                    <h1 class="center" style="color:#008000;background-color: white">
                                        Find Top talents for Small Jobs near you!
                                        
                                    </h1>
                                    
                                </div>
                             
                            </div>
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            {{-- <label for="what" class="col-form-label" style="color:white">Find</label> --}}
                                            <input name="talent" type="text" class="form-control" id="what" placeholder="Enter Talent, Skill or Craft">
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
                                                <button type="submit" class="btn btn-rounded btn-primary width-100" > <h3 style="color:white">Search</h3></button>
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
       
      
        {{-- <section class="content" style="background-color: white">
            <div class="container">
                <h2 class="center">Find Talents in Categories</h2>
                <br>
                <ul class="categories-list clearfix">
                   
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-pets-b.png" alt="">
                        </i>
                        <h3><a href="#">Pets</a></h3>
                        <div class="sub-categories">
                            <a href="#">Dogs</a>
                            <a href="#">Cats</a>
                            <a href="#">Exotic</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-real-estate-b.png" alt="">
                        </i>
                        <h3><a href="#">Real Estate</a></h3>
                        <div class="sub-categories">
                            <a href="#">Houses</a>
                            <a href="#">Apartments</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-jobs-b.png" alt="">
                        </i>
                        <h3><a href="#">Jobs</a></h3>
                        <div class="sub-categories">
                            <a href="#">Find Job</a>
                            <a href="#">Offer Job</a>
                        </div>
                    </li>
                    <!--end category item-->

                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-cars-b.png" alt="">
                        </i>
                        <h3><a href="#">Car</a></h3>
                        <div class="sub-categories">
                            <a href="#">New</a>
                            <a href="#">Used</a>
                            <a href="#">Rent</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-mobile-b.png" alt="">
                        </i>
                        <h3><a href="#">Mobile</a></h3>
                        <div class="sub-categories">
                            <a href="#">Apple</a>
                            <a href="#">Samsung</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-cameras-b.png" alt="">
                        </i>
                        <h3><a href="#">Cameras</a></h3>
                        <div class="sub-categories">
                            <a href="#">Photo</a>
                            <a href="#">Video</a>
                            <a href="#">Lenses</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-sport-b.png" alt="">
                        </i>
                        <h3><a href="#">Sport</a></h3>
                        <div class="sub-categories">
                            <a href="#">Ski</a>
                            <a href="#">Bike</a>
                            <a href="#">Hockey</a>
                        </div>
                    </li>
                    <!--end category item-->

                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-electro-b.png" alt="">
                        </i>
                        <h3><a href="#">Electro</a></h3>
                        <div class="sub-categories">
                            <a href="#">TV</a>
                            <a href="#">Radio</a>
                            <a href="#">PC</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-clothing-b.png" alt="">
                        </i>
                        <h3><a href="#">Clothing</a></h3>
                        <div class="sub-categories">
                            <a href="#">Shirts</a>
                            <a href="#">Trousers</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-books-b.png" alt="">
                        </i>
                        <h3><a href="#">Books</a></h3>
                        <div class="sub-categories">
                            <a href="#">Fantasy</a>
                            <a href="#">History</a>
                            <a href="#">Sci-Fi</a>
                        </div>
                    </li>
                    <!--end category item-->
                    <li>
                        <i class="category-icon">
                            <img src="assets/icons/category-music-b.png" alt="">
                        </i>
                        <h3><a href="#">Music</a></h3>
                        <div class="sub-categories">
                            <a href="#">Rock</a>
                            <a href="#">Techno</a>
                            <a href="#">Folk</a>
                        </div>
                    </li>
                    <!--end category item-->
                </ul>
                <!--end categories-list-->
            </div>
            <!--end container-->
        </section>
        --}}

    
    <section class="content" style="background-color: white">
        <section class="">
            <div class="container">
             
                <div class="row justify-content-center">
                   
                    <div class="col-md-5">
                        <form class="form clearfix" method="POST" action="{{ route('login') }}" >
                            @csrf
                            <div class="form-group">
                                <h3>Login or Register</h3>
                                
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
                     <div class="col-md-5">
                        <a href="https://twitter.com/smalljobsnaija?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-size="large" data-show-count="false">Follow @smalljobsnaija</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        <br>
                        <a class="twitter-timeline" data-width="750" data-height="500" href="https://twitter.com/smalljobsnaija?ref_src=twsrc%5Etfw">Tweets by smalljobsnaija</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                     </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        
    </section>
    <section class="content center" style="background-color: white">

       
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
                                <a href="https://nomatechnology.com" style="color:#008000;" target="_new"> Noma Integrated Technology Solutions</a>
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

