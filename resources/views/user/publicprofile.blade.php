@extends('layouts.dashboardmaster')
@section('title')
    User Public Profile
@endsection


@section('content')
<div id = "page-container" class="main-content-boxed">
    @include('layouts.nav') 
    <div class="content">
       
        {{-- <section class="block"> --}}
            {{-- <div class="container"> --}}

                <div class="row">
                    <div class="col-md-2">
                        <nav class="nav flex-column side-nav">

                            <a class="nav-link active icon" href="/user/publicprofile">
                                <i class="fa fa-user"></i>Public Profile
                            </a>
                            <a class="nav-link  icon" href="/user/profile">
                                <i class="fa fa-user"></i>Edit Profile
                            </a>
                            
                          
                            <a class="nav-link icon" href="/password/reset" onclick="function hi(){alert('Pleasae logout and reset your password from the homepage!')};hi()">
                                <i class="fa fa-recycle"></i>Change Password
                            </a>
                            <a class="nav-link active  icon" href="/user/home">
                                <i class="fa fa-home"></i>Back to Dashboard
                            </a>
                        </nav>
                    </div>
                    <div class="col-sm-10 col-md-10">
                        <div class="content">
                            <div class="author big">
                                <div class="author-image">
                                    <div class="background-image">
                                        <img src="assets/img/author-09.jpg" alt="">
                                    </div>
                                </div>
                                <!--end author-image-->
                                <div class="author-description">
                                    <div class="section-title">
                                       
                                        <h3>{{$welcomeName->first_name . " " .$welcomeName->last_name . " (".$welcomeName->username.")"}}</h3>
                                        <h4 class="">
                                            <a href="#">{{$welcomeName->talent}}</a>
                                        </h4>
                                        <h4 class="location">
                                            <a href="#">{{$welcomeName->location}}</a>
                                        </h4>
                                     
                                        <figure>
                                            <div class="float-left">
                                                                                                
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>

                                            </div>
                                            <br>
                                            <div class="social">
                                                
                                                
                                               
                                                <a href="/user/chat">
                                                    <br>
                                                    <button class="btn btn-primary width-50" >  <i class="fa fa-inbox"></i> Connect</button>
                                                    
                                                </a>
                                              
                                            </div>
                                        
                                        </figure>
                                    </div>
                                    <div class="additional-info">
                                        <ul>
                                            <li>
                                                <figure>Phone</figure>
                                            <aside>{{"0".$welcomeName->phone}}</aside>
                                            </li>
                                            <li>
                                                <figure>Email</figure>
                                            <aside>{{$welcomeName->email}}</aside>
                                            </li>
                                          
                                        </ul>
                                    </div>
                                    <!--end addition-info-->
                                    <div class="additional-info">
                                        <h4>           {{$welcomeName->about}}                        </h4>

                                        
                                    </div>
                            
                                </div>
              
                            </div>
     
                        </div>
                    </div>
                    
        </div>
        {{-- <div class="row">            --}}
            <form class="form" action="/addRating">
                <div class="row">
                   
                    
                    <div class="center col-md-4">
                        <h2>Write a Review</h2>
                        <div class="form-group">
                            <label class="col-form-label">Rating</label>
                            <select >
                                <option value="">Select Rating</option>
                                <option value="1" data-option-stars="1">Horrible(1 star)</option>
                                <option value="2" data-option-stars="2">Average(2 stars)</option>
                                <option value="3" data-option-stars="3">Good (3 stars)</option>
                                <option value="4" data-option-stars="4">Very Good(4 stars)</option>
                                <option value="5" data-option-stars="5">Excellent (5 stars)</option>
                            </select>
                
                        </div>
                        <div class="form-group">
                            <label for="review" class="col-form-label">Your Review</label>
                            <textarea name="review" id="review" class="form-control" rows="4" placeholder="Good seller, I am satisfied."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary width-100" >Add Review</button>
                        <!--end form-group-->
                    </div>
                    
                        <div class="col-md-6">
                            <section>
                                <h2>Reviews</h2>
                                <div class="comments">
                                    <div class="comment">
                                        <div class="author">
                                            {{-- This is to move to the account of the user.  --}}
                                            <a href="#" class="author-image">
                                                <div class="background-image">
                                                    <img src="" alt="">
                                                </div>
                                            </a>
                                            <div class="author-description">
                                                <h3>Positive experience!</h3>
                                                <div class="meta">
                                                    <span class="rating" data-rating="4"></span>
                                                    <span>02.05.2017</span>
                                                    <h5><a href="#">Admin</a></h5>
                                                </div>
                                                <!--end meta-->
                                                <p>
                                                 User comment
                                                </p>
                                            </div>
                                            <!--end author-description-->
                                        </div>
                                        <!--end author-->
                                    </div>
                                    <!--end comment-->
                
                                 
                                    <!--end comment-->
                
                                 
                                    <!--end comment-->
                                </div>
                                <!--end comment-->
                                <div class="center">
                                    <a href="#" class="btn btn-primary btn-rounded btn-framed">Load More</a>
                                </div>
                            </section>
                          </div>
                    
             
                </div>

                
                <!--end row-->
            </form>
           
          
        
            
        {{-- </div> --}}
           
            {{-- The begin of the reviews added for the users. --}}
      
        {{-- </section> --}}
        
      
        
    </div>
</div>


    
    
@endsection