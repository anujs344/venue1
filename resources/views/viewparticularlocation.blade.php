<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 17:32:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Find A Wedding Venue &amp; Supplier WordPress Theme - List Single</title>
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{asset('assets/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{asset('assets/fontello/css/fontello.css')}}" rel="stylesheet">
    <!--jquery-ui  -->
    <link href="{{asset('assets/css/jquery-ui.css')}}" rel="stylesheet">
    <!--jquery-rateyo  -->
    <link href="{{asset('assets/css/jquery.rateyo.css')}}" rel="stylesheet">
    <!-- Template magnific popup gallery -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- OwlCarosuel CSS -->
    <link href="{{asset('assets/css/owl.carousel.css')}}" type="text/css" rel="stylesheet">
    <link href="{{asset('assets/css/owl.theme.default.css')}}" type="text/css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    @include('layouts.welcome.header')
    <div class="list-single-carousel">
        <div class="owl-carousel owl-theme owl-slider">
            <div class="item">
                <img src="{{asset('assets/images/listsingle-slider-img-1.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('assets/images/listsingle-slider-img-2.jpg')}}" alt="">
            </div>
            <div class="item">
                <img src="{{asset('assets/images/listsingle-slider-img-3.jpg')}}" alt="">
            </div>
             <div class="item">
                <img src="{{asset('assets/images/listsingle-slider-img-4.jpg')}}" alt="">
            </div>
          
          
           
        </div>
    </div>
    <div class="list-single-second">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="vendor-head text-left">
                            <h2 class="mb10">{{$singlecategory->title}}</h2>
                            <p class="vendor-address">{{$singlecategory->address}} <a href="#location" class="btn-secondary-link ml-2">View Map</a> </p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="vendor-head text-xl-right">
                            <a href="#" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vendor-meta bg-white border m-0 ">
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="vendor-price">
                                    {{$singlecategory->price}}
                                </span>
                    <span class="vendor-text">Start From</span></div>
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="vendor-guest">
                                    {{$singlecategory->seat_capacity}}
                                </span>
                    <span class="vendor-text">Guest</span>
                </div>
                <div class="vendor-meta-item vendor-meta-item-bordered">
                    <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                    <span class="rating-count vendor-text">(20)</span>
                </div>
            </div>
        </div>
    </div>
<div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                    <!--vendor-details -->
                   
                    <div class="">
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">About Wedding Venue</h3>
                            <div class="card-body">
                                <!--/.vendor-details -->
                                <!--vendor-description -->
                                <p class="lead">{{$singlecategory->description}}</p>
                                <!--venue-highlights -->
                                <div class="venue-highlights">
                                    <div class=" table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Venue Highlights</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Maximum Capacity</td>
                                                    <td class="venue-highlight-meta">{{$singlecategory->seat_capacity}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Guest Minimum</td>
                                                    <td class="venue-highlight-meta">40</td>
                                                </tr>
                                                <tr>
                                                    <td>Style</td>
                                                    <td class="venue-highlight-meta">Barn, Mansion, Winery</td>
                                                </tr>
                                                <tr>
                                                    <td>Event Spaces</td>
                                                    <td class="venue-highlight-meta">Outdoorsy, Rustic/Country, Unique</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.venue-highlights -->
                            </div>
                        </div>
                        <!--vendor-description -->
                        <!-- aminities-block -->
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">Accommodations / Amenities Included</h3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="animities-list">
                                            <ul class="list-unstyled arrow">
                                                <li>Air conditioning</li>
                                                <li>Bathroom</li>
                                                <li>Hair Dryer</li>
                                                <li>Kitchen</li>
                                                <li>Linen supplied</li>
                                                <li>Non-smoking</li>
                                                <li>Open fireplace </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                                        <div class="animities-list">
                                            <ul class="list-unstyled arrow">
                                                <li> Parking</li>
                                                <li>Pet-friendly </li>
                                                <li>Towels supplied </li>
                                                <li>TV</li>
                                                <li>Washing machine</li>
                                                <li>Wheelchair</li>
                                                <li>Access Wifi</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <!-- /.review-content -->
                    <!-- review-form -->
                    <!-- /.review-block -->
                    
                    <!-- /.review-form -->
                    <!-- location -->
                    
                </div>
                <!-- /.location -->
                <!-- list-sidebar -->
                <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                    <div class="sidebar-venue">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <h3 class="mb20">Request Quote</h3>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="name1">Name</label>
                                                <input id="name1" name="name1" type="text" placeholder="Name" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="email2">Email</label>
                                                <input id="email2" name="email2" type="text" placeholder="Email" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class=" control-label sr-only" for="phone">Phone</label>
                                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required="">
                                            </div>
                                        </div>
                                        <!-- Text input-->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="weddingdate">Wedding Date</label>
                                                <input id="weddingdate" name="weddingdate" type="text" placeholder="Wedding Date" class="form-control input-md" required="">
                                                <div class="venue-form-calendar"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                        <!-- Textarea -->
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <label class="control-label sr-only" for="comments">Comment</label>
                                                <textarea class="form-control" id="comments" name="comments" rows="5" placeholder="Write Comment"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-default btn-block">Submit Quote</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- venue-admin -->
                        
                        <!-- /.social-media -->
                    </div>
                </div>
            </div>
            <!-- /.list-sidebar -->
        </div>
    </div>
    <!-- vendor-thumbnail section -->
    <div class="space-small">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Similar Vendor</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="#"><img src="{{asset('assets/images/vendor-img-1.jpg')}}" alt="" class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                            <p class="vendor-address">Ahmedabad, Gujarat.</p>
                        </div>
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-price">
                                    $150
                                </span>
                                <span class="vendor-text">Start From</span></div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-guest">
                                    120+
                                </span>
                                <span class="vendor-text">Guest</span>
                            </div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                <span class="rating-count vendor-text">(20)</span></div>
                        </div>
                        <!-- /.Vendor Content -->
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="#"><img src="{{asset('assets/images/vendor-img-2.jpg')}}" alt=""  class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                            <p class="vendor-address">Surat, Gujarat</p>
                        </div>
                        <!-- /.Vendor Content -->
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-price">
                                    $150
                                </span>
                                <span class="vendor-text">Start From</span></div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-guest">
                                    120+
                                </span>
                                <span class="vendor-text">Guest</span>
                            </div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                <span class="rating-count vendor-text">(20)</span></div>
                        </div>
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="#"><img src="{{asset('assets/images/vendor-img-3.jpg')}}" alt=""  class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="#" class="title">Wedding Venue Title Name</a></h2>
                            <p class="vendor-address">Rajkot, Gujarat</p>
                        </div>
                        <!-- /.Vendor Content -->
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-price">
                                    $150
                                </span>
                                <span class="vendor-text">Start From</span></div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-guest">
                                    120+
                                </span>
                                <span class="vendor-text">Guest</span>
                            </div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                <span class="rating-count vendor-text">(20)</span></div>
                        </div>
                    </div>
                    <!-- /.Vendor thumbnail -->
                </div>
            </div>
        </div>
    </div>
    @include('layouts.welcome.footer')

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
   
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-script.js')}}"></script>
    <!-- popup gallery -->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script>
    function initMap() {
        var uluru = {
            lat: 23.0732195,
            lng: 72.5646902
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map,
            icon: 'images/map-pin.png'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="{{asset('assets/js/jquery.rateyo.min.js')}}"></script>
    <script>
    $(function() {

        $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
            rating: 3.6
        });

    });
    </script>
    <script src="{{asset('assets/js/return-to-top.js')}}"></script>
</body>
</html>