@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
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
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            <div class="other-links"    >
                                    <span>Or login with</span><a href="/auth/facebook"><img src="assets/icons/icons8-facebook-64 (1).png" alt="" > </a> 
                                    <a href="/auth/google"><img src="assets/icons/icons8-google-64.png" alt=""></a>
                                </div>
                        </div>
                      
                    </form>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
