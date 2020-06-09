<header class="hero">

    {{-- <div class="hero-wrapper"> --}}
        <div class="main-navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="{{route('homepage')}}">
                        <img src="/assets/img/small-jobs-logo.svg" alt="" width="100" height="100">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!--Main navigation list-->
                        <ul class="navbar-nav" >
                            <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}" style="color: white; font-size: 23px;">Home</a>
                                
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{ url('/forumtopics') }}" style="color: white; font-size: 23px;">Forums</a>
                                
                            
                            <li class="nav-item active" >
                            <a class="nav-link" href="{{url('/about')}}" style="color: white; font-size: 23px;">About</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('/registration')}}" style="color: white; font-size: 23px; ">Register</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('/login')}}" style="color: white; font-size: 23px; ">Login</a>
                            </li>
                            <li class="nav-item active" >
                                    <a class="nav-link" href="/faqs"  style="color: white; font-size: 23px;">FAQS</a>
                                </li>
                            
                        </ul>
                        <!--Main navigation list-->
                    </div>
                    <!--end navbar-collapse-->
                </nav>
                <!--end navbar-->
            </div> 
            <!--end container-->
        {{-- </div> --}}
    </div>
</header>


