@extends('layout.app')
@section('content')
<div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9">
                    <section class="page-title">
                        <div class="pull-left">
                            <h1>{{ $listings->listing_title }}</h1>
                            <h3>{{ $listings->category }}</h3>
                            <div class="rating-passive" data-rating="4">
                                <span class="stars"></span>
                                <span class="reviews">6</span>
                            </div>
                        </div>
                        <!--end page-title-->
                        <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Write a review</a>
                    </section>

                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <section>
                                <div class="">
                                    
                                        <div class="image">
                                            <div class=""><img src="{{ asset('assets/img/items/mini.jpg') }}" alt=""></div>
                                        </div>
                                        
                                   
                                    <!--end owl-carousel-->
                                </div>
                                <!--end gallery-->
                            </section>

                            <section>
                                <section>
                                    {{ $listings->description }}
                                </section>
                            </section>

                            <section>
                                <h2>Reviews</h2>
                                <div class="review">
                                    <div class="image">
                                        <div class="bg-transfer"><img src="assets/img/person-02.jpg" alt=""></div>
                                    </div>
                                    <div class="description">
                                        <figure>
                                            <div class="rating-passive" data-rating="4">
                                                <span class="stars"></span>
                                                <span class="reviews">6</span>
                                            </div>
                                            <span class="date">09.05.2016</span>
                                        </figure>
                                        <p>Donec nec tristique sapien. Aliquam ante felis, sagittis sodales diam sollicitudin, dapibus semper turpis</p>
                                    </div>
                                </div>
                                <!--end review-->
                                <div class="review">
                                    <div class="image">
                                        <div class="bg-transfer"><img src="assets/img/person-01.jpg" alt=""></div>
                                    </div>
                                    <div class="description">
                                        <figure>
                                            <div class="rating-passive" data-rating="5">
                                                <span class="stars"></span>
                                                <span class="reviews">6</span>
                                            </div>
                                            <span class="date">09.05.2016</span>
                                        </figure>
                                        <p>Vestibulum vel est massa. Integer pellentesque non augue et accumsan. Maecenas molestie elit nibh,
                                            vel vestibulum leo condimentum quis. Duis ac orci a magna auctor vehicula.
                                        </p>
                                    </div>
                                </div>
                                <!--end review-->
                            </section>

                            <section id="write-a-review">
                                <h2>Write a Review</h2>
                                <form class="clearfix form inputs-underline" method="post" action="">
                                    <div class="box" style="border: 1px solid;">
                                        <div class="comment">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="comment-title">
                                                        <h4>Review your experience</h4>
                                                    </div>
                                                    <!--end title-->
                                                    <div class="form-group">
                                                        <label for="name">Name<em>*</em></label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Beautiful place!" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <input type="text"  hidden id="name" name="listing_id" value="{{ $listings->id }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="name">Title of your review<em>*</em></label>
                                                        <input type="text" class="form-control" id="name" name="title" placeholder="Beautiful place!" required="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message">Your Message<em>*</em></label>
                                                        <textarea class="form-control" id="message" rows="8" name="message" required="" placeholder="Describe your experience"></textarea>
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                                
                                                <!--end col-md-4-->
                                            </div>
                                            <!--end row-->
                                            <br>
                                            <div class="form-group pull-right">
                                                <button type="submit" class="btn btn-primary btn-rounded">Send Review</button>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end comment-->
                                    </div>
                                    <!--end review-->
                                </form>
                                <!--end form-->
                            </section>
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-4 col-sm-12">
                            <section>
                                <div class="detail-sidebar">
                                    <section class="shadow">
                                        <div class="map height-250px" id="map-detail"></div>
                                        <!--end map-->
                                        <div class="content">
                                            <div class="vertical-aligned-elements">
                                                <div class="element"><img src="assets/img/logo-2.png" alt=""></div>
                                                <div class="element text-align-right"><a href="#" class="btn btn-primary btn-rounded btn-xs">Claim</a></div>
                                            </div>
                                            <hr>
                                            <address>
                                                <figure><i class="fa fa-map-marker"></i>{{ $listings->address }} </figure>
                                                <figure><i class="fa fa-envelope"></i><a href="#">{{ $listings->email }}</a></figure>
                                                <figure><i class="fa fa-phone"></i>{{ $listings->phone }}</figure>
                                                <figure><i class="fa fa-globe"></i><a href="#">{{ $listings->website }}</a></figure>
                                            </address>
                                        </div>
                                    </section>
                                </div>
                                <!--end detail-sidebar-->
                            </section>
                            <section>
                                <h2>Features</h2>
                                <ul class="tags">
                                    <li>Wi-Fi</li>
                                    <li>Parking</li>
                                    <li>TV</li>
                                    <li>Alcohol</li>
                                    <li>Vegetarian</li>
                                    <li>Take-out</li>
                                    <li>Balcony</li>
                                </ul>
                            </section>
                            <section>
                                <h2>Social Share</h2>
                                <div class="social-share">{{ $listings->video_url }}</div>
                                <div class="social-share">{{ $listings->facebook }}</div>
                                <div class="social-share">{{ $listings->twitter }}</div>
                                <div class="social-share">{{ $listings->youtube }}</div>
                                <div class="social-share">{{ $listings->pinterest }}</div>
                            </section>
                        </div>
                        <!--end col-md-3-->
                    </div>
                    <!--end row-->
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
                <!--end col-md-3-->
            </div>
        </div>
        <!--end container-->
    </div>
@endsection