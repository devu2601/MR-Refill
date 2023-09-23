@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pt-4">
			<div class="container">
				
				
				<div class="row mb-4">
					
				
					<hr class="solid my-5">
					<h4>Add a review</h4>
					<div class="row">
						<div class="col">
							<form action="/User/productlist/review2/insert" id="submitReview" method="post">
								@csrf
                                <input type="hidden" name="productid" id="productid" value="{{$productid1}}">
                                <input type="hidden" name="orderid" id="orderid" value="{{$orderid1}}">
								<div class="row">
								<div class="d-block pb-2">
									<input type="text" class="rating-invisible" value="5" name="rating" id="rating" title="" data-plugin-star-rating data-plugin-options="{'showCaption': true, 'color': 'dark', 'size':'sm'}"> </div>
							</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-6">
										<label class="form-label required font-weight-bold text-dark">Name</label>
										<input type="text" value="<?php echo  Session::get("username"); ?>" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" readonly required> </div>
									<div class="form-group col-lg-6">
										<label class="form-label required font-weight-bold text-dark">Email Address</label>
										<input type="text" value="<?php echo  Session::get("usermail"); ?>" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" readonly required>  </div>
								</div>
								<div class="row">
									<div class="form-group col">
										<label class="form-label required font-weight-bold text-dark">Review</label>
										<textarea maxlength="5000" data-msg-required="Please enter your review." rows="8" class="form-control" name="review" id="review" required></textarea>
									</div>
								</div>
								<div class="row">
									<div class="form-group col mb-0">
										<input type="submit" value="Post Review" class="btn btn-primary btn-modern" data-loading-text="Loading..."> </div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	

@endsection

@section('css')

<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap" rel="stylesheet" type="text/css">
	<!-- Vendor CSS -->
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/magnific-popup/magnific-popup.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/css/star-rating.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">
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
	<script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/jquery.countdown/jquery.countdown.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
	<!-- Theme Base, Components and Settings -->
	<script src="{{ URL::to('/') }}/js/theme.js"></script>
	<!-- Current Page Vendor and Views -->
	<script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>
	<!-- Theme Initialization Files -->
	<script src="{{ URL::to('/') }}/js/theme.init.js"></script>
	<!-- Examples -->
	<script src="{{ URL::to('/') }}/js/examples/examples.gallery.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd8668fd6b8aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
@endsection