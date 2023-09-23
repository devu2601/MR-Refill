@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop py-4">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="masonry-loader masonry-loader-showing">
							<div class="products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
								<div class="row align-items-center">
									<div class="col-sm-4 mb-4 mb-sm-0">
										<div class="product mb-0">
											<div class="product-thumb-info border-0 mb-0">
												<div class="product-thumb-info-badges-wrapper"><span class="badge badge-ecommerce badge-success">NEW</span> </div>
												<div class="addtocart-btn-wrapper">
													<a href="shop-cart.html" class="text-decoration-none addtocart-btn" title="Add to Cart"> <i class="icons icon-bag"></i> </a>
												</div> <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
														QUICK VIEW
													</a>
												<a href="shop-product-sidebar-left.html">
													<div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="img/products/product-grey-1.jpg"> </div>
												</a>
											</div>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="summary entry-summary">
											<h2 class="mb-0 font-weight-bold text-7"><a href="shop-product-sidebar-left.html" class="text-color-dark text-color-hover-primary text-decoration-none">Porto Headphone</a></h2>
											<div class="pb-0 clearfix d-flex align-items-center">
												<div title="Rated 3 out of 5" class="float-start">
													<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}"> </div>
												<div class="review-num">
													<a href="shop-product-sidebar-left.html#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000"> <span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews) </a>
												</div>
											</div>
											<div class="divider divider-small">
												<hr class="bg-color-grey-scale-4"> </div>
											<p class="price mb-3"> <span class="sale text-color-dark">$15,00</span> <span class="amount">$22,00</span> </p>
											<p class="text-3-5 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Lorem ipsum dolor sit amet.</p>
											<ul class="list list-unstyled text-2">
												<li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>
												<li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
											</ul>
										</div>
									</div>
									<div class="col">
										<hr class="my-5"> </div>
								</div>
								
							</div>
							<div class="row">
								<div class="col">
									<ul class="pagination float-end">
										<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
									</ul>
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

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd869e4e8d4a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>

@endsection