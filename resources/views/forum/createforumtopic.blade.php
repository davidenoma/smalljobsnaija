@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum Create Topic
@endsection

@section('main')
<div class="container">
    <form action="/createforumtopic" method="POST">

        @csrf
    <div class="create">
        <div class="create__head">
            <div class="create__title"><img src="/assets/fonts/icons/main/New_Topic.svg" alt="New topic">Create New Topic</div>
            <span>Forum Guidelines</span>
        </div>

        
        
        <div class="create__section">
            <label class="create__label" for="topic">Topic Title</label>
            <input type="text" class="form-control" id="topic" name="topic" placeholder="Add here">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="create__section">
                    <label class="create__label" for="category">Select Category</label>
                    <label class="custom-select">
                        <select id="category" name="category" >                                                                       
                          
                            <option>Politics</option>
                            <option>News</option>
                            <option>Sports</option>
                            <option>Celebrity</option>
                            <option>Jobs</option>
                            <option> World news</option>
                            <option>Entertainment</option>
                            <option>Comedy</option>
                            <option>Entertainment</option>
                            <option> 
                                Technology</option>
                            <option>Career</option>
                            <option>Health</option>

                        </select>
                    </label>
                </div>
            </div>
        
        </div>
        <div class="create__section create__textarea">
            <label class="create__label" for="description" >Description</label>
 
            <textarea class="form-control" id="description" placeholder="Describe at length the purpose of this topic" name="description"></textarea>
        </div>
      
        <div class="create__footer">
            <a href="/forumtopics" class="create__btn-cansel " >Cancel</a>
            <button type="submit"  class="create__btn-create btn btn--type-02">Create Topic</button>
        </div>
    </form>
    </div>
    <div class="posts" >
        <div class="posts__head">
            <div class="posts__topic">Topic</div>
            <div class="posts__category">Category</div>
            <div class="posts__users">Users</div>
            <div class="posts__replies">Replies</div>
            <div class="posts__views">Views</div>
            <div class="posts__activity">Activity</div>
        </div>
        <div class="posts__body">
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
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/A.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/G.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/P.svg" alt="avatar"></a>
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
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/L.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/T.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">252</div>
                    <div class="posts__views">396</div>
                    <div class="posts__activity">13m</div>
                </div>
            </div>        
        </div>
    </div>
</div>
@endsection