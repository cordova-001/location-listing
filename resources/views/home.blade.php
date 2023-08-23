@extends('layout.app')
@section('content')
<div id="page-content">
        <div class="hero-section has-background height-600px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <h1> Artisan Connect</h1>
                            <h2>Connect with all our Artisans</h2>
                        </div>
                        <!--end page-title-->
                        <div class="row">
                            <div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-1">
                                <div class="form search-form horizontal">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="email" placeholder="What are you looking for?">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit"><i class="arrow_right"></i></button>
                                            </span>
                                        </div><!-- /input-group -->
                                    </form>
                                    
                                    <!--end form-->
                                </div>
                            <!--end search-form-->
                            </div>
                            <!--end col-md-10-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end container-->
                </div>
                <!--end inner-->
            </div>
            <!--end wrapper-->
            <div class="background-wrapper">
                <div class="bg-transfer opacity-30"><img src="assets/img/mini.jpg" alt=""></div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end hero-section-->

        <section class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Recent Places</h2>
                            <h3 class="subtitle">Fusce eu mollis dui, varius convallis mauris. Nam dictum id</h3>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
                  @foreach ($listings as $listing)
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>{{ $listing->listing_title }}</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/mini.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                  @endforeach
                    <!--<end col-md-3-->
                   
                    <!--<end col-md-3-->
                </div>
                <!--end row-->
                <div class="center">
                    <a href="{{ route('listing.index') }}" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <div class="container"><hr></div>
        <section class="block">
            <div class="container">
                <div class="section-title">
                    <div class="center">
                        <h2>Browse Our Listings</h2>
                    </div>
                </div>
                <!--end section-title-->
                <div class="categories-list">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-paint-brush"></i></div>
                                    <h3><a href="#">Arts & Humanities</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Photography</a><figure class="count">3</figure></li>
                                    <li><a href="">History</a><figure class="count">2</figure></li>
                                    <li><a href="">Literature</a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-suitcase"></i></div>
                                    <h3><a href="#">Business & Economy</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Business to Business</a><figure class="count">6</figure></li>
                                    <li><a href="">Finance</a><figure class="count">4</figure></li>
                                    <li><a href="">Shopping</a><figure class="count">3</figure></li>
                                    <li><a href="">Jobs</a><figure class="count">5</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-desktop"></i></div>
                                    <h3><a href="#">Computer & Internet</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Hardware</a><figure class="count">10</figure></li>
                                    <li><a href="">Software</a><figure class="count">4</figure></li>
                                    <li><a href="">Websites</a><figure class="count">6</figure></li>
                                    <li><a href="">Games</a><figure class="count">7</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                    <h3><a href="#">Education</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Colleges</a><figure class="count">8</figure></li>
                                    <li><a href="">K-12</a><figure class="count">7</figure></li>
                                    <li><a href="">Distance Learning </a><figure class="count">2</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-television"></i></div>
                                    <h3><a href="#">Entertainment</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Movies</a><figure class="count">6</figure></li>
                                    <li><a href="">TV Shows</a><figure class="count">9</figure></li>
                                    <li><a href="">Music</a><figure class="count">1</figure></li>
                                    <li><a href="">Humor </a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-university"></i></div>
                                    <h3><a href="#">Government</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Elections</a><figure class="count">3</figure></li>
                                    <li><a href="">Military</a><figure class="count">2</figure></li>
                                    <li><a href="">Law</a><figure class="count">6</figure></li>
                                    <li><a href="">Taxes</a><figure class="count">7</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-heart"></i></div>
                                    <h3><a href="#">Health</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Disease</a><figure class="count">1</figure></li>
                                    <li><a href="">Drugs</a><figure class="count">5</figure></li>
                                    <li><a href="">Fitness</a><figure class="count">4</figure></li>
                                    <li><a href="">Nutrition </a><figure class="count">8</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                        
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end categories-list-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        
        <!--end block-->
        <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Promoted Locations</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Promote yours</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="6" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
                    <!--end item-->

                     @foreach ($listings as $listing)
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>{{ $listing->listing_title }}</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/mini.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="4">
                                    <span class="stars"></span>
                                    <span class="reviews">6</span>
                                </div>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                  @endforeach

                    
                    <!--end item-->
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-default"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        
        <!--end block-->

        
        <!--end block-->
        
        <!--end block-->

        <div class="container">
            <hr>
        </div>
        <!--end container-->

        
        <!--end block-->
    </div>
@endsection