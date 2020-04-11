@extends('master')

@section('title')
SmallJobsNaija- Community based forums
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
                            <!--end form-group-->
                            {{-- <div class="form-group">
                                <label for="category" class="col-form-label">Category?</label>
                                <select name="category" id="category" data-placeholder="Select Category">
                                    <option value="">Select Category</option>
                                    <option value="1">Computers</option>
                                    <option value="2">Real Estate</option>
                                    <option value="3">Cars & Motorcycles</option>
                                    <option value="4">Furniture</option>
                                    <option value="5">Pets & Animals</option>
                                </select>
                            </div> --}}
                            <!--end form-group-->
                            <button type="submit" class="btn btn-primary width-100" onclick=" @guest
                                onClickAlert()
                            @endguest ">Search</button>
                            <script>
                                function onClickAlert(){
                                alert('Please register a profile and login to continue');
                                    location.href='/registration';
                               
                                

                                    
                                    }
                                
                                </script>

                            <!--Alternative Form-->
                            {{-- <div class="alternative-search-form">
                                <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                <div class="collapse" id="collapseAlternativeSearchForm">
                                    <div class="wrapper">
                                        <label>
                                            <input type="checkbox" name="new">
                                            New
                                        </label>
                                        <label>
                                            <input type="checkbox" name="used">
                                            Used
                                        </label>
                                        <label>
                                            <input type="checkbox" name="with_photo">
                                            With Photo
                                        </label>
                                        <label>
                                            <input type="checkbox" name="featured">
                                            Featured
                                        </label>
                                        <div class="form-group">
                                            <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                            <span class="input-group-addon small">$</span>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                            <span class="input-group-addon small">$</span>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                <option value="">Distance</option>
                                                <option value="1">1km</option>
                                                <option value="2">5km</option>
                                                <option value="3">10km</option>
                                                <option value="4">50km</option>
                                                <option value="5">100km</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                        <div class="form-group">
                                            <h4>Price Range</h4>
                                            <div class="ui-slider" id="price-slider" data-value-min="10" data-value-max="400" data-value-type="price" data-currency="$" data-currency-placement="before">
                                                <div class="values clearfix">
                                                    <input class="value-min" name="value-min[]" readonly>
                                                    <input class="value-max" name="value-max[]" readonly>
                                                </div>
                                                <div class="element"></div>
                                            </div>
                                            <!--end price-slider-->
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end collapse-->
                            </div> --}}
                            <!--end alternative-search-form-->
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
                    <!--============ Items ==========================================================================-->
                    <div class="items grid compact grid-xl-3-items grid-lg-3-items grid-md-2-items">
                        <div class="item">
                            <div class="ribbon-featured">Featured</div>
                            <!--end ribbon-->
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        
                                        <a href="single-listing-1.html" class="title">Baker</a>
                                        {{-- <span class="tag">Offer</span> --}}
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Enugu</a>
                                </h4>
                                <div class="price">Rating</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>02.05.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Jane Doe
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                </div>
                                <!--end description-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->

                        <div class="item">
                            <div class="wrapper">
                                <div class="image">
                                    <h3>
                                        <a href="#" class="tag category">Top Rated</a>
                                        <a href="single-listing-1.html" class="title">Web Developer</a>
                                        <span class="tag">Admin Recommend</span>
                                    </h3>
                                    <a href="single-listing-1.html" class="image-wrapper background-image">
                                        <img src="assets/img/image-02.jpg" alt="">
                                    </a>
                                </div>
                                <!--end image-->
                                <h4 class="location">
                                    <a href="#">Global</a>
                                </h4>
                                <div class="price">Rating</div>
                                <div class="meta">
                                    <figure>
                                        <i class="fa fa-calendar-o"></i>28.04.2017
                                    </figure>
                                    <figure>
                                        <a href="#">
                                            <i class="fa fa-user"></i>Admin
                                        </a>
                                    </figure>
                                </div>
                                <!--end meta-->
                                <div class="description">
                                    <p>Proin at tortor eros. Phasellus porta nec elit non lacinia. Nam bibendum erat at leo faucibus vehicula. Ut laoreet porttitor risus, eget suscipit tellus tincidunt sit amet. </p>
                                </div>
                                <!--end description-->
                                <div class="additional-info">
                                    <ul>
                                        <li>
                                            <figure>Start Date</figure>
                                            <aside>25.06.2017 09:00</aside>
                                        </li>
                                        <li>
                                            <figure>Length</figure>
                                            <aside>2 months</aside>
                                        </li>
                                        <li>
                                            <figure>Bedrooms</figure>
                                            <aside>3</aside>
                                        </li>
                                    </ul>
                                </div>
                                <!--end addition-info-->
                                <a href="single-listing-1.html" class="detail text-caps underline">Detail</a>
                            </div>
                        </div>
                        <!--end item-->



           

                        

                    </div>
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