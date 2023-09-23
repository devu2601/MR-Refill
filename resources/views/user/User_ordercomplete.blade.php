@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pb-4">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
							<li class="text-transform-none me-2"> <a href="/User/cart" class="text-decoration-none text-color-dark text-color-hover-primary">Shopping Cart</a> </li>
							<li class="text-transform-none text-color-dark me-2"> <a href="/User/checkout" class="text-decoration-none text-color-dark text-color-hover-primary">Checkout</a> </li>
							<li class="text-transform-none text-color-dark"> <a href="/User/ordercomplete" class="text-decoration-none text-color-primary">Order Complete</a> </li>
						</ul>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="card border-width-3 border-radius-0 border-color-success">
							<div class="card-body text-center">
								<p class="text-color-dark font-weight-bold text-4-5 mb-0"><i class="fas fa-check text-color-success me-1"></i> Thank You. Your Order has been received.</p>
							</div>
						</div>
						<!-- <div class="d-flex flex-column flex-md-row justify-content-between py-3 px-4 my-4">
							<div class="text-center"> <span>
										Order Number <br>
										<strong class="text-color-dark">31891</strong>
									</span> </div>
							<div class="text-center mt-4 mt-md-0"> <span>
										Date <br>
										<strong class="text-color-dark">June 17, 2020</strong>
									</span> </div>
							<div class="text-center mt-4 mt-md-0"> <span>
										Email <br>
										<strong class="text-color-dark"><a href="https://www.okler.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5a3b38391a3b383974393537">[email&#160;protected]</a></strong>
									</span> </div>
							<div class="text-center mt-4 mt-md-0"> <span>
										Total <br>
										<strong class="text-color-dark">$30</strong>
									</span> </div>
							<div class="text-center mt-4 mt-md-0"> <span>
										Payment Method <br>
										<strong class="text-color-dark">Cash on Delivery</strong>
									</span> </div>
						</div> -->
						<!-- <div class="card border-width-3 border-radius-0 border-color-hover-dark mb-4">
							<div class="card-body">
								<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
								<table class="shop_table cart-totals mb-0">
									<tbody>
										<tr>
											<td colspan="2" class="border-top-0"> <strong class="text-color-dark">Product</strong> </td>
										</tr>
										<tr>
											<td> <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong> <span class="text-1">COLOR BLACK</span> </td>
											<td class="text-end align-top"> <span class="amount font-weight-medium text-color-grey">$15</span> </td>
										</tr>
										<tr>
											<td class="border-top-0 pt-0"> <strong class="d-block text-color-dark line-height-1 font-weight-semibold">Black Porto Smartwatch <span class="product-qty">x1</span></strong> <span class="text-1">COLOR BLACK</span> </td>
											<td class="border-top-0 text-end align-top pt-0"> <span class="amount font-weight-medium text-color-grey">$15</span> </td>
										</tr>
										<tr class="cart-subtotal">
											<td class="border-top-0"> <strong class="text-color-dark">Subtotal</strong> </td>
											<td class="border-top-0 text-end"> <strong><span class="amount font-weight-medium">$431</span></strong> </td>
										</tr>
										<tr class="shipping">
											<td class="border-top-0"> <strong class="text-color-dark">Shipping</strong> </td>
											<td class="border-top-0 text-end"> <strong><span class="amount font-weight-medium">Free Shipping</span></strong> </td>
										</tr>
										<tr class="total">
											<td> <strong class="text-color-dark text-3-5">Total</strong> </td>
											<td class="text-end"> <strong class="text-color-dark"><span class="amount text-color-dark text-5">$431</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> -->
						<!-- <div class="row pt-3">
							<div class="col-lg-6 mb-4 mb-lg-0">
								<h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Billing Address</h2>
								<ul class="list list-unstyled text-2 mb-0">
									<li class="mb-0">John Doe Junior</li>
									<li class="mb-0">Street Name, City</li>
									<li class="mb-0">State AL 85001</li>
									<li class="mb-0">123 456 7890</li>
									<li class="mt-3 mb-0"><a href="https://www.okler.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="46272425062724256825292b">[email&#160;protected]</a></li>
								</ul>
							</div>
							<div class="col-lg-6">
								<h2 class="text-color-dark font-weight-bold text-5-5 mb-1">Shipping Address</h2>
								<ul class="list list-unstyled text-2 mb-0">
									<li class="mb-0">John Doe Junior</li>
									<li class="mb-0">Street Name, City</li>
									<li class="mb-0">State AL 85001</li>
									<li class="mb-0">123 456 7890</li>
									<li class="mt-3 mb-0"><a href="https://www.okler.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8beae9e8cbeae9e8a5e8e4e6">[email&#160;protected]</a></li>
								</ul>
							</div>
						</div> -->
						
							<br>
						
						<div class="row justify-content-center">
						
							<a href="/User/orderlist" class="btn btn-3d btn-primary mb-2" >View Orders</a>
					
						</div>
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
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap" rel="stylesheet" type="text/css">
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

<!-- Vendor -->
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
	<!-- Current Page Vendor and Views -->
	<script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>
	<!-- Theme Initialization Files -->
	<script src="{{ URL::to('/') }}/js/theme.init.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd871fea658aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>

@endsection


