<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 17:30:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="wedding vendor directory HTML template">
  	 
    <title> Wedding Vendor &amp; Supplier Directory HTML Template - RealWed </title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{asset('assets/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{asset('assets/fontello/css/fontello.css')}}" rel="stylesheet">
    <!-- OwlCarosuel CSS -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.css')}}" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    
</head>

<body>
  <!-- header -->
    @include('layouts.welcome.header')
    <!-- hero-section -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12">
                    <!-- search-block -->
                    <div class="">
                        <div class="text-center search-head">
                            <h1 class="search-head-title">Indias First Wedding Marketplace</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Browse from our select veneus and service providers, we ensure timely and honest diliveries for couples, our team of experts help you planned execute your dream wedding</p>
                        </div>
                        <!-- /.search-block -->
                        <!-- search-form -->
                        <div class="search-form">
                            <form class="form-row">
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide">
                                        <option value="Venue Type">Vendor Type</option>
                                        <option value="Venue">Venue</option>
                                        <option value="Florist">Florist</option>
                                        <option value="Cake">Cake</option>
                                        <option value="Photographer">Photographer</option>
                                        <option value="Catering">Catering</option>
                                        <option value="Dress">Dress</option>
                                    </select>
                                </div>
                                <div class="col-xl-5 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- select -->
                                    <select class="wide">
                                        <option value="Ahmedabad" data-display="Ahmedabad">Ahmedabad</option>
                                        <option value="Surat">Surat</option>
                                        <option value="Rajkot">Rajkot</option>
                                        <option value="Vadodara">Vadodara</option>
                                        <option value="Vapi">Vapi</option>
                                        <option value="Bhavnagar">Bhavnagar</option>
                                    </select>
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-4 col-md-4 col-sm-12 col-12">
                                    <button class="btn btn-default btn-block" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.hero-section -->
    <!-- feature-section -->
    <div class="bg-white space-large">
        <div class="container">
            <div class="row">
                <!-- feature-1 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-wedding-arch"></i></div>
                    <h3>Wedding Venue Booking</h3>
                    <p>Book from selected partner properties and book it on the go.</p>
                </div>
                <!-- /.feature-1 -->
                <!-- feature-2 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-051-love-birds"></i></div>
                    <h3>350+ Real Wedding Success</h3>
                    <p>Over 15 years of experience in wedding planning and event management.</p>
                </div>
                <!-- /.feature-2 -->
                <!-- feature-3 -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default"><i class="icon-017-location"></i></div>
                    <h3>Wedding Planning Services</h3>
                    <p>Use our propriotery software to help you plan your wedding day.</p>
                </div>
                <!-- /.feature-3 -->
            </div>
        </div>
    </div>
    
    <div class="space-small">
        <div class="container-fluid">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">Wedding Venues</h2>
                        <p>Choose as per your needs from hundreds of partner properties, Just book the Venue and we will get in touch with you.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- venue-categoris-block-->
                @foreach ($vendorcategories as $category)
                
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="venue-categories-block zoomimg">
                        <div class="venue-categories-img"> <a href="{{route('showsingleviewcategory',$category)}}"><img src="{{asset('assets/images/venue_categories_img_1.jpg')}}" alt="" class="img-fluid"></a>
                            <div class="venue-categories-overlay">
                                <h3 class="mb0"><a href="{{route('showsingleviewcategory',$category)}}" class="venue-categories-title">{{$category}}</a></h3>
                            </div>
                        </div>
                    </div>
                    <!-- /.venue-categoris-block-->
                </div>              

                @endforeach
                                
            </div>
            <!-- venue-categoris-btn -->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center mt60"><a href="#" class="btn btn-default btn-lg">View All category</a></div>
            </div>
            <!-- /.venue-categoris-btn -->
        </div>
        <!-- /.venue-categoris-section-->
        <!-- real-wedding-section-->
  
    </div>
    <!-- /.real-wedding-section-->
    <!-- feature-section-->
    <div class="bg-white space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <!-- section title start-->
                        <h2 class="mb10">How it Works</h2>
                        <p>Simple and easy step to get started your wedding planning.</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Venue Booking</h3>
                            <p>Search from hundreds of listed venues across India.                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Wedding Planning Tools</h3>
                            <p>Wedding Planning tools for RSVP, Vendor and Event Planning.</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
                <!-- feature-block-->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="feature feature-icon-block">
                        <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                        <div class="feature-content">
                            <h3 class="mb-3">Celebrate Wedding Day</h3>
                            <p>Live stream your wedding to family on private links.</p>
                        </div>
                    </div>
                </div>
                <!-- /.feature-block-->
            </div>
        </div>
    </div>
    <!-- /.feature-section-->
    <!-- blog-post-section -->
    
    <!-- /.blog-post-section -->
    <!-- social-media-section -->
    <div class="social-media-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-6 col-12">
                    <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6 col-12 text-right">
                    <div class="social-icons">
                        <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.social-media-section -->
    <!-- footer-section -->
    @include('layouts.welcome.footer')
    <!-- /.tiny-footer-section -->
<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<!-- owl-carousel js -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<!-- nice-select js -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/fastclick.js')}}"></script>
<script src="{{asset('assets/js/custom-script.js')}}"></script>
<script src="{{asset('assets/js/return-to-top.js"')}}"></script>
</body>



</html>