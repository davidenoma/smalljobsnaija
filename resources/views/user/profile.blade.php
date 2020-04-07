@extends('layouts.app')
@section('title')
    User Profile
@endsection

@section('content')

    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <nav class="nav flex-column side-nav">
                            <a class="nav-link active icon" href="/user/profile">
                                <i class="fa fa-user"></i>My Profile
                            </a>
                            <a class="nav-link icon" href="{{url('/user/publicprofile')}}">
                                <i class="fa fa-user"></i>Public Profile
                            </a>
                          
                            <a class="nav-link icon" href="/password/reset" onclick="function hi(){alert('Pleasae logout and reset password from the homepage')};hi()">
                                <i class="fa fa-recycle"></i>Change Password
                            </a>
                            <a class="nav-link active icon" href="/user/home">
                                <i class="fa fa-home"></i>Back to Dashboard
                            </a>
                        </nav>
                  
                    </div>
                   
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <form class="form" method="POST" action="/user/updateProfile">
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>Profile</h2>
                                    <section>   
                                            <div class="col-md-6">
                                                <div class="profile-image">
                                                    <div class="image background-image">
                                                        <img src="assets/img/author-09.jpg" alt="">
                                                    </div>
                                                    <div class="single-file-input {{$errors->has('name')? 'has-error':''}}">
                                                        <input type="file" id="user_image" name="user_image">
                                                        <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                                    </div>
                                                </div>      
                                            </div>
                                                                         
                                        
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group {{$errors->has('name')? 'has-error':''}}">
                                                    <label for="name" class="col-form-label required">Username</label>
                                                    <input name="name" type="text" class="form-control has-error" id="name" placeholder="" value="{{$welcomeName->username}}" required>
                                                    <span class="text-danger">{{$errors->has('username')?$errors -> first('username'):''}}</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group {{$errors->has('firstname')? 'has-error':''}}">
                                                    <label for="name" class="col-form-label ">First name</label>
                                                    <input name="firstname" type="text" class="form-control has-error" id="firstname" placeholder="" value="{{$welcomeName->first_name}}" >
                                                    <span class="text-danger">{{$errors->has('firstname')?$errors -> first('firstname'):''}}</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <div class="row">
                                          
                                            <div class="col-md-12">
                                                <div class="form-group {{$errors->has('lastname')? 'has-error':''}}">
                                                    <label for="name" class="col-form-label ">Last Name</label>
                                                <input name="lastname" type="text" class="form-control has-error" id="lastname" placeholder="" value="{{$welcomeName->last_name}}" >
                                                    <span class="text-danger">{{$errors->has('lastname')?$errors -> first('lastname'):''}}</span>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-8-->
                                        </div>
                                        <div class="form-group">
                                            <label for="talent" class="col-form-label required" >Your Talent</label>
                                        <input name="talent" type="text" class="form-control" id="talent" placeholder="Your Talent" value="{{$welcomeName->talent}}">
                                        </div>
                                        <!--end row-->
                                        <div class="form-group">
                                            <label for="location" class="col-form-label required">Your Location</label>
                                            <input name="location" type="text" class="form-control" id="input-location2" placeholder="Your Location" value="{{$welcomeName->location}}" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="about" class="col-form-label">About you</label>
                                        <textarea  name="about" id="about" class="form-control">    {{$welcomeName->about}}
                                        </textarea>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="phone" class="col-form-label required">Phone</label>
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone Number" value="{{   $welcomeName->phone    }}" required>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="email" class="col-form-label required">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="{{$welcomeName->email}}" required>
                                        </div>
                                    </section>

                                    <section>
                                        {{-- <h2>Contact</h2> --}}
                                        {{-- <div class="form-group">
                                            <label for="phone" class="col-form-label">Phone</label>
                                            <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone" value="312-238-3329">
                                        </div> --}}
                                        <!--end form-group-->
                                        {{-- <div class="form-group">
                                            <label for="email" class="col-form-label">Email</label>
                                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" value="jane.doe@example.com">
                                        </div> --}}
                                        
                                    </section>

                                    {{-- <section>
                                        <h2>Social</h2>
                                        <div class="form-group">
                                            <label for="twitter" class="col-form-label">Twitter</label>
                                            <input name="twitter" type="text" class="form-control" id="twitter" placeholder="http://" value="http://www.twitter.com/jane.doe">
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <label for="facebook" class="col-form-label">Facebook</label>
                                            <input name="facebook" type="text" class="form-control" id="facebook" placeholder="http://" value="http://www.facebook.com/jane.doe">
                                        </div>
                                        <!--end form-group-->
                                    </section> --}}

                                    <section class="clearfix">
                                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                    </section>
                                </div>
                                <!--end col-md-8-->
                                {{-- <div class="col-md-4">
                                    <div class="profile-image">
                                        <div class="image background-image">
                                            <img src="assets/img/author-09.jpg" alt="">
                                        </div>
                                        <div class="single-file-input">
                                            <input type="file" id="user_image" name="user_image">
                                            <div class="btn btn-framed btn-primary small">Upload a picture</div>
                                        </div>
                                    </div>
                                </div> --}}
                                <!--end col-md-3-->
                            </div>
                        </form>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
    </section>

@endsection
