@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Manage Jobs and Offers
@endsection

@section('main')
<div class="container">
    <div class="nav">
        
        
        <div class="nav__categories js-dropdown">
            <div class="nav__select">
                <a href="/employer/managejobs"><div class="btn"><i class="fa fa-home" aria-hidden="true" style="color:white"> </i>Jobs Home   </div> </a>
            </div>

            <div class="nav__select">
               
                <div class="btn-select" data-dropdown-btn="categories" style="color:white"> Category</div>
                
                {{-- <nav class="dropdown dropdown--design-01" style="color:white" data-dropdown-list="categories">
                    
                    <ul class="dropdown__catalog row">
                        <li class="col-xs-6"><a href="/forumjobs/politics" class="category"><i class="bg-f9bc64"></i>Politics</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/news" class="category"><i class="bg-348aa7"></i>News</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/sports" class="category"><i class="bg-4436f8"></i>Sports</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/celebrity" class="category"><i class="bg-5dd39e"></i>Celebrity</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/jobs" class="category"><i class="bg-ff755a"></i>Jobs</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/gossip" class="category"><i class="bg-bce784"></i>Gossip</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/worldnews" class="category"><i class="bg-83253f"></i>World news</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/entertainment" class="category"><i class="bg-c49bbb"></i>Entertainment</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/comedy" class="category"><i class="bg-3ebafa"></i>Comedy</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/business" class="category"><i class="bg-c6b38e"></i>Business</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/enterntainment" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/currentnews" class="category"><i class="bg-a7cdbd"></i>Current news</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/technology" class="category"><i class="bg-525252"></i>Technology</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/career" class="category"><i class="bg-777da7"></i>Career</a></li>
                        <li class="col-xs-6"><a href="/forumtopics/health" class="category"><i class="bg-368f8b"></i>Health</a></li>
                    </ul>
                </nav> --}}
            </div> 
            
            
            <div class="nav__select" style="float:right">
                
                
                <a href="/employer/postjob"><div class="btn" >Create Job Post  <i class="fa fa-forumbee" aria-hidden="true" style="color:white"></i> </div></a>

            </div>
        </div>
        <div class="nav__menu js-dropdown">
            <div class="nav__select">
                <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                    <ul class="dropdown__catalog">
                        <li><a href="#">Latest</a></li>
                       
                </div>
            </div>
           
        </div>        
    </div>
    <div class="posts">
        <div class="posts__head">
            <div class="posts__topic">Job Title</div>
            <div class="posts__category">Location</div>
            <div class="posts__users">Category</div>                      
            <div class="posts__activity">Last Active Time</div>
        </div>
        <div class="posts__body">
           
            @foreach ($jobs as $job)

      
            
            <div class="posts__item">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                        <a href="/forumtopics/title/{{$job->id}}/{{$job -> job}}">
                                
                            <h3>{{$job -> job}}</h3>
                            </a>
                        </div>
                    </div>
                <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>{{$job -> category}}</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                          
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/{{ $job ->user->username[0] }}.svg" alt="avatar">{{ $job ->user->username }}</a>
                        </div>
                
                    </div>
                <div class="posts__replies">{{$job -> forumposts()->count()}}</div>
                    
                <div class="posts__activity">{{$job ->  mostRecentPost($job->id)}}</div>
                </div>
            </div>
                      
            @endforeach

         
        
        </div>
    </div>

    
    <div class="page-pagination">
        <nav aria-label="Pagination">
            {{$jobs->appends(Request::except('page'))->links()}}
            
        </nav>
        
    </div>
</div>
@endsection
