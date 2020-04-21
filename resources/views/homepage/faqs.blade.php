@extends('layouts.master')

@section('title')
SmallJobsNaija- Frequently Asked Questions
@endsection
@include('layouts.nav_new')
<section class="content">
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <section>
                        <form class="form inputs-underline">
               <br>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your search">
                            </div>
                            <!--end form-group-->
                        </form>
                    </section>
                    <section>
                        <div class="answer">
                            <div class="box">
                                <h3>What are we?</h3>
                                <p>SmallJobsNaija is a community based social network platform.
                            </div>
                            <figure>Was this answer helpful? <a href="#">Yes<i class="fa fa-thumbs-up"></i></a> <a href="#">No<i class="fa fa-thumbs-down"></i></a></figure>
                        </div>
                        <!--end answer-->
                        <div class="answer">
                            <div class="box">
                                <h3>Is SmallJobsNaija free of charge?</h3>
                                <p>Yes it is free of charge. We let you find talents in your area. 
                                    We also use community ratings and review to recommend talents.
                                </p>
                            </div>
                            <figure>Was this answer helpful? <a href="#">Yes<i class="fa fa-thumbs-up"></i></a> <a href="#">No<i class="fa fa-thumbs-down"></i></a></figure>
                        </div>
                        <!--end answer-->
              
                        <!--end answer-->
                    </section>
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
                                <li class="page-item ">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="">
                                   <i class="fa fa-chevron-right" aria-hidden="true"></i>                               
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
                <div class="col-md-3">
                    <!--============ Side Bar ===============================================================-->
                    <aside class="sidebar">
                        <h2>Search Talents</h2>
                        <!--============ Side Bar Search Form ===============================================-->
                        <form class="sidebar-form form">
                            <div class="form-group">
                                <label for="what" class="col-form-label">Talent (skill)</label>
                                <input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="input-location" class="col-form-label">Where?</label>
                                <input name="location" type="text" class="form-control" id="input-location" placeholder="Enter Location">
                                <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                            </div>
           
                            <button type="submit" class="btn btn-primary width-100">Search</button>

                        </form>
                        <!--============ End Side Bar Search Form ===========================================-->
                    </aside>
                    <!--============ End Side Bar ===========================================================-->
                </div>
                <!--end col-md-3-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end block-->
</section>
