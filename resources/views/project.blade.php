@extends('layout.app')
@section('content')

<section id="background1" class="">
    <div class="container dir-ho-t-sp">
        <div class="row">
            <div class="dir-hr1">
                <div class="dir-ho-t-tit dir-ho-t-tit-2">
                    <h1 style="font-color: blue;"> Find your idea Properties </h1>
                    <p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p>
                </div>
                    <form class="tourz-search-form">
                        <div class="input-field">
                            <input type="text" id="select-city" class="autocomplete">
                            <label for="select-city">Enter city</label>
                        </div>
                        <div class="input-field">
                            <input type="text" id="select-search" class="autocomplete">
                            <label for="select-search" class="search-hotel-type">Search your services like hotel, resorts, events and more</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                    </form>
            </div>
        </div>
    </div>
</section>
<!--FIND YOUR SERVICE-->
<section class="cat-v2-hom com-padd mar-bot-red-m30">
    <div class="container">
        <div class="row">
            <div class="com-title">
                <h2>Find your <span>Services</span></h2>
                <p>Explore some of the best business from around the world from our partners and friends.</p>
            </div>
            <div class="cat-v2-hom-list">
                <ul>
                    <li>
                        <a href="#"><img src="images/icon/hcat1.png" alt=""> Hospitals</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon/hcat2.png" alt=""> Hotel & Resort</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon/hcat3.png" alt=""> Events</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon/hcat4.png" alt=""> Wedding Halls</a>
                    </li>
                    <li>
                        <a href="#"><img src="images/icon/hcat5.png" alt=""> Shops</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!--EXPLORE CITY LISTING-->
<section class="com-padd com-padd-redu-top">
    <div class="container">
        <div class="row">
            <div class="com-title">
                <h2>Explore your <span>City Listings</span></h2>
                <p>Explore some of the best business from around the world from our partners and friends.</p>
            </div>
            <div class="col-md-6">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="images/listing/home.jpg" alt="" /> </div>
                        <div class="list-mig-lc-con">
                            <div class="list-rat-ch list-room-rati"> <span>4.0</span> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star-o" aria-hidden="true"></i> </div>
                            <h5>United States</h5>
                            <p>21 Cities . 2045 Listings . 3648 Users</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="images/listing/home2.jpg" alt="" /> </div>
                        <div class="list-mig-lc-con list-mig-lc-con2">
                            <h5>United Kingdom</h5>
                            <p>18 Cities . 1454 Listings</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="images/listing/home3.jpg" alt="" /> </div>
                        <div class="list-mig-lc-con list-mig-lc-con2">
                            <h5>Australia</h5>
                            <p>14 Cities . 1895 Listings</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="images/listing/home4.jpg" alt="" /> </div>
                        <div class="list-mig-lc-con list-mig-lc-con2">
                            <h5>Germany</h5>
                            <p>12 Cities . 1260 Listings</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="images/listing/home1.jpg" alt="" /> </div>
                        <div class="list-mig-lc-con list-mig-lc-con2">
                            <h5>India</h5>
                            <p>24 Cities . 4152 Listings</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--ADD BUSINESS-->
<section class="com-padd home-dis">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><span>30% Off</span> Promote Your Business with us <a href="price.html">Add My Business</a></h2> </div>
        </div>
    </div>
</section>
<!--BEST THINGS-->
<section class="com-padd com-padd-redu-bot1">
    <div class="container dir-hom-pre-tit">
        <div class="row">
            <div class="com-title">
                <h2>Top Trendings for <span>your City</span></h2>
                <p>Explore some of the best tips from around the world from our partners and friends.</p>
            </div>
            <div class="col-md-12">
                {{-- @foreach ($listings as $listing) --}}
                <div class="col-md-6">
                    <!--POPULAR LISTINGS-->
                    <div class="home-list-pop">
                        <!--POPULAR LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/tr1.jpg" alt="" /> </div>
                        <!--POPULAR LISTINGS: CONTENT-->
                        {{-- <div class="col-md-9 home-list-pop-desc"> <a href="automobile-listing-details.html"><h3>{{ $listing->listing_title }}</h3></a> --}}
                            {{-- <h4>{{ $listing->address }}</h4> --}}
                            {{-- <p> {{ $listing->region }}  </p> <span class="home-list-pop-rat">4.2</span> --}}
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="#!"><i class="fa fa-bar-chart" aria-hidden="true"></i> 52</a> </li>
                                    <li><a href="#!"><i class="fa fa-heart-o" aria-hidden="true"></i> 32</a> </li>
                                    <li><a href="#!"><i class="fa fa-eye" aria-hidden="true"></i> 420</a> </li>
                                    <li><a href="#!"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--POPULAR LISTINGS-->

                </div>
                {{-- @endforeach --}}
                <div class="center">
                    <a href="{{ route('listing.index') }}" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            </div>

        </div>
    </div>
</section>

<div id="page-content">

        <!--end hero-section-->

        <!--end block-->
        <div class="container"><hr></div>

        <div class="container">
            <hr>
        </div>
        <!--end container-->


        <!--end block-->
    </div>
@endsection
