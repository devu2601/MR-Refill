@extends('User_layout.User_layout')

@section('content-part')
		
<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Timeline Full Width</h1> <span class="sub-title text-dark">Check out our Latest News!</span> </div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="#">Home</a></li>
								<li class="active">Blog</li>
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
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold">January 2021</h3> </div>
									<article class="timeline-box left post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<a href="blog-post.html"> <img src="{{ URL::to('/') }}/img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" /> </a>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a stardard post with preview image</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> January 10, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<article class="timeline-box right post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<div class="owl-carousel owl-theme show-nav-hover dots-inside nav-inside nav-style-1 nav-light mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': true}">
															<div>
																<div class="img-thumbnail border-0 p-0 d-block"> <img class="img-fluid border-radius-0" src="{{ URL::to('/') }}/img/blog/wide/blog-24.jpg" alt=""> </div>
															</div>
															<div>
																<div class="img-thumbnail border-0 p-0 d-block"> <img class="img-fluid border-radius-0" src="{{ URL::to('/') }}/img/blog/wide/blog-20.jpg" alt=""> </div>
															</div>
															<div>
																<div class="img-thumbnail border-0 p-0 d-block"> <img class="img-fluid border-radius-0" src="{{ URL::to('/') }}/img/blog/wide/blog-21.jpg" alt=""> </div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a stardard slider gallery post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> January 9, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<article class="timeline-box left post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
															<div class="row mx-0">
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-13.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-13.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-16.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-16.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-20.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-20.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-23.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-23.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-29.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-29.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
																<div class="col-6 col-md-4 p-0">
																	<a href="{{ URL::to('/') }}/img/blog/square/blog-40.jpg"> <span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
																				<span class="thumb-info-wrapper">
																					<img src="{{ URL::to('/') }}/img/blog/square/blog-40.jpg" class="img-fluid" alt="" />
																					<span class="thumb-info-action">
																						<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span> </span>
																		</span>
																		</span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard image gallery thumbs post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> January 8, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold">November 2021</h3> </div>
									<article class="timeline-box left post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<div class="ratio ratio-16x9">
															<iframe src="https://player.vimeo.com/video/45830194?color=ffffff&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0" width="640" height="360" allowfullscreen></iframe>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard embedded video post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> November 10, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<article class="timeline-box right post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<div class="ratio ratio-16x9">
															<video autoplay="" muted="" loop="" controls="">
																<source src="video/memory-of-a-woman.mp4" type="video/mp4"> </video>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard HTML5 video post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> November 9, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold">September 2021</h3> </div>
									<article class="timeline-box left post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<blockquote class="blockquote-primary">
															<p>Pellentesque pellentesque eget tempor tellus. Fusce lacllentesque eget tempor tellus ellentesque pelleinia tempor malesuada. Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
															<footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
														</blockquote>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard blockquote post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> September 10, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<article class="timeline-box right post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image"> <a href="https://www.themeforest.net/" class="d-block btn btn-primary btn-outline border-0 rounded-0 font-weight-bold text-center text-6 p-5" target="_blank">PORTO ON<br> THEMEFOREST</a> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard link post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> September 9, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<article class="timeline-box left post post-medium">
										<div class="timeline-box-arrow"></div>
										<div class="p-2">
											<div class="row mb-2">
												<div class="col">
													<div class="post-image">
														<div class="ratio ratio-soundcloud ratio-16x9">
															<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/341546259&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></iframe>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-content">
														<h2 class="font-weight-semibold text-5 line-height-4 mt-2 mb-2"><a href="blog-post.html">This is a standard audio embedded post</a></h2>
														<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-calendar-alt"></i> September 8, 2021 </span>
														<br> </div>
												</div>
											</div>
											<div class="row">
												<div class="col">
													<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
												</div>
											</div>
											<div class="row">
												<div class="col"> <a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a> </div>
											</div>
										</div>
									</article>
									<div class="timeline-date">
										<h3 class="text-primary font-weight-bold"><a href="#">Load More...</a></h3> </div>
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