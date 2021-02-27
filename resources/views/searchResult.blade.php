@extends('layouts.searchandjobsmaster')

@section('title')
SmallJobsNaija- Search Top Talents
@endsection
<br><br>

<div class="section section-padding">
    
    <div class="container">
        
        <div class="row mb-n5">

            <div class="col-lg-8 col-12 mb-5 pr-lg-5">
                
                <div class="job-list-toolbar">
                    <p>Showing {{$users -> count()}} results</p>
                    <p>Sort by:
                        <select>
                            <option>Most Recent</option>
                            <option >Top Rated</option>
                            <option>Most Popular</option>
                        </select>
                    </p>
                </div>
                <!-- Company List Wrap Start -->
                <div class="company-list-wrap row">

                    @foreach ($users as $user)
                        
                 
                    

                    <!-- Company List Start -->
                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12">
                        <a href="/talent/{{$user->username}}" class="company-list">
                            <span class="company-logo"><img 
                                @if ($user->image === null)
                               
                                @else
                                src="/assets/img/avatar12.jpg"
                                @endif
                                 alt="{{$user->username}}">
                                </span>
                                <h4 class="title">  {{$user -> username}}</h4>
                            <h6 class="title">  {{$user -> talent}}</h6>
                            <span class="open-job">      <i  class="fa fa-fw fa-star text-warning" ></i>
                                <i  class="fa fa-fw fa-star text-warning" ></i>
                                <i  class="fa fa-fw fa-star text-warning" ></i>
                                <i  class="fa fa-fw fa-star text-warning" ></i>
                                <i  class="fa fa-fw fa-star text-warning" ></i></span>

                            <span class="location"><i class="fa fa-map-o"></i>{{$user->location}}</span>
                                
                            
                        </a>
                    </div>
      
                    @endforeach

                </div>
      
                
                <div class="pagination pagination-center mt-5">
                    <nav aria-label="Pagination">
                        {{$users->appends(Request::except('page'))->links()}}
                        
                    </nav>
                    
                </div>
                <!-- Pagination End -->

            </div>

            <!-- Company Sidebar Wrap Start -->
            <div class="col-lg-4 col-12 mb-5">
                <div class="sidebar-wrap">
                    <!-- Sidebar (Search) Start -->
                    <div class="sidebar-widget">
                        <div class="inner">
                            <h6 class="title">Search Talents</h6>
                            <form action="#" method="POST" action="/search">
                                @csrf
                                <div class="row">
                                    <div class="col-12 mb-3">
                                    <input name="talent" type="text" class="form-control" id="talent" placeholder="What are you looking for?" value="@isset ($request) {{$request->talent}} @endisset">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Category</label>
                                        <select>
                                            <option value="1">Any category</option>
                                            <option value=" Accounting And Business"> Accounting And Business
                                            </option>
                                                                                           <option value="Admin (Office) Support">Admin (Office) Support</option>
                                                                                           
                                                                                             <option value="Construction And Building">Construction And Building</option>
                                                                                           <option value="Design And Art">Design And Art</option>
                                                                                           <option value="Entertainment ">Entertainment </option>
                                                                                           <option value="Fashion (Beauty)">Fashion (Beauty) </option>
                                                                                           <option value="Fitness">Fitness</option>
                                                                                           <option value="Food and Drinks">Food and Drinks</option>
                                                                                           <option value="IT Services">IT Services</option>
                                                                                         
                                                                                           
                                                                                           
                                                                                           <option value="Marketing And Advertising">Marketing And Advertising</option>
                                                                                           <option value="Music And Audio">Music And Audio</option>
                                                                                               <option value="Photography And Videography">Photography And Videography</option>
                                                                                               <option value="Public Relations">Public Relations</option>
                                                                                               <option value="Teaching And Education ">Teaching And Education </option>
                                                                                               <option value="Technical Services">Technical Services</option>
                                                                                               <option value="Transportation And Logistics">Transportation And Logistics</option>
                                                                                           <option value="Vocational And Manual">Vocational And Manual</option>
                                                                                           <option value="Web And Software Development">Web And Software Development</option>                                             
                                                                                            <option value="Writing">Writing</option>
                                      
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label>Location</label>
                                        <input name="location" type="text" class="form-control" id="location" value="@isset ($request) {{$request->location}} @endisset">
                                        <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                    </div>
                                 
                                    <div class="col-12 mb-3">
                                        <input class="btn btn-primary w-100" style="background-color: #008000" type="submit" value="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Sidebar (Search) End -->

     
                </div>
            </div>
            <!-- Company Sidebar Wrap End -->

        </div>
    </div>
</div>




