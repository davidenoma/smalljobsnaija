<header id="page-header" style="background-color: #008000;">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="content-header-section">
     
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="/assets/img/small-jobs-logo.svg" alt="" width="130" height="130">
                </a>
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                <i class="fa fa-search" style="color:white;"></i>
            </button>
        
        </div>

        <div class="content-header-section">

        <ul class="ml-auto"> 
           
            @guest
           <li class="nav-item">
                <a style="color:white;" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @if (Route::has('register'))
            <li class="nav-item">
                <a style="color:white;" class="nav-link" href="{{ route('registration') }}">{{ __('Register') }}</a>
            </li>

        @endif
            @else
            
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user d-sm-none" style="color: white"></i>
                    <span class="d-none d-sm-inline-block" style="color:white"> {{ Auth::user()->username }}</span>
                    <i class="fa fa-angle-down ml-5 " style="color:white"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(57px, 34px, 0px);">
                    
                    <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">Talent</h5>
                <a class="dropdown-item" href="{{url('/user/publicprofile')}}">
                        <i class="si si-user mr-5"></i> Profile
                    </a>
                    <a class="dropdown-item" href="{{url('/user/home')}}">
                        <i class="si si-home mr-5"></i> Home
                    </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{url('/user/chat')}}">
                        <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                        <span class="badge badge-primary">1</span>
                    </a>
                <a class="dropdown-item" href="{{url('/forumtopics')}}">
                        <i class="si si-note mr-5"></i> Forums
                    </a>
                    <div class="dropdown-divider"></div>

                    <!-- Toggle Side Overlay -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <a class="dropdown-item" href="{{url('/user/profile')}}" data-toggle="layout" data-action="side_overlay_toggle">
                        <i class="si si-wrench mr-5"></i> Update Profile
                    </a>
                    <!-- END Side Overlay -->

                    <div class="dropdown-divider"></div>
                    <a  class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     
                        <i class="si si-logout mr-5"></i> Hi  {{ __('Logout') }}
                        <form id="logout-form" class="dropdown-item" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                    <div class="dropdown-divider"></div>
                    {{-- Inclusion of  the logout--}}
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                        class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <a>Log out</a>

                        <form id="logout-form" class="dropdown-item" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                    
                </div>
            </div>
               <!-- Notifications -->
               <div class="btn-group" role="group">
                <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-flag" style="color:white;"></i>
                    <span style="color:white;"class="badge badge-primary badge-pill">1</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(68px, 35px, 0px);">
                    <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                    <ul class="list-unstyled my-20">
                        <li>
                            <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                <div class="ml-5 mr-15">
                                    <i class="fa fa-fw fa-check text-success"></i>
                                </div>
                                <div class="media-body pr-10">
                                    <p class="mb-0">Welcome to small jobs!</p>
                                    <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                </div>
                            </a>
                        </li>
                       
                    </ul>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                        <i class="fa fa-flag mr-5"></i> View All
                    </a>
                </div>
            </div>
            <!-- END Notifications -->

            @endguest

        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header">
        <div class="content-header content-header-fullrow">
            <form action="/search" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">

                        <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                            <i class="fa fa-times"></i>
                        </button>
                        
                    </div>
                    <input type="text" class="form-control" placeholder="Enter talent that you want" id="page-header-search-input" name="talent">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header content-header-fullrow text-center">
            <div class="content-header-item">
                <i class="fa fa-sun-o fa-spin text-white"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
