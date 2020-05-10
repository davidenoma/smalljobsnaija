@extends('layouts.master')

@section('title')
Find talents for small jobs in your area
@endsection

@section('content')
    <div class="page home-page">
    @include('layouts.nav_index')
    

        <section class="content">
              <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
    </section>
     
            <!--============  Steps =========================================================================-->
            <section class="blockofindex has-dark-background">
                <div class="container" >
                    <div class="block" >
                        <h2 style="text-align: center;">We care about showcasing, connecting and 
                            finding talents near you to help solve problem and render service.
                            Small Jobs is easy to use and its free!</h2>
                        <div class="row">
                            <div class="col-md-3">
                            <div class="feature-box" >
                              
                                      <figure>
                                        <a href="{{route('registration')}}">  
                                        <img src="assets/icons/feature-user.png" alt="Small Jobs naija Registration">
                                    </a>
                                        <span>1</span>
                                    </figure>
                                    <a href="{{route('registration')}}">    <h3>Create an Account</h3>
                                
                                </a>
                                    
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                               
                                    <figure>
                                        <a href="/user/home">
                                        <img src="assets/icons/feature-upload.png" alt=""> </a> 
                                        <span>2</span>
                                    </figure>
                                    <a href="/user/home">   <h3>Update your talent profile or:</h3>
                                </a> 
                                    
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                               
                                  <figure>
                                    <a href="/search">
                                        <img src="assets/icons/feature-like.png" alt="">    </a>
                                        <span>3</span>
                                    </figure>
                                    <a href="/search"> <h3>Find talents in your area</h3>
                                </a>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                 
                                    <figure>
                                        <a href="/forumtopics">
                                        <img src="assets/icons/feature-wallet.png" alt="">     </a>
                                        <span>4</span>
                                    </figure>
                                    <a href="/forumtopics"> <h3>Connect with talents for no cv works, part-time or Student jobs.</h3>
                                </a>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                <!--end container-->
                <div class="background" data-background-color="#2b2b2b"></div>
                <!--end background-->
    </section>   
       
        

        
        <!--end content-->

    </div>
    <!--end page-->
@endsection


