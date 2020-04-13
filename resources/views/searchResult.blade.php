@extends('master')

@section('title')
SmallJobsNaija- Search Top Talents
@endsection
@include('layouts.nav_new')
<section class="content">
    <section class="block">
        <div class="container">
      
            <div class="row">
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
                <div class="col-md-9">
                    <!--============ Section Title===================================================================-->
                    <div class="section-title clearfix">
                        <div class="float-left float-xs-none">
                            <label class="mr-3 align-text-bottom">Sort by: </label>
                            <select name="sorting" id="sorting" class="small width-200px" data-placeholder="Default Sorting" >
                                <option value="">Default Sorting</option>
                                <option value="1">Lowest Ratings</option>
                                <option value="2">Highest Ratings</option>
                                <option value="3">Oldest First</option>
                                <option value="4">Recent First</option>
                            </select>

                        </div>
                        <div class="float-right float-xs-none d-xs-none thumbnail-toggle">
                            <a href="#" class="change-class active" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                <i class="fa fa-th"></i>
                            </a>
                            <a href="#" class="change-class" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                <i class="fa fa-th-list"></i>
                            </a>
                        </div>
                    </div>
                    
                   
                    <div class="row">
                      
                            @foreach($users as $user)
                            
                            
                                <div class="row single-result-row" >
                                    <div class="col-md-6 single-result">
                                        <div class="float-left">
                                            <a href="/talent/{{$user->username}}"> 
                                                <img class="img-avatar" src="/assets/img/avatar12.jpg" alt=""> 
                                            
                                            </a>
                                            
                                            
                                        </div>  
                                        </div>    
                                        
                                    <div class="col-md-6 single-result">
                                        {{-- <div class="float-right" style="float:right;"> --}}
                                            <i  class="fa fa-fw fa-star text-warning" ></i>
                                            <i  class="fa fa-fw fa-star text-warning" ></i>
                                            <i  class="fa fa-fw fa-star text-warning" ></i>
                                            <i  class="fa fa-fw fa-star text-warning" ></i>
                                            <i  class="fa fa-fw fa-star text-warning" ></i>
                                        <h4> <a href="/talent/{{$user->username}}">{{$user->username}}</a>  <br>
                                                {{$user -> talent}}
                                                <br>
                                               <i class="fa fa-location-arrow" aria-hidden="true"></i> {{$user -> location}}
                                            
                                            </h4>

                                        {{-- </div> --}}
                                       

                                        </div> 
                                

                                </div>    
                                
                            @endforeach
                            <!--end item-->                       
    
                        </div>
                    
                    <!--============ Items ==========================================================================-->
                   
                    <!--============ End Items ==============================================================-->
                    <div class="page-pagination">
                        <nav aria-label="Pagination">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">
                                    <i class="fa fa-chevron-left"></i>
                                </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">
                                    <i class="fa fa-chevron-right"></i>
                                </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--end page-pagination-->
                </div>
                <!--end col-md-9-->
               
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>