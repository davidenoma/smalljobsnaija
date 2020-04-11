@extends('layouts.forumsmaster')
@section('title')
SmallJobsNaija- Forum Create Topic
@endsection

@section('main')
<div class="container">
    <div class="create">
        <div class="create__head">
            <div class="create__title"><img src="/assets/fonts/icons/main/New_Topic.svg" alt="New topic">Create New Thread</div>
            <span>Forum Guidelines</span>
        </div>
        <div class="create__section">
            <label class="create__label" for="title">Thread Title</label>
            <input type="text" class="form-control" id="title" placeholder="Add here">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="create__section">
                    <label class="create__label" for="category">Select Category</label>
                    <label class="custom-select">
                        <select id="category">
                            <option>Choose</option>
                            <option>Choose #2</option>
                            <option>Choose #3</option>
                        </select>
                    </label>
                </div>
            </div>
        
        </div>
        <div class="create__section create__textarea">
            <label class="create__label" for="description">Description</label>
            {{-- <div class="create__textarea-head">
                <span><i class="icon-Quote"></i></span>
                <span><i class="icon-Bold"></i></span>
                <span><i class="icon-Italic"></i></span>
                <div class="create__textarea-separate"></div>
                <span><i class="icon-Share_Topic"></i></span>
                <span><i class="icon-BlockQuote"></i></span>
                <span><i class="icon-Performatted"></i></span>
                <span><i class="icon-Upload_Files"></i></span>
                <span class="create__textarea-separate"></span>
                <span><i class="icon-Bullet_List"></i></span>
                <span><i class="icon-heading"></i></span>
                <span><i class="icon-Horizontal_Line"></i></span>
                <span><i class="icon-Emoticon"></i></span>
                <span><i class="icon-Settings"></i></span>
                <span><i class="icon-Color_Picker"></i></span>
                <div class="create__textarea-btn">
                    <a href="#" class="btn">Preview</a>
                </div>
            </div> --}}
            <textarea class="form-control" id="description">Adding amazing books to your summer reading list can be as simple as signing up for the BuzzFeed Books newsletter! You'll get a review of a new book you might love every Wednesday, plus much more twice a week: great jokes and quizzes, wonderful lists, powerful essays, all the Harry Potter and YA buzz you can handle, and of course, even more book recommendations. So make some space in your beach bag now — because you're going to have a lot to read this summer.</textarea>
        </div>
        {{-- <div class="create__section">
            <label class="create__label" for="tags">Add Tags</label>
            <input type="text" class="form-control" id="tags" placeholder="e.g. nature, science">
        </div> --}}
        {{-- <div class="create__advanced">
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <div class="create__section">
                        <label class="create__label">Who can see this?</label>
                        <div class="create__radio">
                            <label class="create__box">
                                <label class="custom-radio">
                                    <input type="radio" name="can-see" checked="checked">
                                    <i></i>
                                </label>
                                <span>Everyone</span>
                            </label>
                            <label class="create__box">
                                <label class="custom-radio">
                                    <input type="radio" name="can-see">
                                    <i></i>
                                </label>
                                <span>Only Friends</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-3">
                    <div class="create__section">
                        <label class="create__label">Share on Social?</label>
                        <div class="create__radio">
                            <label class="create__box">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="share-social" checked="checked">
                                    <i></i>
                                </label>
                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                            </label>
                            <label class="create__box">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="share-social" checked="checked">
                                    <i></i>
                                </label>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </label>
                            <label class="create__box">
                                <label class="custom-checkbox">
                                    <input type="checkbox" name="share-social">
                                    <i></i>
                                </label>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-5">
                    <div class="create__section">
                        <label class="create__label">Is this a Mature Thread?</label>
                        <div class="create__radio">
                            <label class="create__box">
                                <label class="custom-radio">
                                    <input type="radio" name="mature-thread">
                                    <i></i>
                                </label>
                                <span>Yes</span>
                            </label>
                            <label class="create__box">
                                <label class="custom-radio">
                                    <input type="radio" name="mature-thread" checked="checked">
                                    <i></i>
                                </label>
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="create__footer">
            <a href="#" class="create__btn-cansel ">Cancel</a>
            <a href="#" class="create__btn-create btn btn--type-02">Create Thread</a>
        </div>
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
            {{-- <div class="posts__item">
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
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/E.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/R.svg" alt="avatar"></a>
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
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/F.svg" alt="avatar"></a>
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
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/C.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/U.svg" alt="avatar"></a>
                        </div>
                        <div>
                            <a href="#" class="avatar"><img src="fonts/icons/avatars/I.svg" alt="avatar"></a>
                        </div>
                    </div>
                    <div class="posts__replies">441</div>
                    <div class="posts__views">3.1k</div>
                    <div class="posts__activity">6h</div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection