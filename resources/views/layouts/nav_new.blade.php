<header class="hero">

    {{-- <div class="hero-wrapper"> --}}
        <div class="main-navigation">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                    <a class="navbar-brand" href="{{route('homepage')}}">
                        <img src="/assets/img/small-jobs-logo.svg" alt="" width="150" height="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <!--Main navigation list-->
                        <ul class="navbar-nav" >
                            <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}" style="color: white; font-size: 16px;">Home</a>
                                
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{ url('/forumtopics') }}" style="color: white; font-size: 16px;">Forums</a>
                                
                            
                            <li class="nav-item active" >
                            <a class="nav-link" href="{{url('/about')}}" style="color: white; font-size: 16px;">About</a>
                            </li>
                            <li class="nav-item active" >
                                <a class="nav-link" href="{{url('/faqs')}}" style="color: white; font-size: 16px; ">FAQs</a>
                            </li>
                            <li class="nav-item active" >
                                    <a class="nav-link" href="https://smalljobsnaija.com" target="_new" style="color: white; font-size: 16px;">Blog</a>
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


