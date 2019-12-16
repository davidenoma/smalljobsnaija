@extends('master')

@section('title')
SmallJobsNaija- A platform to Find, Connect, and Showcase talents in your area 
@endsection

@section('styles')
    <style>
            #navbar{
                color: white;
            }
            .navbar-nav{
                color: white;
            }
            
        </style>
@endsection

@section('content')
    <div class="page home-page">
        <header class="hero">
            <div class="hero-wrapper">
            <div class="main-navigation">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                        <a class="navbar-brand" href="{{route('homepage')}}">
                            <img src="assets/img/small-jobs-logo.svg" alt="" width="150" height="150">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <!--Main navigation list-->
                            <ul class="navbar-nav" style="color: white;">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#" style="color: white; font-size: 16px;">Home</a>
                                    
                                </li>
                                <li class="nav-item " >
                                    <a class="nav-link" href="forums.html" style="color: white;">Forums</a>
                                    
                                
                                <li class="nav-item" >
                                    <a class="nav-link" href="about.html" style="color: white;">About</a>
                                </li>
                                <li class="nav-item" >
                                    <a class="nav-link" href="faqs.html" style="color: white;">FAQs</a>
                                </li>
                                <li class="nav-item" >
                                        <a class="nav-link" href="/blog" style="color: white;">Blog</a>
                                    </li>
                                
                            </ul>
                            <!--Main navigation list-->
                        </div>
                        <!--end navbar-collapse-->
                    </nav>
                    <!--end navbar-->
                </div> 
                <!--end container-->
            </div>

                <!--============ End Main Navigation ================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1 class="opacity-60 center ">
                            We all love searching for things, <br/><br/>
                            but Our passion is helping you find top Talents in your area!
                        </h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form">
                        <div class="container">
                            <!--Main Form-->
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="what" class="col-form-label">Find Talent:</label>
                                            <input name="keyword" type="text" class="form-control" id="what" placeholder="e.g. Plumber, Tailor, Writer, DJ, Programmer">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="input-location" class="col-form-label">Your Area:</label>
                                            <input name="location" type="text" class="form-control" id="input-location" placeholder="e.g. Covenant Uni, Ikeja, Rumuola,">
                                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                  
                                            <div class="form-group">
                                                    <label for="category" class="col-form-label">Distance near you:</label>
                                                    <select name="distance" id="distance"  data-placeholder="Distance" >
                                                        <option value="">Distance</option>
                                                        <option value="1">1km</option>
                                                        <option value="2">5km</option>
                                                        <option value="3">10km</option>
                                                        <option value="4">50km</option>
                                                        <option value="5">100km</option>
                                                    </select>
                                                </div>
                                       
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-primary width-100">Search</button>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end form-row-->
                            </div>
                            <!--end main-search-form-->
                            <!--Alternative Form-->
                            <div class="alternative-search-form">

                                </div>
                                <!--end collapse-->
                            </div>
                            
                        </div>
                        <!--end container-->
                    </form>                           
                    <!--============ End  Form ======================================================================-->
                <div class="background">
                    <div class="background-image">
                        <img src="assets/img/hero-background-image-01.jpg" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
    
    

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <!-- The new form body from the ioform login and register -->
        <section class="content">
              <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
    </section>
    
        <section>
        <div class="row">
                       
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                       
                        <div class="page-links">
                            <a href="" class="active">Login</a><a href="{{route('registration')}}">Register</a>
                        </div>
                        {{-- This is the form that handles login requests from the home page --}}
                        <form method="POST" action="{{ route('login') }}" >
                            @csrf
                       
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

                            <input class="form-control" id="password" @error('password') is-invalid @enderror  type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="/auth/facebook"><img src="assets/icons/icons8-facebook-64 (1).png" alt="" > </a> 
                            <a href="/auth/google"><img src="assets/icons/icons8-google-64.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          
        </section>
   


        <section class="content">
       
    
            <!--============  Steps =========================================================================-->
            <section class="block has-dark-background">
                <div class="container">
                    <div class="block">
                        <h2 style="text-align: center;">We care about helping people 
                            find talents to help solve their problem and render service so
                            Small Jobs is easy to use and its free!</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-user.png" alt="">
                                        <span>1</span>
                                    </figure>
                                    <h3>Create an Account</h3>
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-upload.png" alt="">
                                        <span>2</span>
                                    </figure>
                                    <h3>Update your talent profile or:</h3>
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-like.png" alt="">
                                        <span>3</span>
                                    </figure>
                                    <h3>Find talents in your area</h3>
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-wallet.png" alt="">
                                        <span>4</span>
                                    </figure>
                                    <h3>Connect with talents for no cv works, part-time or Student jobs.</h3>
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block-->
                </div>
                <!--end container-->
                <div class="background" data-background-color="#2b2b2b"></div>
                <!--end background-->
    </section>   
       
        

        </section>
        <!--end content-->

    </div>
    <!--end page-->
@endsection


