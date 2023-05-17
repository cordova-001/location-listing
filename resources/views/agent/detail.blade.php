@extends('layout.app')
@section('content')
<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Contact</li>
            </ol>
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <h1>Jane Doe</h1>
                    </section>
                    <!--end section-title-->
                    <section>
                        <div class="subject-detail">
                            <div class="image">
                                <div class="bg-transfer">
                                    <img src="assets/img/person-01-big.jpg" alt="">
                                </div>
                            </div>
                            <div class="description">
                                <section class="name">
                                    <h3>Jane Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam facilisis aliquam finibus. Nullam at ante et nulla vehicula euismod ut eget urna.</p>
                                </section>
                                <!--end description-->
                                <section class="contacts">
                                    <figure><i class="fa fa-phone"></i>(123) 456 789</figure>
                                    <figure><a href="#"><i class="fa fa-envelope"></i>jane.doe@example.com</a></figure>
                                </section>
                                <!--end contacts-->
                                <section class="social">
                                    <a href="#"><i class="social_twitter"></i></a>
                                    <a href="#"><i class="social_facebook"></i></a>
                                    <a href="#"><i class="social_youtube"></i></a>
                                </section>
                                <!--end social-->
                            </div>
                            <!--end description-->
                        </div>
                        <!--end subject-detail-->
                    </section>
                    <section>
                        <h2>My Listings</h2>
                        <section>
                            <h3>Featured Listings</h3>
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
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
                                <div class="col-md-4 col-sm-4">
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
                                <div class="col-md-4 col-sm-4">
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
                            </div>
                        </section>
                        <section>
                            <h3>All Listings</h3>
                            <div class="item item-row" data-id="1" data-latitude="40.72807182" data-longitude="-73.85735035">
                                <a href="detail.html">
                                    <div class="image bg-transfer">
                                        <figure>Average Price: $8 - $30</figure>
                                        <img src="assets/img/items/1.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                    <div class="map"></div>
                                    <div class="description">
                                        <h3>Marky’s Restaurant</h3>
                                        <h4>63 Birch Street</h4>
                                        <div class="label label-default">Restaurant</div>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="4">
                                            <span class="stars"></span>
                                            <span class="reviews">6</span>
                                        </div>
                                    </div>
                                    <!--end additional-info-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item.row-->
                            <div class="item item-row" data-id="2" data-latitude="40.73925841" data-longitude="-73.85348797">
                                <a href="detail.html">
                                    <div class="image bg-transfer">
                                        <img src="assets/img/items/2.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                    <div class="map"></div>
                                    <div class="description">
                                        <h3>Ironapple</h3>
                                        <h4>4209 Glenview Drive</h4>
                                        <div class="label label-default">Restaurant</div>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">8</span>
                                        </div>
                                    </div>
                                    <!--end additional-info-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item.row-->
                            <div class="item item-row" data-id="15" data-latitude="40.73659201" data-longitude="-73.80778313">
                                <figure class="ribbon">Top</figure>
                                <a href="detail.html">
                                    <div class="image bg-transfer">
                                        <figure>Happy hour: 18:00 - 19:00</figure>
                                        <img src="assets/img/items/3.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                    <div class="map"></div>
                                    <div class="description">
                                        <h3>Bambi Planet Houseboat Bar& Grill </h3>
                                        <h4>3857 Losh Lane</h4>
                                        <div class="label label-default">Bar & Grill</div>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="3">
                                            <span class="stars"></span>
                                            <span class="reviews">8</span>
                                        </div>
                                    </div>
                                    <!--end additional-info-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item.row-->
                            <div class="item item-row" data-id="3" data-address="Forest Hills, Queens, NY 11375, USA">
                                <a href="detail.html">
                                    <div class="image bg-transfer">
                                        <figure>Starts at 19:00</figure>
                                        <img src="assets/img/items/4.jpg" alt="">
                                    </div>
                                    <!--end image-->
                                    <div class="map"></div>
                                    <div class="description">
                                        <h3>Food Festival</h3>
                                        <h4>23 Hillhaven Drive</h4>
                                        <div class="label label-default">Event</div>
                                    </div>
                                    <!--end description-->
                                    <div class="additional-info">
                                        <div class="rating-passive" data-rating="5">
                                            <span class="stars"></span>
                                            <span class="reviews">4</span>
                                        </div>
                                    </div>
                                    <!--end additional-info-->
                                </a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item.row-->
                        </section>
                    </section>
                </div>
                <!--end col-md-9-->

                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Search Filter</h2>
                            <form class="form inputs-underline">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="location">
                                        <option value="">Location</option>
                                            <option value="1">New York</option>
                                            <option value="2">Washington</option>
                                            <option value="3">London</option>
                                            <option value="4">Paris</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="category">
                                        <option value="">Category</option>
                                            <option value="1">Restaurant</option>
                                            <option value="2">Event</option>
                                            <option value="3">Adrenaline</option>
                                            <option value="4">Sport</option>
                                            <option value="5">Wellness</option>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <input type="text" class="form-control date-picker" name="min-price" placeholder="Event Date">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
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
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </section>
                        <section>
                            <h2>Recent Items</h2>
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
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--end item-->
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
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item-->
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
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Add to watchlist</a></li>
                                        <li><a href="#" class="quick-detail">Quick detail</a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end item-->
                        </section>
                    </aside>
                    <!--end sidebar-->
                </div>
                <!--end col-md-4-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
@endsection