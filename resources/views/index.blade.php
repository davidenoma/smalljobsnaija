@extends('master')

@section('title')
SmallJobsNaija- A platform to Find, Connect, and Showcase talents in your area 
@endsection

@section('content')
    <div class="page home-page">
    @include('layouts.nav_index')
    

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
   


        <section class="content">
       
    
            <!--============  Steps =========================================================================-->
            <section class="blockofindex has-dark-background">
                <div class="container">
                    <div class="block">
                        <h2 style="text-align: center;">We care about helping people 
                            find talents to help solve their problem and render service so
                            Small Jobs is easy to use and its free!</h2>
                        <div class="row">
                            <div class="col-md-3">
                            <div class="feature-box" >
                                    <figure>
                                        <img src="assets/icons/feature-user.png" alt="Small Jobs naija Registration">
                                        <span>1</span>
                                    </figure>
                                    <a href="{{route('registration')}}"> <h3>Create an Account</h3></a>
                                    
                                    
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


