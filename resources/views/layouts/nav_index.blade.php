<header class="hero">
    <div class="hero-wrapper">
    <div class="main-navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                <a class="navbar-brand" href="{{route('homepage')}}">
                    <img src="assets/img/small-jobs-logo.svg" alt="" width="150" height="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar" style="font-size: 40px">
                    <!--Main navigation list-->
                    <ul class="navbar-nav" >
                        <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}" style="color: white; font-size:23px;">Home</a>
                            
                        </li>
                        <li class="nav-item active" >
                            <a class="nav-link" href="{{ url('/forumtopics') }}" style="color: white; font-size:23px;">Forums</a>
                            
                        
                        <li class="nav-item active" >
                        <a class="nav-link" href="{{url('/about')}}" style="color: white; font-size:23px;">About</a>
                        </li>
                        <li class="nav-item active" >
                            <a class="nav-link" href="{{url('/registration')}}" style="color: white; font-size:23px; ">Register</a>
                        </li>
                        <li class="nav-item active" >
                            <a class="nav-link" href="{{url('/login')}}" style="color: white; font-size:23px; ">Login</a>
                        </li>
                        <li class="nav-item active" >
                                <a class="nav-link" href="/faqs"  style="color: white; font-size:23px;">FAQS</a>
                            </li>
                        
                    </ul>
                    <!--Main navigation list-->
                </div>
                <!--end navbar-collapse-->
            </nav>
            <!--end navbar-->
        </div> 
        <!--end container-->
    </div>

        <!--============ End Main Navigation ================================================================-->
        <!--============ Page Title =========================================================================-->
        <div class="page-title">
            <div class="container">
                <h1 class="opacity-60 center">
                    Find Top talents for Small Jobs near you!
                    
                </h1>
            </div>
            <!--end container-->
        </div>
        <!--============ End Page Title =====================================================================-->
        <!--============ Hero Form ======================\'/'/'====================================================-->
        <form class="hero-form form" method="GET" action="/search" >
            @csrf
                <div class="container">
                    <!--Main Form-->
                    <div class="main-search-form">
                        <div class="form-row">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="what" class="col-form-label">Talent</label>
                                    <input name="talent" type="text" class="form-control" id="what" placeholder="e.g. Plumber, Tailor, Writer, DJ, Programmer">
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="input-location" class="col-form-label">Your Area</label>
                                    <input name="location" type="text" class="form-control" id="input-location" placeholder="e.g. Covenant Uni, Ikeja, Rumuola,">
                                    <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                </div>
                                <!--end form-group-->
                            </div>
                            <!--end col-md-4-->
                            {{-- <div class="col-md-4 col-sm-4">
                          
                                    <div class="form-group">
                                            <label for="category" class="col-form-label">Distance near you:</label>
                                            <select name="distance" id="distance"  data-placeholder="Distance" >
                                                <option value="">Distance</option>
                                                <option value="1">1km</option>
                                                <option value="2">5km</option>
                                                <option value="4">10km</option>
                                                <option value="4">50km</option>
                                                <option value="5">100km</option>
                                            </select>
                                        </div>
                               
                               
                            </div> --}}
                            <!--end col-md-4-->
                            <div class="col-md-3 col-sm-3">
                                <button type="submit" class="btn btn-primary width-100" >Search</button>
                            </div>
                      
                            
                            </div>
                            <!--end col-md-3-->
                        </div>
                        <!--end form-row-->
                    </div>
               
                        <!--end collapse-->
                    </div>
                    
                </div>
                <!--end container-->
            </form>                           
            <!--============ End  Form ======================================================================-->
    
    </div>
    <!--end hero-wrapper-->
</header>