@extends('layouts.dashboardmaster')

@section('title')
    Dashboard
@endsection

@section('content')

<div id="page-container" class="main-content-boxed">
      {{-- <main id="main-container" style="min-height: 0px;"> --}}

        <!-- Header -->
        @include('layouts.nav')
        
        <div class="bg-white">
            <div class="content content-full">
                <div class="pt-50 pb-30 text-center">
                    <h1 class="font-w300 mb-10">Dashboard</h1>
                                  <h2 class="h4 text-muted font-w300 mb-0">Welcome <strong>@if($welcomeName->username === 'null')
                           {{$welcomeName->email }}
                        @else
                        {{$welcomeName ->username}}
                        @endif</strong>, everything looks good.</h2>
                </div>
            </div>
        </div>

        <div class="content">
            
            
            <div class="row">
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/user/feeds">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Timeline</div>
                                <i class="si si-feed fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/user/publicprofile">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Profile</div>
                                <i class="fa fa-user fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="{{url('/user/chat')}}">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Inbox</div>
                                <i class="fa fa-inbox fa-2x"></i>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/forumtopics">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Forums</div>
                                <i class="si si-users fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
               
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/blog">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Job Board</div>
                                <i class="fa fa-briefcase fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/search">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Search</div>
                                <i class="fa fa-search-plus fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </a>
                </div>
             
            </div>
        </div>
    {{-- </main> --}}
    

</div>

@include('layouts.footer')

@endsection
