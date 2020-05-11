@extends('layouts.master')

@section('title')
Find talents for small jobs near you
@endsection

@section('content')
    <div class="page home-page">
    @include('layouts.nav_index')
    

    <section class="content">
              <div class="form-body">
        <div class="website-logo">
            <a href="/">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="small-jobs-naija">
                </div>
            </a>
        </div>
    </section>
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


