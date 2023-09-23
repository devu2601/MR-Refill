@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="font-weight-bold text-dark">User Profile</h1> </div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="/User/home">Home</a></li>
								<li class="active">Profile</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="container pt-3 pb-2">
			<form role="form" method="post" action="/User/updateprofile" enctype="multipart/form-data" class="needs-validation">
				@csrf
				<div class="row pt-2">
					<div class="col-lg-3 mt-4 mt-lg-0">
						<div class="d-flex justify-content-center mb-4">
							<div class="profile-image-outer-container">
								<div class="profile-image-inner-container bg-color-primary"> <img src="{{ URL::to('/') }}/uploads/users/{{$user_data[0]->user_profile}}"> <span class="profile-image-button bg-color-dark">
											<i class="fas fa-camera text-light"></i>
										</span> </div>
								<input type="file" name="profilepic" id="profilepic" class="form-control profile-image-input"> </div>
								<input type="hidden" name="oldimage" id="oldimage" value="{{ $user_data[0]->user_profile }}">
								
						</div>
						<aside class="sidebar mt-2" id="sidebar">
							<ul class="nav nav-list flex-column mb-5">
								<li class="nav-item"><a class="nav-link text-3 text-dark active" href="#">My Profile</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-lg-9">
						<!-- <form role="form" class="needs-validation"> -->
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Name</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="Name" value="{{$user_data[0]->user_name}}" required> </div>
							</div>
							
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2 required">Email</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="email" name="email" value="{{$user_data[0]->user_email}}" readonly required> </div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Phone no.</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="contact" value="{{$user_data[0]->user_contact}}"> </div>
							</div>
							
							<!-- <div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2">Address</label>
								<div class="col-lg-9">
									<input class="form-control text-3 h-auto py-2" type="text" name="address" value="" placeholder="Street"> </div>
							</div>
							<div class="form-group row">
								<label class="col-lg-3 col-form-label form-control-label line-height-9 pt-2 text-2"></label>
								<div class="col-lg-6">
									<input class="form-control text-3 h-auto py-2" type="text" name="city" value="" placeholder="City"> </div>
								<div class="col-lg-3">
									<input class="form-control text-3 h-auto py-2" type="text" name="state" value="" placeholder="State"> </div>
							</div> -->
							
							
							<div class="form-group row">
								<div class="form-group col-lg-9"> </div>
								<div class="form-group col-lg-3">
									<input type="submit" value="Save" class="btn btn-primary btn-modern float-end" data-loading-text="Loading..."> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

@endsection

@section('css')

<!-- Favicon -->
<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/magnific-popup/magnific-popup.min.css">
	<!-- Theme CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-elements.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-blog.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-shop.css">
	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="{{ URL::to('/') }}/css/skins/default.css">
	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/css/custom.css">
	<!-- Head Libs -->
	<script src="{{ URL::to('/') }}/vendor/modernizr/modernizr.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
	<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'G-SEP1T05Z5V');
	</script>

@endsection

@section('script')

<script data-cfasync="false" src="{{ URL::to('/') }}/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery/jquery.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.appear/jquery.appear.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.validation/jquery.validate.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/lazysizes/lazysizes.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/isotope/jquery.isotope.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/vide/jquery.vide.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/vivus/vivus.min.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="{{ URL::to('/') }}/js/theme.js"></script>
	<!-- Theme Initialization Files -->
	<script src="{{ URL::to('/') }}/js/theme.init.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd8349388f4a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>	

@endsection