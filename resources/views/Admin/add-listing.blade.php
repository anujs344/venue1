<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>Listeo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/main-color.css')}}" id="colors">
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- FontAwesome icon -->
    <link href="{{asset('assets/fontawesome/css/fontawesome-all.css')}}" rel="stylesheet">
    <!-- Fontello icon -->
    <link href="{{asset('assets/fontello/css/fontello.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/summernote-bs4.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
    <!-- Style CSS -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/offcanvas.css')}}">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
@include('layouts.Admin.header')
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>
	
	@include('layouts.Admin.sidebar')
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">

		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<div class="card">
			<div class="card-header"> <h4 class="mb0">About Listing</h4> <p>
				@if(Session::has('message'))
				{{ Session::get('message') }}
			@endif
			</p></div>
			<div class="">
				<form method="post" action="{{route('postaddlistingadmin')}}" enctype="multipart/form-data">
					@csrf
					<!-- Form Name -->
					<div class="venue-form-info card-body">
						<div class="row">
						   
							<!-- Text input-->
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="title">Title</label>
									<input id="title" name="title" type="text" placeholder="Title" class="form-control ">@error('title')
										{{$message}}
									@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<!-- Select Basic -->
								<div class="form-group">
									<label class="control-label" for="Category">Category</label>
									<select class="wide" name="category" id="Category">
										<option value="Select Category">Select Category</option>
										<option value="Hotel">Hotel</option>
										<option value="Restaurant">Restaurant</option>
										<option value="Castle">Castle</option>
										<option value="Barns">Barns</option>
										<option value="Resort">Resort</option>
										<option value="Church">Church</option>
										<option value="In Door">In Door</option>
										<option value="Flourist">Florist</option>
										<option value="DJ">Dj</option>
										  <option value="Cake">Cake</option>
									</select>
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="seat">Seat Capacity</label>
									<input id="seat" name="seat_capacity" type="number" placeholder="e.g. 50" class="form-control ">@error('seat_capacity')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="price">Price <small>(Start From)</small></label>
									<input id="price" name="price" type="text" placeholder="Price" class="form-control ">@error('price')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="address">Address </label>
									<input id="address" name="address" type="text" placeholder="Street address" class="form-control ">@error('address')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="city">City</label>
									<select class="wide" name="city" id="city">
										<option value="Ahmedabad">Ahmedabad</option>
										<option value="Baroda">Baroda</option>
										<option value="Bharuch">Bharuch</option>
									</select>@error('city')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="postcode">Postcode</label>
									<input id="postcode" name="postcode" type="text" placeholder="" class="form-control">@error('postcode')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<!-- Select Basic -->
								<div class="form-group">
									<label class="control-label" for="state">Select State</label>
									<select class="wide" name="state" id="state">
										<option value="Select State">Select State</option>
										<option value="Gujarat">Gujarat</option>
										<option value="Rajasthan">Rajasthan</option>
									</select>@error('state')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<!-- Select Basic -->
								<div class="form-group">
									<label class="control-label" for="country">Select Country</label>
									<select class="wide" name="country" id="country">
										<option value="Select Country">Select Country</option>
										<option value="India">India</option>
										<option value="UK">UK</option>@error('country')
										{{$message}}
									@enderror
									</select>
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="summernote">Descriptions </label>
									<textarea class="form-control" id="summernote" name="description" rows="6" placeholder="Write Descriptions for your venue"></textarea>@error('description')
									{{$message}}
								@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="dashboard-location-map card-body border-top">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h4>Location Map</h4>
							   
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<!-- Select Basic -->
								<div class="form-group">
									<label class="control-label" for="latitude">Latitude</label>
									<input id="latitude" name="latitude" type="number" placeholder="23.0732195" class="form-control ">@error('latitude')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="longitude">Longitude</label>
									<input id="longitude" name="longitude" type="number" placeholder="72.5646902" class="form-control ">@error('longitude')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="well-box">
									<div id="map"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="aminities-form-info card-body border-top">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h3>amenities[]</h3>
								 
							</div>
							<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Groom Lounge" id="customCheck1">
									<label class="custom-control-label" for="customCheck1"> Groom Lounge</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Bridal Suite"  id="customCheck2">
									<label class="custom-control-label" for="customCheck2"> Bridal Suite</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Table and chairs" id="customCheck3">
									<label class="custom-control-label" for="customCheck3">Table and chairs</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value="Get Ready Rooms" id="customCheck4">
									<label class="custom-control-label" for="customCheck4"> Get Ready Rooms</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value="Event Rentals" id="customCheck5">
									<label class="custom-control-label" for="customCheck5">Event Rentals</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Outside Vendors" id="customCheck6">
									<label class="custom-control-label" for="customCheck6">Outside Vendors</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Bar Services" id="customCheck7">
									<label class="custom-control-label" for="customCheck7"> Bar Services</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Catering Services" id="customCheck8">
									<label class="custom-control-label" for="customCheck8"> Catering Services</label>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input"name="amenities[]" value=" Clean Up"  id="customCheck9">
									<label class="custom-control-label" for="customCheck9"> Clean Up</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Event Planner" id="customCheck10">
									<label class="custom-control-label" for="customCheck10">Event Planner</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Wifi" id="customCheck11">
									<label class="custom-control-label" for="customCheck11">Wifi</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Pet Friendly" id="customCheck12">
									<label class="custom-control-label" for="customCheck12">Pet Friendly</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" name="amenities[]" value=" Accommodations" id="customCheck13">
									<label class="custom-control-label" for="customCheck13">Accommodations</label>
								</div>
							</div>
						</div>
					</div>
					<div class="dashboard-venue-gallery card-body border-top">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h3>Add Gallery Of Venue</h3>
								
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<!-- File Button -->
								<div class="form-group">
									<label class="control-label" for="filebutton">Browse Image</label>
									<input id="filebutton" name="image" class="btn btn-primary btn-block" type="file">@error('image')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="row">
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
									<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-6">
										<div class="gallery-upload-img">
											<img src="{{asset('assets/images/gallery-thumb.html')}}" alt="" class="img-fluid">
											<span class="delete-gallery-img"> <a href="#"><i class="fa  fa-times-circle"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="dashboard-venue-video card-body border-top">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h3>Add Video</h3>
								 
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="video">Video</label>
									<input id="video" name="video" type="url" placeholder="https://www.youtube.com/watch?v=VQWgez89JlM" class="form-control">@error('video')
									{{$message}}
								@enderror
								</div>
							</div>
						</div>
					</div>
					<div class="social-form-info card-body border-top">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<h3>Social Media </h3>
								
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="facebook">Facebook</label>
									<input id="facebook" name="facebook" type="url" placeholder="https://www.facebook.com" class="form-control ">@error('facebook')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="twitter">Twitter</label>
									<input id="twitter" name="twitter" type="url" placeholder="https://www.twitter.com" class="form-control">@error('twitter')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="instagram">Instagram</label>
									<input id="instagram" name="instagram" type="url" placeholder="https://www.instagram.com" class="form-control">@error('instagram')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<div class="form-group">
									<label class="control-label" for="youtube">Youtube</label>
									<input id="youtube" name="youtube" type="url" placeholder="https://www.youtube.com" class="form-control">@error('youtube')
									{{$message}}
								@enderror
								</div>
							</div>
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<button class="btn btn-default" type="submit">Submit New Item</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
	<!-- Content / End -->


