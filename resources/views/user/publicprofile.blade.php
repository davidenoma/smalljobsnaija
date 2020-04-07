@extends('layouts.app')
@section('title')
    User Public Profile
@endsection
@section('content')
    <section class="content">
        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <nav class="nav flex-column side-nav">
                            <a class="nav-link  icon" href="/user/profile">
                                <i class="fa fa-user"></i>My Profile
                            </a>
                            <a class="nav-link active icon" href="/user/publicprofile">
                                <i class="fa fa-user"></i>Public Profile
                            </a>
                          
                            <a class="nav-link icon" href="/password/reset">
                                <i class="fa fa-recycle"></i>Change Password
                            </a>
                            <a class="nav-link active  icon" href="/user/home">
                                <i class="fa fa-home"></i>Back to Dashboard
                            </a>
                        </nav>
                    </div>
                    <div class="col-md-8">
                        <div class="container">
                            <div class="author big">
                                <div class="author-image">
                                    <div class="background-image">
                                        <img src="assets/img/author-09.jpg" alt="">
                                    </div>
                                </div>
                                <!--end author-image-->
                                <div class="author-description">
                                    <div class="section-title">
                                       
                                        <h2>{{$welcomeName->first_name . " " .$welcomeName->last_name . " (".$welcomeName->username.")"}}</h2>
                                        <h3 class="">
                                            <a href="#">{{$welcomeName->talent}}</a>
                                        </h3>
                                        <h3 class="location">
                                            <a href="#">{{$welcomeName->location}}</a>
                                        </h3>
                                        <h3 class="email">
                                            <a href="#">{{$welcomeName->email}}</a>
                                        </h3>
                                        <figure>
                                            <div class="float-left">
                                                Total Rating
                                                <div class="js-rating" data-score="3" style="cursor: pointer;">
                                                    <i data-alt="1" class="fa fa-fw fa-star text-warning" title="Just Bad!"></i>
                                                    <i data-alt="2" class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                    <i data-alt="3" class="fa fa-fw fa-star text-warning" title="It’s ok!"></i>
                                                    <i data-alt="4" class="fa fa-fw fa-star text-muted" title="That’s nice!"></i>
                                                    <i data-alt="5" class="fa fa-fw fa-star text-muted" title="Incredible!"></i>
                                                    <input name="score" type="hidden" value="3">
                                                </div>
                                            </div>
                                            <div class="text-align-right social">
                                                Hire me!
                                                
                                               
                                                <a href="/user/chat">
                                                    <br>
                                                    <i class="fa fa-inbox"></i>
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
                                    <p> {{$welcomeName->about}}
                                    
                                    </p>
                                </div>
                                <!--end author-description-->
                            </div>
                            <!--end author-->
                        </div>
                    </div>
            </div>
        </section>
        
    </section>
    
    
@endsection