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
                        name="talent" placeholder="Enter your skill (Leave Empty for Regular User)" 
                    value="{{old('talent')}}"
                        >

                        @error('talent')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                       
                        <input class="form-control @error('area') is-invalid @enderror" id="area" type="text" 
                        name="area" placeholder="Your area, street, road etc. " 
                    value="{{old('area')}}"
                        required>
                        <p>Kindly an accurate location <i class="fa fa-location-arrow" aria-hidden="true"></i> to enable you get found.</p>
                        @error('area')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     
                        
                        <select name="state" id="state" class=" @error('state') is-invalid @enderror" id="state" type="text" 
                        name="state" placeholder="Your state" 
                    value="{{old('state')}}" data-placeholder="Select State" >
                            <option>Abia
                            </option><option>Adamawa 
                            </option><option>Akwa Ibom
                            </option><option>Anambra
                            </option><option>Bauchi 
                            </option><option>Bayelsa 
                            </option><option>Benue
                            </option><option>Borno 
                            </option><option>Cross River 
                            </option><option>Delta 
                            </option><option>Ebonyi 
                            </option><option>Edo
                            </option><option>Ekiti
                            </option><option>Enugu 
                            </option><option>FCT 
                            </option><option>Gombe 
                            </option><option>Imo 
                            </option><option>Jigawa 
                            </option><option>Kaduna 
                            </option><option>Kano 
                            </option><option>Katsina
                            </option><option>Kebbi 
                            </option><option>Kogi 
                            </option><option>Kwara
                            </option><option>Lagos
                            </option><option>Nassarawa 
                            </option><option>Niger
                            </option><option>Ogun 
                            </option><option>Ondo 
                            </option><option>Osun
                            </option><option>Oyo 
                            </option><option>Plateau 
                            </option><option>Rivers 
                            </option><option>Sokoto 
                            </option><option>Taraba 
                            </option><option>Yobe 
                            </option><option>Zamfara</option>
                        </select>
                        <br>
                        @error('state')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <br>
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
        <div class="form-holder" style="padding-bottom: 10rem">

        </div>
    </div>
  
    @endsection
