@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum Categories
@endsection

@section('main')
<div class="container">
    <div class="nav">
        <div class="nav__categories js-dropdown">
            <div class="nav__select">
                <div class="btn-select" data-dropdown-btn="categories">All Categories</div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="categories">
                    <ul class="dropdown__catalog row">
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Politics</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>News</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Sports</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-5dd39e"></i>Celebrity</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-ff755a"></i>Jobs</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-bce784"></i>Gossip</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-83253f"></i>World news</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-c49bbb"></i>Entertainment</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-3ebafa"></i>Comedy</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-c6b38e"></i>Business</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-a7cdbd"></i>Entertainment</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-525252"></i>Technology</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-777da7"></i>Career</a></li>
                        <li class="col-xs-6"><a href="#" class="category"><i class="bg-368f8b"></i>Health</a></li>
                    </ul>
                </nav>
            </div>
            <div class="nav__select">
                <a href="/createforumtopic"><div class="btn" >Create new </div></a>
                
                {{-- <div class="dropdown dropdown--design-01" data-dropdown-list="tags">
                    <div class="tags">
                        <a href="#" class="bg-4f80b0">gaming</a>
                        <a href="#" class="bg-424ee8">nature</a>
                        <a href="#" class="bg-36b7d7">entertainment</a>
                        <a href="#" class="bg-ef429e">selfie</a>
                        <a href="#" class="bg-7cc576">camera</a>
                        <a href="#" class="bg-3a3a17">username</a>
                        <a href="#" class="bg-6f7e9c">funny</a>
                        <a href="#" class="bg-f26522">photography</a>
                        <a href="#" class="bg-a3d39c">climbing</a>
                        <a href="#" class="bg-92278f">adventure</a>
                        <a href="#" class="bg-8781bd">dreams</a>
                        <a href="#" class="bg-f1ab32">life</a>
                        <a href="#" class="bg-3b96ca">reason</a>
                        <a href="#" class="bg-348aa7">social</a>
                    </div>
                </div> --}}
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
        {{-- <div class="nav__thread">
            
            <p>Thread Navigation:</p>
            <a href="#" class="nav__thread-btn nav__thread-btn--prev"><i class="icon-Arrow_Left"></i>Previous</a>
            <a href="#" class="nav__thread-btn nav__thread-btn--next">Next<i class="icon-Arrow_Right"></i></a>
        </div> --}}
        
    </div>
    <div class="posts">
        <div class="posts__head">
            <div class="posts__topic">Topic</div>
            <div class="posts__category">Category</div>
            <div class="posts__users">Users</div>
            <div class="posts__replies">Replies</div>
            <div class="posts__views">Views</div>
            <div class="posts__activity">Activity</div>
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
                    <div class="posts__views">15.1k</div>
                    <div class="posts__activity">11d</div>
                </div>
            </div>
            <div class="posts__item">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3>Current news and discussion</h3>
                            </a>
                        </div>
                    </div>
                    <div class="posts__category"><a href="#" class="category"><i class="bg-368f8b"></i>Politics</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/A.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/G.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/P.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">31</div>
                    <div class="posts__views">14.5k</div>
                    <div class="posts__activity">13d</div>
                </div>
            </div>
            <div class="posts__item bg-f2f4f6">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3>Get your username drawn by the other users of unity! or a drawing based on what you do</h3>
                            </a>
                            <div class="posts__tags tags">
                                <a href="#" class="bg-4f80b0">gaming</a>
                                <a href="#" class="bg-424ee8">nature</a>
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
                    <div class="posts__views">396</div>
                    <div class="posts__activity">13m</div>
                </div>
            </div>
            <div class="posts__item">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3>Which movie have you watched most recently?</h3>
                            </a>
                        </div>
                    </div>
                    <div class="posts__category"><a href="#" class="category"><i class="bg-3ebafa"></i> Exchange</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/E.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/I.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/R.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">207</div>
                    <div class="posts__views">7.5k</div>
                    <div class="posts__activity">41m</div>
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
                    <div class="posts__views">2.0k</div>
                    <div class="posts__activity">1h</div>
                </div>
            </div>
            <div class="posts__item">
                <div class="posts__section-left">
                    <div class="posts__topic">
                        <div class="posts__content">
                            <a href="#">
                                <h3>Take a picture of what you’re doing at this very moment</h3>
                            </a>
                            <div class="posts__tags tags">
                                <a href="#" class="bg-ec008c">selfie</a>
                                <a href="#" class="bg-7cc576">camera</a>
                            </div>
                        </div>
                    </div>
                    <div class="posts__category"><a href="#" class="category"><i class="bg-c6b38e"></i> Pets</a></div>
                </div>
                <div class="posts__section-right">
                    <div class="posts__users">
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/C.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/U.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="/assets/fonts/icons/avatars/I.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">441</div>
                    <div class="posts__views">3.1k</div>
                    <div class="posts__activity">6h</div>
                </div>
            </div>
        
        </div>
    </div>
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
</div>
@endsection
