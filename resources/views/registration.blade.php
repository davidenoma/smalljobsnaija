@extends('layouts.dashboardmaster')
@section('title')
SmallJobsNaija- Talent Registration Form
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

   
    
    <main id="main-container" > 
        <div class="clear-fix">
            </div>  
        <div class="content">
         
                
                  
                  <div class="block">
                  
                    <div class=" block block-header block-header-default">
                        <h3 class="block-title">New Talent Sign Up </h3>
                    </div>
                    
                 
    
                      <div class="block-content">
                        <ul class="nav nav-tabs nav-tabs-alt">
                            <li class="nav-item">
                                <a class="nav-link active">Talent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/employer/registration">Employer/Business Owner</a>
                            </li>
                          </ul>
                          <div class="block-header block-header-default">
                            <h3 class="block-title">New Talent Sign Up </h3>
                        </div>
                          <div class="row justify-content-center py-20">
                              <div class="col-xl-6">
                                 
                                  <form class="js-validation-bootstrap" action="/register" method="POST"  >
                                    @csrf
                                      <div class="form-group row">
                                         
                                          <div class="col-lg-8" >
                                            <input style="font-size: 1rem;padding:1rem" type="text" name="username" placeholder="User Name" id="username" 
                                            type="text" class="form-control @error('username') is-invalid @enderror" 
                                             value="{{ old('username') }}" required autocomplete="username"  >
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-lg-8">
                                            <select id="category" name="category" class="form-control @error('category') is-invalid @enderror" value="{{old('category')}}"  >
                                                <option value="" selected > Choose a Category</option>
                                                <option value=" Accounting And Business"> Accounting And Business
                                                </option>
                                                                                               <option value="Admin Support">Admin Support</option>
                                                                                               
                                                                                                 <option value="Construction And Building">Construction And Building</option>
                                                                                               <option value="Design And Art">Design And Art</option>
                                                                                               <option value="Entertainment ">Entertainment </option>
                                                                                               <option value="Fashion">Fashion </option>
                                                                                               <option value="Fitness">Fitness</option>
                                                                                               <option value="Food and Drinks">Food and Drinks</option>
                                                                                               <option value="IT Services">IT Services</option>
                                                                                             
                                                                                               
                                                                                               
                                                                                               <option value="Marketing And Advertising">Marketing And Advertising</option>
                                                                                               <option value="Music And Audio">Music And Audio</option>
                                                                                                   <option value="Photography And Videography">Photography And Videography</option>
                                                                                                   <option value="Teaching And Education ">Teaching And Education </option>
                                                                                                   <option value="Technical Services">Technical Services</option>
                                                                                                   <option value="Transportation And Logistics">Transportation And Logistics</option>
                                                                                               <option value="Vocational And Manual">Vocational And Manual</option>
                                                                                               <option value="Web And Software Development">Web And Software Development</option>                                             
                                                                                                <option value="Writing">Writing</option>
                                            </select>

                                            @error('category')
                                            <span class="invalid-feedback" role="alert" id="category-span">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                          </div>
                                       
                                      </div>
                                      <div class="form-group row">
                                     
                                        <div class="col-lg-8">
                                            <input style="font-size: 1rem;padding:1rem" class="form-control @error('talent') is-invalid @enderror" id="talent" type="text" 
                                            name="talent" placeholder="Your skill, talent or craft" 
                                        value="{{old('talent')}}"
                                            >
                    
                                            @error('talent')
                                            <span class="invalid-feedback" role="alert" id="talent-span">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            
                                        </div>
                                    </div>
                             
    
                                      <div class="form-group row">
                                          
                                          <div class="col-lg-8">
                                            <input style="font-size: 1rem;padding:1rem" class="form-control @error('email') is-invalid @enderror" id = "email" type="email" 
                                            name="email" placeholder="E-mail Address" 
                                        value="{{old('email')}}"
                                            required>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                      
                                        <div class="col-lg-8">
                                            <input style="font-size: 1rem;padding:1rem" class="form-control @error('phone') is-invalid @enderror" id="phone" type="tel" 
                                            name="phone" placeholder="Phone Number" 
                                        value="{{old('phone')}}"
                                            required>
                    
                                            @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            
                                        </div>
                                    </div>
                    
                                    <div class="form-group row">

                                        <div class="col-lg-8">
                                            <input style="font-size: 1rem;padding:1rem" class="form-control @error('location') is-invalid @enderror" id="location" type="text" 
                                            name="location" placeholder="Your location, street, road etc. " 
                                        value="{{old('location')}}"
                                            required>
                                            
                                            @error('location')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                      <div class="form-group row">
                                          
                                          <div class="col-lg-8">
                                            <input style="font-size: 1rem;padding:1rem" id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" autocomplete="new-password" placeholder="Password" required>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                          </div>
                                      </div>
                               
                                 
                                      <div class="form-group row">
                                                                           
                                        
                                            <label>
                                         
                                                  By clicking "Register" button, you agree with our <a href="/termsofservice">Terms & Conditions.</a>and 
                                                <a href="/privacypolicy" >Privacy Policy.</a>
                                            </label>
                                            <div class="col-lg-8 center ">
                                                <button type="submit" class="btn btn-lg btn-success min-width-125 " >Register</button>
                                            </div>
                                        
                                    </div>
                                    
                                  </form>
                              </div>
                          </div>
    
                      </div>
                  </div>
        </div>
    </main>
    
     
    
    </div>
        
            <footer class="footer" style="background-color: white; color: #008000;padding-top: 0; bottom:0">
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




