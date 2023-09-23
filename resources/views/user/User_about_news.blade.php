@extends('User_layout.User_layout')

@section('content-part')
		
<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Timeline</h1> <span class="sub-title text-dark">Check out our Latest News!</span> </div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="#">Home</a></li>
								<li class="active">News</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<div class="container py-4">
				<div class="row">
					<div class="col">
						<div class="blog-posts">
							<section class="timeline">
								<div class="timeline-body">
									<!-- <div class="timeline-date">
										<h3 class="text-primary font-weight-bold">January 2021</h3> </div> -->
										<?php $count=1; ?>
										@foreach($news as $row)
										<?php 
											date_default_timezone_set('Asia/Kolkata');
											$date_time = date('Y-m-d H:i:s');
											// echo "end time".$row->end_time;
											// echo "current time".$date_time;
											if($row->end_time >= $date_time)   //    35:00  >= 44:00
											{
												if($row->start_time <= $date_time)
												{
												?>
									<article class="timeline-box <?php if($count==1) { ?> left <?php $count=2; } else { ?> right <?php  $count=1; } ?> post post-medium">
										<div class="timeline-box-arrow"></div>
									
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<a href="#"> <img src="{{ URL::to('/') }}/uploads/news_image/{{ $row->news_img1 }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" /> </a>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="#">{{ $row->news_title }}</p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col">
													<div class="post-content">
														<h4 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2">
														</h4><a href="#">{{ $row->news_description }}</p>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> {{ $row->created_at }} </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">Mr refill</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>  </div>
												</div>
											</div>
										
										</div>
										
									</article>
									<?php }} ?>
									@endforeach
									<!-- <div class="timeline-date">
										<h3 class="text-primary font-weight-bold">November 2021</h3> </div>
									
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold">September 2021</h3> </div>
								
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold"><a href="#">Load More...</a></h3> </div> -->
								</div>
							</section>
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd85c4faac8aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>

@endsection