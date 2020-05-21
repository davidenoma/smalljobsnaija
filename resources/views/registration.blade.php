@extends('layouts.master')
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
                            <a href="{{route('registration')}}" class="active">Registration Form</a>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                           

                            @csrf
                            <br>
                            <label for="Talent">Choose Account Type</label>
                            <select  name="type" id="type" onchange="check()" >
                                <option value="talent">Talent</option>
                                <option value="customer">Employer</option>
                            </select>
                         
                            <br>
                            <br>
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
                        name="talent" placeholder="Your skill, talent or craft" 
                    value="{{old('talent')}}"
                        >

                        @error('talent')
                        <span class="invalid-feedback" role="alert" id="talent-span">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                       
                        <input class="form-control @error('location') is-invalid @enderror" id="location" type="text" 
                        name="location" placeholder="Your location, street, road etc. " 
                    value="{{old('location')}}"
                        required>
                        <p id="location-info">Kindly use an accurate location <i class="fa fa-location-arrow" aria-hidden="true"></i> to enable you get found.</p>
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
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Register</button>
                            </div>
                           
                        </form>
                        
                            
                               
                            
                        
           
                    </div>  
                </div>
            </div>
        {{-- </div> --}}
        
    </div>
    <div class="form-body" style="padding-bottom: 10rem">

    </div>
    <script type="text/javascript"> 
        function check(){
            if (document.getElementById('type').value === 'customer'){
                document.getElementById('talent').hidden = true;
            document.getElementById('location-info').hidden = true;
            
            }
            
            if (document.getElementById('type').value === 'talent'){
                document.getElementById('talent').value = '  ';
                document.getElementById('talent').hidden = false;
            document.getElementById('location-info').hidden = false;
            }
           
        }
    </script>
  
    @endsection
