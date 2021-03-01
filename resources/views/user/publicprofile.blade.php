@extends('layouts.dashboardmaster')
@section('title')
    User Public Profile
@endsection


@section('content')
<div id = "page-container" class="main-content-boxed">
    @include('layouts.nav') 
    {{-- <div class="row">
        <div class="col-md-1">
        
    </div>
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
        

    </div> --}}
    <section class="content">
       
        <section class="block">
            <div class="container">

            </div>
        </section>
            

                <div class="row flex-column-reverse flex-md-row">
                   
                    <div class="col-md-3">
                        <!--============ Side Bar ===============================================================-->
                        <aside class="sidebar">
                            <h2>Search Talents</h2>
                            <!--============ Side Bar Search Form ===============================================-->
                            <form class="sidebar-form form" method="POST" action="/search">
                                @csrf
                                <div class="form-group">
                                    <label for="what" class="col-form-label">Talent (skill)</label>
                                    <input name="talent" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <label for="input-location" class="col-form-label">Where?</label>
                                    <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                </div>
     
                                <button type="submit" class="btn btn-primary width-100">Search</button>
                                <script>
                                    function onClickAlert(){
                                    alert('Please register a profile and login to continue');
                                        location.href='/registration';
                                   
                                    
    
                                        
                                        }
                                    
                                    </script>
                            </form>
                            <!--============ End Side Bar Search Form ===========================================-->
                        </aside>
                        <!--============ End Side Bar ===========================================================-->
                    </div> 
                    <div class="col-md-7">
                        <section class="my-0">
                            <div class="author big">
                                <div class="author-image">
                                    <div class="background-image">
                                        <img @if ($welcomeName->image == null)
                                        src="/assets/img/avatar12.jpg"
                                        @else
                                        
                                            src={{"/storage/images/".$welcomeName->image}}
                                        @endif alt= {{"/storage/images/".$welcomeName->image}} class="img-thumbnail">
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
                                        {{-- <p>{{$welcomeName->ratings->score}}</p> --}}
                                            
                                            <div class="float-left">
                                                                                    
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                                <i  class="fa fa-fw fa-star text-warning" title="Almost There!"></i>
                                               
                                               
                                            </div>
                                            <br>
                                            <h4>Rating & 1 Review(s)  </h4>
                                                                                                                         
                                        </figure>
                                        
                                        
                                        <button type="button" class="btn btn-sm btn-rounded btn-warning float-left" > <i class="fa fa-briefcase" aria-hidden="true"></i> Hire Talent</button>
                                       
                                        
                                        <button type="button" class="btn btn-sm btn-rounded btn-success float-left" data-toggle="modal" data-target="#modal-compose"> <i class="fa fa-inbox" aria-hidden="true"></i> Message</button>
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
                                        <li><h5>JOINED: {{$welcomeName->created_at->diffForHumans()}}</h5>
                                                <figure>About</figure>
                                                <aside> {{$welcomeName->about}}       </aside>
                                            </li>
                                          
                                        </ul>
                                                                              
                                
                                    </div>
                                    <!--end addition-info-->
                                  
                            
                                </div>
              
                            </div>
     
                        </section>
                        <hr>
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
                                             Admin comment
                                            </p>
                                        </div>
                                        <!--end author-description-->
                                    </div>
                                    <!--end author-->
                                </div>
                
                                        </div>
                            
                            <div class="center">
                                <a href="#" class="btn btn-primary btn-rounded btn-framed">Load More</a>
                            </div>
                        </section>
                    </div>
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
                    
                    
                    
        </div>
        

            

        
            </section>
    <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
        <div class="modal-dialog modal-dialog-top" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header">
                        <h3 class="block-title">
                            <i class="fa fa-pencil mr-5"></i> New Message
                        </h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="si si-close"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <form class="my-10" action="be_pages_generic_inbox.html" method="post" onsubmit="return false;">
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="email" class="form-control" id="message-email" name="message-email" placeholder="Where to send?">
                                        <label for="message-email">Email</label>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="si si-envelope-open"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="message-subject" name="message-subject" placeholder="What is this about?">
                                        <label for="message-subject">Subject</label>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="si si-book-open"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="form-material form-material-primary">
                                        <textarea class="form-control" id="message-msg" name="message-msg" rows="6" placeholder="Write your message.."></textarea>
                                        <label for="message-msg">Message</label>
                                    </div>
                                    <div class="form-text font-size-sm text-muted">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-alt-primary" data-dismiss="modal">
                                    <i class="fa fa-send mr-5"></i> Send Message
                                </button>
                                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>


    
    
@endsection