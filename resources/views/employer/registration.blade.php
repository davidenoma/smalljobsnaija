@extends('layouts.master')
@section('title')
SmallJobsNaija- Employer Registration Form
@endsection
@section('styles')
<style>
        #navbar{
            color: white;
        }
        .navbar-nav{
            color: white;
        }
        .hero .hero-wrapper {
    padding-bottom: unset;
}
        
    </style>

@endsection

@section('content')
@include('layouts.nav_new')
    <div class="form-body">
    <h1 class="center" style="color:white">Employer Registration </h1>
    <br>
        {{-- <div class="row"> --}}
             <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                            <div class="page-links">    
                                <a class="active">Employer</a>
                                <a href="/registration"  class="">Talent</a> 
                           
                        </div>
                        <form method="POST" action="/employer/registration">
                           

                            @csrf                                                 
                            <input type="text" name="username" placeholder="User Name" id="username" 
                            type="text" class="form-control @error('username') is-invalid @enderror" 
                             value="{{ old('username') }}" required autocomplete="username" autofocus >
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                            <input class="form-control @error('email') is-invalid @enderror" id = "email" type="email" 
                            name="email" placeholder="E-mail Address" 
                        value="{{old('email')}}"
                            required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        

                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="tel" 
                        name="phone" placeholder="Phone Number" 
                    value="{{old('phone')}}"
                        required>

                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        
         
                       
                        <input class="form-control @error('location') is-invalid @enderror" id="location" type="text" 
                        name="location" placeholder="Your location, street, road etc. " 
                    value="{{old('location')}}"
                        required>
                       
                        @error('location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     
                        
        
                        <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" autocomplete="new-password" placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                        <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        By clicking "Register" button, you agree with our <a href="/termsofservice" style="color:white;">Terms & Conditions.</a>and 
                        <a href="/privacypolicy"  style="color:white;">Privacy Policy.</a>
                            <div class="form-button center ">
                                <button id="submit" type="submit" class="ibtn width-100" style="font-size: 18px"> Register</button>
                            </div>
                           
                        </form>
                                                                                                        
           
                    </div>  
                </div>
            </div>
        {{-- </div> --}}
        
    </div>
    <footer class="footer" style="background-color: white; color: #008000;padding-top: 0">
        <div class="wrapper">
            <div class="container" style="color:#008000;padding-top:0">
                <div class="row" >
                    <div class="col-md-4 center" style="color:#008000;padding-top:0">
                        <a href="#" class="brand">
                            <img src="/assets/img/logo-crop.png" alt="" height="100px" width="100px">
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
