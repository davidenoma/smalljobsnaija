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
                    <div class="col-md-1"></div>
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
                    <div class="col-sm-9 col-md-9">
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
                                        <h3>About</h3>
                                        <h4>           {{$welcomeName->about}}                        </h4>

                                        
                                    </div>
                            
                                </div>
              
                            </div>
     
                        </div>
                    </div>
                    
        </div>
        
            <form class="form" action="/addRating">
                <div class="row">
                   
              
                        <div class="center col-md-6 col=lg-6 col-sm-6">
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
                          <div class="col-md-1"></div>
                    
             
                </div>

            </form>

        
    </div>
</div>
<br><br>


    
    
@endsection