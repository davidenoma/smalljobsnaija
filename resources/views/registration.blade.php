@extends('master')
@section('title')
SmallJobsNaija- Registration Form
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
    
        {{-- <div class="row"> --}}
             <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                            <div class="page-links">    
                            <a href="{{route('register')}}" class="active">Registration Form</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
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
                        
                        <input class="form-control @error('talent') is-invalid @enderror" id="talent" type="text" 
                        name="talent" placeholder="Enter your skill" 
                    value="{{old('talent')}}"
                        required>

                        @error('talent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        <input class="form-control @error('location') is-invalid @enderror" id="phone" type="text" 
                        name="location" placeholder="Your location" 
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


                        <input id="password-confirm" class="form-control" type="password" name="password_confirmation" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                        </form>
                        
                        {{-- <div class="other-links">
                        <span>Or register with</span>
                            <ul> 
                                      <a href="/auth/facebook">  <img src="assets/icons/icons8-facebook-64 (1).png" alt="" ></a>
                                    <a href="/auth/google"><img src="assets/icons/icons8-google-64.png" alt=""></a> 
                                    
                                    
                            </ul>
                
            
                         
                            
                          

                        </div> --}}
                    </div>  
                </div>
            </div>
        {{-- </div> --}}
    </div>
    @endsection
