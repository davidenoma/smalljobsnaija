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
                            <a class="nav-link icon" href="{{url('/user/publicprofile')}}">
                                <i class="fa fa-user"></i>Public Profile
                            </a>
                            <a class="nav-link active icon" href="/user/profile">
                                <i class="fa fa-user"></i>Edit Profile
                            </a>                        
                          
                            <a class="nav-link icon" href="/password/reset" onclick="function hi(){alert('Pleasae logout and reset your password from the homepage!')};hi()">
                                <i class="fa fa-recycle"></i>Change Password
                            </a>
                            <a class="nav-link active icon" href="/user/home">
                                <i class="fa fa-home"></i>Back to Dashboard
                            </a>
                        </nav>
                  
                    </div>
                   
                    <!--end col-md-3-->
                    <div class="col-md-9">
                        <form class="form" method="POST" action="/user/updateProfile" enctype="multipart/form-data"  >
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <h2>Profile</h2>
                                    <section>   
                                            
                                            <div class="col-md-6">
                                                <div class=""> 
                                                    <div class="">
                                                        {{-- {{asset('/storage/images/'.Auth::user()->image)}} --}}
                                                    <img @if ($welcomeName->image == null)
                                                    src="/assets/img/avatar12.jpg"
                                                    @else
                                                        src="{{asset('/storage/images/'.$welcomeName->image)}}"
                                                    @endif  alt="{{Auth::user()->image}}" style="max-width: 100%; max-height: 50%" class="img-thumbnail" translate="yes">
                                                    </div>
                                                    <div class="single-file-input {{$errors->has('image')? 'has-error':''}}">
                                                    <input type="file" id="image" name="image" value="" accept="image/jpg,image/jpeg">
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
                                        <div class="form-group">
                                            <label for="category" class="col-form-label required" >Your Category</label>
                                            
                                  
                                        <select id="category" name="category" selected="selected" >
                                            
                                                
                                                <option value="Accounting And Business"> Accounting And Business
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
                                            <script type="text/javascript">
                                                
                                                    $("#category").val("{{$welcomeName->category}}").attr("selected",true);
                                                
                                             </script>
                                        </div>
                                        <!--end row-->
                                        <div class="form-group">
                                            <label for="location" class="col-form-label required">Your Location</label>
                                            <input name="location" type="text" class="form-control" id="location" placeholder="Your Location" value="{{$welcomeName->location}}" required>
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
                                 
                                        
                                    </section>
                 <section class="clearfix">
                                        <button type="submit" class="btn btn-primary float-right">Save Changes</button>
                                    </section>
                                </div>
         
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