</div>
<!-- Dashboard / End -->


</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script type="text/javascript" src="{{asset('admin/scripts/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/jquery-migrate-3.3.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/mmenu.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/chosen.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/rangeslider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/counterup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/tooltips.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/scripts/custom.js')}}"></script>


<!-- Opening hours added via JS (this is only for demo purpose) -->
<script>
$(".opening-day.js-demo-hours .chosen-select").each(function() {
	$(this).append(''+
        '<option></option>'+
        '<option>Closed</option>'+
        '<option>1 AM</option>'+
        '<option>2 AM</option>'+
        '<option>3 AM</option>'+
        '<option>4 AM</option>'+
        '<option>5 AM</option>'+
        '<option>6 AM</option>'+
        '<option>7 AM</option>'+
        '<option>8 AM</option>'+
        '<option>9 AM</option>'+
        '<option>10 AM</option>'+
        '<option>11 AM</option>'+
        '<option>12 AM</option>'+
        '<option>1 PM</option>'+
        '<option>2 PM</option>'+
        '<option>3 PM</option>'+
        '<option>4 PM</option>'+
        '<option>5 PM</option>'+
        '<option>6 PM</option>'+
        '<option>7 PM</option>'+
        '<option>8 PM</option>'+
        '<option>9 PM</option>'+
        '<option>10 PM</option>'+
        '<option>11 PM</option>'+
        '<option>12 PM</option>');
});
</script>

<!-- DropZone | Documentation: http://dropzonejs.com -->
<script type="text/javascript" src="{{asset('admin/scripts/dropzone.js')}}"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/menumaker.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-script.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/fastclick.js')}}"></script>
    <script src="{{asset('assets/js/offcanvas.js')}}"></script>
     <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
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
            icon: 'images/map-pin.png')}}'
        });
    }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
    </script>
    <script src="js/summernote-bs4.js"></script>

</body>
</html>