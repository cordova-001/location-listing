@extends('layout.app')
@section('content')
<div id="page-content">
        <div class="hero-section has-background height-600px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <h1>Best Deals in One Place</h1>
                            <h2>With Locations you can find the best deals in your location</h2>
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
                <div class="bg-transfer opacity-30"><img src="assets/img/background-01.jpg" alt=""></div>
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
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="1">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Average Price: $8 - $30</figure>
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Marky’s Restaurant</h3>
                                    <h4>63 Birch Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/1.jpg" alt="">
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
                    <!--<end col-md-3-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="2">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Restaurant</div>
                                    <h3>Ironapple</h3>
                                    <h4>4209 Glenview Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/2.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="3">
                                    <span class="stars"></span>
                                    <span class="reviews">13</span>
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
                    <!--<end col-md-3-->
                    <div class="col-md-6 col-sm-6">
                        <div class="item" data-id="15">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Happy hour: 18:00 - 19:00</figure>
                                    <div class="label label-default">Bar & Grill</div>
                                    <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                    <h4>3857 Losh Lane</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/3.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">56</span>
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
                    <!--<end col-md-3-->
                    <div class="col-md-4 col-sm-4">
                        <div class="item" data-id="3">
                            <figure class="ribbon">Top</figure>
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Starts at: 19:00</figure>
                                    <div class="label label-default">Event</div>
                                    <h3>Food Festival</h3>
                                    <h4>840 My Drive</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/4.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <figure class="circle" title="Featured"><i class="fa fa-check"></i></figure>
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">12</span>
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
                    <!--<end col-md-4-->
                    <div class="col-md-3 col-sm-3">
                        <div class="item" data-id="4">
                            <a href="detail.html">
                                <div class="description">
                                    <div class="label label-default">Lounge</div>
                                    <h3>Cosmopolit</h3>
                                    <h4>2896 Ripple Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/5.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="5">
                                    <span class="stars"></span>
                                    <span class="reviews">43</span>
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
                    <!--<end col-md-3-->
                    <div class="col-md-5 col-sm-5">
                        <div class="item" data-id="6">
                            <a href="detail.html">
                                <div class="description">
                                    <figure>Free entry</figure>
                                    <div class="label label-default">Concert</div>
                                    <h3>Stand Up Show</h3>
                                    <h4>371 Kinney Street</h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="assets/img/items/6.jpg" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <div class="rating-passive" data-rating="0">
                                    <span class="stars"></span>
                                    <span class="reviews">0</span>
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
                    <!--<end col-md-3-->
                </div>
                <!--end row-->
                <div class="center">
                    <a href="listing.html" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
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
                        <div class="col-md-3 col-sm-3">
                            <div class="list-item">
                                <div class="title">
                                    <div class="icon"><i class="fa fa-newspaper-o"></i></div>
                                    <h3><a href="#">News & Media</a></h3>
                                </div>
                                <!--end title-->
                                <ul>
                                    <li><a href="">Newspapers</a><figure class="count">5</figure></li>
                                    <li><a href="">Radio</a><figure class="count">9</figure></li>
                                    <li><a href="">Weather</a><figure class="count">3</figure></li>
                                    <li><a href="">Blogs</a><figure class="count">4</figure></li>
                                </ul>
                            </div>
                            <!--end list-item-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
                </div>
                <!--end categories-list-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->
        <section class="block big-padding">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                        <h3>Subscribe and be notified about new locations</h3>
                    </div>
                    <!--end element-->
                    <div class="element width-50">
                        <form class="form inputs-underline form-email" id="form-subscribe">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end element-->
                </div>
                <!--end vertical-aligned-elements-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </section>
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
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Restaurant</div>
                                <h3>Marky’s Restaurant</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/1.jpg" alt="">
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
                    <div class="item featured" data-id="23">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Starts from: $14.99</figure>
                                <div class="label label-default">Trip</div>
                                <h3>Nascar Racing</h3>
                                <h4>london Airport</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/11.jpg" alt="">
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
                    <div class="item featured" data-id="3">
                        <a href="detail.html">
                            <div class="description">
                                <figure>
                                    <span><i class="fa fa-calendar"></i>12.08.2016</span>
                                    <span><i class="fa fa-clock-o"></i>08:00</span>
                                </figure>
                                <div class="label label-default">Event</div>
                                <h3>Food Festival</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/4.jpg" alt="">
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
                    <div class="item featured" data-id="4">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Lounge</div>
                                <h3>Cosmopolit</h3>
                                <h4>4696 Jim Rosa Lane</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/5.jpg" alt="">
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
                    <div class="item featured" data-id="6">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Event</div>
                                <h3>Stand Up Show</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/6.jpg" alt="">
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
                    <div class="item featured" data-id="8">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Get to know yor town!</figure>
                                <div class="label label-default">Event</div>
                                <h3>City Tour</h3>
                                <h4>63 Birch Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/10.jpg" alt="">
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
                    <div class="item featured" data-id="5">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Real Estate</div>
                                <h3>Beautiful Luxury Villa</h3>
                                <h4>59 Water Street</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/28.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="3">
                                <span class="stars"></span>
                                <span class="reviews">12</span>
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
                    <div class="item featured" data-id="7">
                        <a href="detail.html">
                            <div class="description">
                                <figure>Average Price: $8 - $30</figure>
                                <div class="label label-default">Bar</div>
                                <h3>Fiesta Bar</h3>
                                <h4>3524 Bryan Avenue</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/12.jpg" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <div class="rating-passive" data-rating="5">
                                <span class="stars"></span>
                                <span class="reviews">17</span>
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
                    <div class="item featured" data-id="1">
                        <a href="detail.html">
                            <div class="description">
                                <div class="label label-default">Adrenaline</div>
                                <h3>Senior C# Developer</h3>
                                <h4>ERF Solutions</h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="assets/img/items/16.jpg" alt="">
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