@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum  Topic Discussion
@endsection

@section('main')
<div class="container">
    <div class="nav">
        <div class="nav__categories js-dropdown">

            <div class="nav__select">
                <a href="/forumtopics"><div class="btn"><i class="fa fa-home" aria-hidden="true" style="color:white"> </i>Forums Home   </div> </a>
            </div>

            <div class="nav__select">
                <div class="btn-select" data-dropdown-btn="categories">Categories</div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
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
           
        </div>

    </div>
    <div class="topics">
        <div class="topics__heading">
        <h2 class="topics__heading-title" name="forum_topic">{{$forumtopic->topic}}</h2>
            <div class="topics__heading-info">
            <a href="#" class="category"><i class="bg-3ebafa"></i> {{$forumtopic->category}} </a>
          <p>  </p>
       
            </div>
        </div>

        <div class="topics__body">
            <div class="topics__content">
                @foreach ($forumposts as $post)
                {{-- {{$forumtopic->first()->forumposts->count()}} --}}
                        
                <div class="topic">
                    <div class="topic__head">
                        <div class="topic__avatar">

                            <a href="/talent/{{$post -> user -> username}}" class="avatar"><img src="/assets/fonts/icons/avatars/{{$post -> user -> username[0] }}.svg" alt="avatar"></a>
                        </div>
                        <div class="topic__caption">
                            <div class="topic__name">
                                <a href="/talent/{{$post -> user -> username}}">{{$post -> user -> username}}</a>
                            </div>
                        <div class="topic__date"><i class="icon-Watch_Later"></i>{{$post->created_at}}</div>
                        </div>
                    </div>
                    <div class="topic__content">
                        <div class="topic__text">
                        <p>{{$post -> post}}</p>
                        </div>
                        <div class="topic__footer">
                            <div class="topic__footer-likes">
                                <div>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    
                                    <span>201</span>
                                </div>
                                <div>
                                    <a href="#"> <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> </a>
                                    <span>08</span>
                                </div>
                                <div>
                                    <a href="#" type="button" data-toggle="modal" data-target="#modal-compose"><i class="icon-Reply_Fill"></i>Reply</a>                                                                       
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>  
                @endforeach
             
                {{-- <div class="topic">
                    <div class="topic__head">
                        <div class="topic__avatar">

                            <a href="/talent/{{$forumtopic -> user -> username}}" class="avatar"><img src="/assets/fonts/icons/avatars/{{$forumtopic -> user -> username[0] }}.svg" alt="avatar"></a>
                        </div>
                        <div class="topic__caption">
                            <div class="topic__name">
                                <a href="/talent/{{$forumtopic -> user -> username}}">{{$forumtopic -> user -> username}}</a>
                            </div>
                        <div class="topic__date"><i class="icon-Watch_Later"></i>{{$forumtopic->created_at}}</div>
                        </div>
                    </div>
                    <div class="topic__content">
                        <div class="topic__text">
                        <p>{{$forumtopic -> description}}</p>
                        </div>
                        <div class="topic__footer">
                            <div class="topic__footer-likes">
                                <div>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a>
                                    
                                    <span>201</span>
                                </div>
                                <div>
                                    <a href="#"> <i class="fa fa-thumbs-o-down" aria-hidden="true"></i> </a>
                                    <span>08</span>
                                </div>
                                <div>
                                    <a href="#" type="button" data-toggle="modal" data-target="#modal-compose"><i class="icon-Reply_Fill"></i>Reply</a>                                                                       
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="topics__calendar">
                <div class="calendar">
                    <div class="calendar__top">
                        <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Calender"></i></a>
                    </div>
                    <div class="calendar__center">
                        <div class="calendar__first">Jun 12</div>
                        <div class="calendar__range">
                            <div class="calendar__current">
                                <p>31 / 75</p>
                                <span>Jun 17</span>
                            </div>
                        </div>
                        <div class="calendar__last">6h ago</div>
                    </div>
                    <div class="calendar__bottom">
                        <a href="#" class="calendar__btn calendar__btn--c-01"><i class="icon-Track"></i></a>
                        <a href="#" class="calendar__btn calendar__btn--c-02"><i class="icon-Reply_Fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal-compose" tabindex="-1" role="dialog" aria-labelledby="modal-compose" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="block block-themed block-transparent mb-0">
                        <div class="block-header" style="background-color: #008000">
                            <h3 class="block-title">
                                <i class="fa fa-pencil mr-5"></i>Reply / Comment
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                    <i class="si si-close"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form class="my-10" action="/forumtopics/{{$forumtopic->id}}/comment" method="POST">
                                @csrf
                              
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary input-group">
                                        <input type="text" class="form-control" id="forum_topic" name="forum_topic" value="{{$forumtopic ->topic}}" disabled>
                                            <label for="forum_topic">Forum Topic</label>
                                            <div class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="si si-book-open"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-12">
                                        <div class="form-material form-material-primary">
                                            <textarea class="form-control" id="reply" name="reply" rows="6" placeholder="Write your reply.."></textarea>
                                            <label for="reply">Your Comment / Reply</label>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-alt-primary" >
                                        <i class="fa fa-send mr-5" style="color:white"></i> Reply
                                    </button>
                                    <button type="button" class="btn btn-alt-secondary" data-dismiss="modal"> <i class="fa fa-backward"  style="color:white" aria-hidden="true"></i> Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
      
        <div class="topics__title">Suggested Topics</div>
    </div>
    <div class="page-pagination">
        <nav aria-label="Pagination">
            {{$forumposts->appends(Request::except('page'))->links()}}
            
        </nav>
        
    </div>

</div>

@endsection
