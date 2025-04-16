@extends('layout.app')
@section('content')

<section id="background1" class="">
    <div class="container dir-ho-t-sp">
        <div class="row">
            <div class="dir-hr1">
                <div class="dir-ho-t-tit dir-ho-t-tit-2">
                    <h1 style="font-color: blue;"> Your Smart Properties Management System </h1>
                    {{-- <p>Find B2B & B2C businesses contact addresses, phone numbers,<br> user ratings and reviews.</p> --}}
                {{-- </div>
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
            </div> --}}
            <div class="row">
				<div class="col-md-12">
					<div class="pg-elem" style="background: purple;">
						{{-- <h3>Variable Width Tabs</h3> <span>Local directory is the smartest way to find the best services for all your works</span> --}}
						<div class="pg-elem-inn ele-btn">
							<div>
								<ul class="tabs pg-ele-tab">
									<li class="tab col s3"><a class="active" href="#test1">Rent </a> </li>
									<li class="tab col s3"><a  href="#test2"> Sale </a> </li>
									<li class="tab col s3"><a href="#test3">  Project </a> </li>
									<li class="tab col s3"><a href="#test4"> Services </a> </li>
								</ul>
							</div>
							<div id="test1" class="col s12">
								<p> 
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
                                </p>
							</div>
							<div id="test2" class="col s12">
								<p> 
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
                                </p>
							</div>
							<div id="test3" class="col s12">
								<p> 
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
                                </p>
							</div>
							<div id="test4" class="col s12">
								<p> 
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
                                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>

<section class="proj mar-bot-red-m30">
    <div class="container">
        <div class="row">
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: purple;">
                <div class="hom-pro"  style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4>24 Million Business</h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: purple;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4>1,200 Services Offered</h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: purple;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4>05 Million Visitors</h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
            </div>
            <!--HOME PROJECTS: 1-->
            <div class="col-md-3 col-sm-6" style="border-radius: 45px; background-color: purple;">
                <div class="hom-pro" style="background-color: rgb(232, 240, 245); border-radius: 20px;"> <img src="images/icon/office.jpeg" alt="" />
                    <h4>24 Million Business</h4>
                    <p>Choose from a collection of handpicked luxury villas & apartments</p> <a href="#!">Explore Now</a> </div>
            </div>
        </div>
    </div>
</section>
<!--FIND YOUR SERVICE-->
<section class="com-padd quic-book-ser-full">
    <div class="container">
        <div class="row">
            <div class="com-title">
                <br>
                <h2>Find your <span>Services</span></h2>
                <p>Explore some of the best business from around the world from our partners and friends.</p>
            </div>
            <div class="dir-hli">
                <ul>
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <a href="list.html">
                            <div class="dir-hli-5">
                                <h3>Properties</h3>
                            </div>
                        </a>
                    </li>
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <h3>Marketing Partners</h3>
                        
                    </li>
                    <!--=====LISTINGS======-->
                    <li class="col-sm-4" style="border-radius: 20px; background-color: white;">
                        <a href="list-grid.html">
                            <div class="dir-hli-5">
                                <div class="dir-hli-1">
                                   
                            </div>
                        </a>
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
            <div class="col-md-6" style="border: 1px solid #ddd; border-radius: 20px;">
                <a href="list-lead.html">
                    <div class="list-mig-like-com">
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/office.jpeg') }}" alt="" /> </div>
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
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/office.jpeg') }}" alt="" /> </div>
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
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/office.jpeg') }}" alt="" /> </div>
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
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/office.jpeg') }}" alt="" /> </div>
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
                        <div class="list-mig-lc-img"> <img src="{{ asset('images/office.jpeg') }}" alt="" /> </div>
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
                <h2><span>30% Off</span> Promote Your Business with us <a href="">Add My Business</a></h2> </div>
        </div>
    </div>
</section>


<section class="com-padd quic-book-ser-full">
    <div class="quic-book-ser">
        <div class="quic-book-ser-inn">
            <div class="quic-book-ser-left">
                <div class="land-com-form">
                    <h2>Quick service request</h2>
                    <form>
                        <ul>
                            <li>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" required="">
                                        <label>Name</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate" required="">
                                        <label>Phone number</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="email" class="validate" required="">
                                        <label>Email id</label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" id="select-category1" class="autocomplete auto-category">
                                        <label for="select-category1" class="active">Select your Service</label>
                                    <ul class="autocomplete-content dropdown-content"></ul></div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Send Request">
                                    </div>
                                </div>
                            </li>
                            {{-- <li><p>Praesent felis velit, maximus at dapibus semper, fermentum sagittis diam. <a href="#">Privacy Policy</a></p></li> --}}
                        </ul>
                    </form>
                </div>
            </div>
            <div class="quic-book-ser-right">
                <div class="hom-cre-acc-left">
                    <h3>What service do you need? <span>BeeTech</span></h3>
                    <p>Tell us more about your requirements so that we can connect you to the right service provider.</p>
                    <ul>
                        <li> <img src="images/icon/7.png" alt="">
                            <div>
                                <h5>Tell us more about your requirements</h5>
                                <p>Imagine you have made your presence online through a local online directory, but your competitors have..</p>
                            </div>
                        </li>
                        <li> <img src="images/icon/5.png" alt="">
                            <div>
                                <h5>We connect with right service provider</h5>
                                <p>Advertising your business to area specific has many advantages. For local businessmen, it is an opportunity..</p>
                            </div>
                        </li>
                        <li> <img src="images/icon/6.png" alt="">
                            <div>
                                <h5>Happy with our service</h5>
                                <p>Your local business too needs brand management and image making. As you know the local market..</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
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
                @foreach ($listings as $listing)
                <div class="col-md-6">
                    <!--POPULAR LISTINGS-->
                    <div class="home-list-pop">
                        <!--POPULAR LISTINGS IMAGE-->
                        <div class="col-md-3"> <img src="images/services/tr1.jpg" alt="" /> </div>
                        <!--POPULAR LISTINGS: CONTENT-->
                        <div class="col-md-9 home-list-pop-desc"> <a href="automobile-listing-details.html"><h3>{{ $listing->listing_title }}</h3></a>
                            <h4>{{ $listing->address }}</h4>
                            <p> {{ $listing->region }}  </p> <span class="home-list-pop-rat">4.2</span>
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
                @endforeach
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
