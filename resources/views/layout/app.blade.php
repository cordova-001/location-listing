<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ThemeStarz">

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/jquery.nouislider.min.css" type="text/css">

    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">

    <title>Locations - Directory Listing by Ahmad Akorede</title>

</head>

<body class="subpage-detail">
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="index.html" class="brand"><img src="assets/img/logo.png" alt=""></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="active has-child"><a href="#nav-homepages">Home</a>
                            
                        </li>
                        

                        <li class="mega-menu-parent has-child"><a href="#nav-pages">Pages</a>
                            <div class="wrapper">
                                <div class="mega-menu">
                                    <div class="nav-wrapper" id="nav-pages">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">General</h4>
                                                    <ul>
                                                        
                                                        <li><a href="submit.html">Submit Listing</a></li>
                                                        <li><a href="detail.html">Listing Detail</a></li>
                                                        <li><a href="detail-2.html">Listing Detail v2</a></li>
                                                        <li><a href="agents-listing.html">Agents Listing</a></li>
                                                        <li><a href="agent-detail.html">Agent Detail</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                <div class="col-md-3 col-sm-3">
                                                    <h4 class="heading">User</h4>
                                                    <ul>
                                                        <li><a href="profile.html">Profile Edit</a></li>
                                                        <li><a href="sign-in.html">Sign In</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="reset-password.html">Reset Password</a></li>
                                                        <li><a href="my-listings.html">My Listings</a></li>
                                                        <li><a href="edit-listing.html">Edit Listing</a></li>
                                                        <li><a href="reviews.html">Reviews</a></li>
                                                    </ul>
                                                </div>
                                                <!--end col-md-3-->
                                                
                                                <!--end col-md-3-->
                                                
                                                <!--end col-md-3-->
                                            </div>
                                            <!--end row-->
                                        </div>
                                        <!--end container-->
                                    </div>
                                    <!--end collapse-->
                                </div>
                                <!--end wrapper-->
                            </div>
                            <!--end mega-menu-->
                        </li>
                        
                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->
                <div class="secondary-nav">
                    <a href="#" data-modal-external-file="modal_sign_in.php" data-target="modal-sign-in">Sign In</a>
                    <a href="#" class="promoted" data-modal-external-file="modal_register.php" data-target="modal-register">Register</a>
                </div>
                <!--end secondary-nav-->
                <a href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-modal-external-file="modal_submit.php" data-target="modal-submit"><i class="fa fa-plus"></i><span>Add listing</span></a>
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->


    @yield('content')

    <!--end page-content-->

    <footer id="page-footer">
        <div class="footer-wrapper">
            <div class="block">
                <div class="container">
                    
                    <div class="background-wrapper">
                        <div class="bg-transfer opacity-50">
                            <img src="assets/img/footer-bg.png" alt="">
                        </div>
                    </div>
                    <!--end background-wrapper-->
                </div>
            </div>
            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">(C) Application by Ahmad Akorede   </div>
                        <div class="element width-50 text-align-right">
                            <a href="index.html">Home</a>
                            <a href="listing-grid-right-sidebar.html">Listings</a>
                            <a href="submit.html">Submit Item</a>
                            <a href="contact.html">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/custom.js"></script>
<script type="text/javascript" src="assets/js/maps.js"></script>

<script>
    rating(".visitor-rating");
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-detail";
    simpleMap(_latitude,_longitude, element);
</script>

</body>

