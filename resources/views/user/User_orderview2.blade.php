@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pt-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="masonry-loader masonry-loader-showing">
							<div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
							@foreach($order_details as $row)
								<div class="col-sm-6 col-lg-4">
									<div class="product mb-0">
										<div class="product-thumb-info border-0 mb-3">
											
											<a href="shop-product-sidebar-left.html">
												<div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}"> </div>
											</a>
										</div>
										<div class="d-flex justify-content-between">
											<div> <a href="/User/categorylist/search/{{ $row->cat_id }}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{$row->cat_name }}</a>
												<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="/User/productlist/detail/{{ $row->product_id}}" class="text-color-dark text-color-hover-primary">{{ $row->product_name }}</a></h3> </div>
												</div>
										<div title="Rated 5 out of 5">
											<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}"> </div>
										<p class="price text-5 mb-3"> <span class="sale text-color-dark font-weight-semi-bold">Rs. {{$row->product_sales_price}}</span> <span class="amount">Rs. {{$row->product_retail_price}}</span> </p>
										
										<p class="price text-3 mb-3"> <span class=" text-color-dark font-weight-semi-bold">QTY:- {{$row->item_quantity}}</span> &nbsp &nbsp &nbsp  <span class="text-color-dark font-weight-semi-bold">  Total :- Rs. {{$row->item_total}}</span> </p>

										<p class="price text-3 mb-3">
										

										@if($row->totalrating<=0)
                                    <a href="/User/productlist/review/{{$row->product_id}}/{{$row->order_id}}"><input type="button" id="contactFormSubmit" value="Review Product" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading..."> </a> </p>
										@endif										
									</div>
								</div>
								@endforeach
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
	<!-- Theme Base, Components and Settings -->
	<script src="{{ URL::to('/') }}/js/theme.js"></script>
	<!-- Current Page Vendor and Views -->
	<script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>
	<!-- Theme Initialization Files -->
	<script src="{{ URL::to('/') }}/js/theme.init.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd86959d178aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
  

@endsection