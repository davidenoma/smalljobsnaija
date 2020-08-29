@extends('layouts.dashboardmaster')

@section('title')
    Dashboard
@endsection

@section('content')

<div id="page-container" class="main-content-boxed">
  
        @include('layouts.nav_dashboard')
        
        <div class="bg-white">
            <div class="content content-full">
                <div class="pt-50 pb-30 text-center">
                    <h1 class="font-w300 mb-10">Dashboard</h1>
           
                </div>
            </div>
        </div>

        <div class="content">
            
            <div class="row">
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="#">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Timeline</div>
                                <i class="si si-feed fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="/employer/managejobs">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Manage Jobs and Offers</div>
                                <i class="si si-users fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="col-6 col-xl-3">
                <a class="block block-rounded" href="{{url('/employer/postjob')}}">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Post Job</div>
                                <i class="fa fa-inbox fa-2x"></i>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-xl-3">
                    <a class="block block-rounded" href="#">
                        <div class="block-content block-content-full">
                            <div class="py-20 text-center" style="color: #008000;">
                                <div class="font-size-h2 font-w700 mb-0 text-primary-dark">Profile</div>
                                <i class="fa fa-user fa-2x"></i>
                            </div>
                        </div>
                    </a>
                </div>
               
             
            </div>
        </div>
    {{-- </main> --}}

</div>

@endsection
