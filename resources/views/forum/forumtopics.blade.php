@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum Categories
@endsection

@section('main')
<div class="container">
    <div class="nav">
        
        
        <div class="nav__categories js-dropdown">
            <div class="nav__select">
                <a href="/forumtopics"><div class="btn"><i class="fa fa-home" aria-hidden="true" style="color:white"> </i>Forums Home   </div> </a>
            </div>

            <div class="nav__select">
               
                <div class="btn-select" data-dropdown-btn="categories" style="color:white"> Category</div>
                
                <nav class="dropdown dropdown--design-01" style="color:white" data-dropdown-list="categories">
                    
                    <ul class="dropdown__catalog row">
                        <li class="col-xs-6"><a href="/forumtopics/politics" class="category"><i class="bg-f9bc64"></i>Politics</a></li>
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
                </nav>
            </div>
            
            <div class="nav__select" style="float:right">
                
                
                <a href="/createforumtopic"><div class="btn" >New  <i class="fa fa-forumbee" aria-hidden="true" style="color:white"></i> </div></a>

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
            <div class="posts__topic">Topic</div>
            <div class="posts__category">Category</div>
            <div class="posts__users">Creator</div>
            <div class="posts__replies">Replies</div>            
            <div class="posts__activity">Last Active Time</div>
        </div>
        <div class="posts__body">
            <div class="posts__item bg-fef2e0">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3><i><img src="/assets/fonts/icons/main/Pinned.svg" alt="Pinned"></i>Welcome New Users! Please read this before posting!</h3>
                            </a>
                            <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                        </div>
                    </div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users js-dropdown">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/B.svg" alt="avatar" data-dropdown-btn="user-b"></a>
                           
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/K.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/O.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">66</div>
                    
                    <div class="posts__activity">11d</div>
                </div>
            </div>
            @foreach ($forumtopics as $topic)

      
            
            <div class="posts__item">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                        <a href="/forumtopics/title/{{$topic->id}}/{{$topic -> topic}}">
                                
                            <h3>{{$topic -> topic}}</h3>
                            </a>
                        </div>
                    </div>
                <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>{{$topic -> category}}</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                          
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/{{ $topic ->user->username[0] }}.svg" alt="avatar">{{ $topic ->user->username }}</a>
                        </div>
                        {{-- <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/G.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/P.svg" alt="avatar"></a>
                        </div> --}}
                    </div>
                <div class="posts__replies">{{$topic -> forumposts()->count()}}</div>
                    
                <div class="posts__activity">{{$topic ->  mostRecentPost($topic->id)}}</div>
                </div>
            </div>
                      
            @endforeach
            {{-- <div class="posts__item bg-f2f4f6">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                            </a>
                            <div class="posts__tags tags">
                                <a href="#" class="bg-4f80b0">politics</a>
                                <a href="#" class="bg-424ee8">sports</a>
                                <a href="#" class="bg-36b7d7">entertainment</a>
                            </div>
                        </div>
                    </div>
                    <div class="posts__category"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/L.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/T.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">252</div>
                    
                    <div class="posts__activity">13m</div>
                </div>
            </div>
        
            <div class="posts__item posts__item--bg-gradient">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3><span>This post contails spoiler about</span> Star Wars Movie.</h3>
                            </a>
                        </div>
                    </div>
                    <div class="posts__category"><a href="#" class="category"><i class="bg-777da7"></i> Q&amp;As</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/F.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">2.3k</div>
                    
                    <div class="posts__activity">1h</div>
                </div>
            </div> --}}
         
        
        </div>
    </div>
    {{-- <div class="page-pagination">
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
    </div> --}}
    
    <div class="page-pagination">
        <nav aria-label="Pagination">
            {{$forumtopics->appends(Request::except('page'))->links()}}
            
        </nav>
        
    </div>
</div>
@endsection
