@extends('User_layout.User_layout')

@section('content-part')
<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">AVAILABLE OFFERS</h1> <span class="sub-title text-dark">Check out our Latest OFFERS!</span> </div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="/User/home">Home</a></li>
								<li class="active">Offers</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="container py-4">
				<div class="row">
					<div class="col">
						<div class="blog-posts">
							<div class="masonry-loader masonry-loader-showing">
								<div class="masonry row" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">
									@foreach($offer_data as $row)
									<?php 
										date_default_timezone_set('Asia/Kolkata');
										$date_time = date('Y-m-d H:i:s');
										if($row->end_time >= $date_time)   //    35:00  >= 44:00
											{
												if($row->start_time <= $date_time)
												{
												
									?>
									<div class="masonry-item no-default-style col-md-4">
										<article class="post post-medium border-0 pb-0 mb-5">
											<!-- <div class="post-image">
												<a href="blog-post.html"> <img src="{{ URL::to('/') }}/img/blog/square/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" /> </a>
											</div> -->
											<div class="post-content">
												<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="#">{{$row->offer_name}}</a></h2>
												<p>{{$row->offer_description}}</p>
												Minimum Amount : &nbsp<p>{{$row->offer_min_amt}}</p>
												Maximum Amount : &nbsp<p>{{$row->offer_max_amt}}</p>
												FLAT Discount Amount : &nbsp<p>{{$row->offer_discount}}</p>
												START FROM : &nbsp<p><?php  echo date('d-m-Y',strtotime($row->start_time));  ?></p>
												END AT : &nbsp<p><?php  echo date('d-m-Y',strtotime($row->end_time));  ?></p>
												ONE TIME USE : &nbsp<p>{{ $row->offer_onetimeuse }}</p>
												<div class="post-meta"> <span><i class="far fa-ruppes"></i> <strong>Code:   {{$row->coupon_code}}</strong></span> </div>
											</div>
										</article>
									</div>
									<?php  }}  ?>
									@endforeach
								</div>
							</div>
							<!-- <div class="row">
								<div class="col">
									<ul class="pagination float-end">
										<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
									</ul>
								</div>
							</div> -->
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd85832a9e8aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
@endsection