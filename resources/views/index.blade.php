@extends('layouts.master')

@section('title')
SmallJobsNaija: Find talents for small jobs near you
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
                    <div class="collapse navbar-collapse" id="navbar" style="font-size: 40px">
                        <!--Main navigation list-->
                        <ul class="navbar-nav" >
                            <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}" style="color: white; font-size:23px;">Home</a>
                                
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{ url('/forumtopics') }}" style="color: white; font-size:23px;">Forums</a>
                                
                            
                            <li class="nav-item active" >
                            <a class="nav-link" href="{{url('/about')}}" style="color: white; font-size:23px;">About</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('/registration')}}" style="color: white; font-size:23px; ">Register</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('/login')}}" style="color: white; font-size:23px; ">Login</a>
                            </li>
                            <li class="nav-item active" >
                                    <a class="nav-link" href="/faqs"  style="color: white; font-size:23px;">FAQS</a>
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
    
            <div class="page-title">
                <div class="container">
                    <h1 class="opacity-60 center">
                        Find Top talents for Small Jobs near you!
                        
                    </h1>
                </div>
                <!--end container-->
            </div>
            <form class="hero-form form" method="GET" action="/search" >
                @csrf
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">Talent</label>
                                        <input name="talent" type="text" class="form-control" id="what" placeholder="e.g. Plumber, Tailor, Writer, DJ, Programmer">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-4-->
                                <div class="col-md-4 col-sm-4">
                                    <div class="form-group">
                                        <label for="input-location" class="col-form-label">Your Area</label>
                                        <input name="location" type="text" class="form-control" id="input-location" placeholder="e.g. Covenant Uni, Ikeja, Rumuola,">
                                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                    <!--end form-group-->
                                </div>
                           
                                <div class="col-md-3 col-sm-3">
                                    <button type="submit" class="btn btn-primary width-100" >Search</button>
                                </div>
                          
                                
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                   
                            <!--end collapse-->
                        </div>
                        
                    </div>
                    <!--end container-->
                </form>                           
                <!--============ End  Form ======================================================================-->
        
        </div>
        <!--end hero-wrapper-->
    </header>
    

  
    <section class="content" style="padding:20px;padding-bottom: 20px;">
        <div class="row">
            
            <div class="form-holder">
                <br>
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
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="/password/reset">Forget password?</a>
                            </div>
                        </form>
                        {{-- <div class="other-links">
                            <span>Or login with</span><a href="/auth/facebook"><img src="assets/icons/icons8-facebook-64 (1).png" alt="" > </a> 
                            <a href="/auth/google"><img src="assets/icons/icons8-google-64.png" alt=""></a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
          
        </section>
     
            <!--============  Steps =========================================================================-->
         
        

        
        <!--end content-->

    </div>
    <!--end page-->
@endsection


