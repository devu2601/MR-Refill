@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pt-4">
			<div class="container">
				<div class="row">
					<!-- <div class="col">
						<ul class="breadcrumb breadcrumb-style-2 d-block text-4 mb-4">
							<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Home</a></li>
							<li><a href="#" class="text-color-default text-color-hover-primary text-decoration-none">Electronics</a></li>
							<li>SMARTWATCHES</li>
						</ul>
					</div> -->
				</div>
				<div class="row">
					<div class="col-md-5 mb-5 mb-md-0">
						<div class="thumb-gallery-wrapper">
							<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
								<div> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img1}}" data-zoom-image="img/products/product-grey-7.jpg"> </div>
								<div> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img2}}" data-zoom-image="img/products/product-grey-7-2.jpg"> </div>
								<div> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img3}}" data-zoom-image="img/products/product-grey-7-3.jpg"> </div>
								</div>
							<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
								<div class="cur-pointer"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img1}}"> </div>
								<div class="cur-pointer"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img2}}"> </div>
								<div class="cur-pointer"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{$product_data[0]->product_img3}}"> </div>
				
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="summary entry-summary position-relative">
							<div class="position-absolute top-0 right-0">
								
							</div>
							<h1 class="mb-0 font-weight-bold text-7">{{$product_data[0]->product_name}}</h1>
							<div class="pb-0 clearfix d-flex align-items-center">
								<div title="Rated 3 out of 5" class="float-start">
									<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}"> </div>
								<div class="review-num">
									<a href="#description" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="75" data-hash-trigger-click=".nav-link-reviews" data-hash-trigger-click-delay="1000"> <span class="count text-color-inherit" itemprop="ratingCount"></span> Ratings </a>
								</div>
								<br>
							</div>
							<?php  
								$data=count($rating);
								if($data==1)
								{
							?>
							<div class="d-block pb-2">
									<input type="text" class="rating-invisible" value="{{ $rating[0]->rating }}" name="rating" id="rating" title="" data-plugin-star-rating data-plugin-options="{'color': 'dark', 'size':'sm'}" readonly> 
							</div>
							<?php		
								}
								else
								{
							?>
							<div class="d-block pb-2">
								<input type="text" class="rating-invisible" value="0" name="rating" id="rating" title="" data-plugin-star-rating data-plugin-options="{'color': 'dark', 'size':'sm'}" readonly>
								<label for=""> Not yet rated</label>
							</div>
							<?php		
								}

							?>
							<p class="price mb-3"> <span class="sale text-color-dark">Rs.{{$product_data[0]->product_sales_price}}</span> <span class="amount">Rs.{{$product_data[0]->product_retail_price}}</span> </p>
							<p class="text-3-5 mb-3">{{$product_data[0]->product_description}}</p>
							<ul class="list list-unstyled text-2">
								<!-- <li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li> -->
								<!-- <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li> -->
							</ul>
							<form enctype="multipart/form-data" method="post" class="cart" action="/User/cart/insert/{{$product_data[0]->product_id}}">
								@csrf
								@if(Session::has("isuserlogin"))
									<?php 
										if($product_data[0]->product_status == "Active")
										{
									?>
								<hr>
								<div class="quantity quantity-lg">
									<input type="button" class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="-">
									<input type="text" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
									<input type="button" class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary" value="+"> 
								</div>
									<button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Add to cart</button>
								<hr>
								<?php  
										}
										else
										{?>
										<h3 style="color: red; font-family: 'simple-line-icons';"><b>Product Unavailable</b></h3>
										<?php }
									
									?>
								@else
								<?php 
									Session::put("product_id",$product_data[0]->product_id); 
								?>
								<hr>
									
									<a href="/User/login"><button type="button" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">BUY NOW</button></a>	<br>
									<hr>
									
								@endif
							</form>
							<div class="d-flex align-items-center">
								<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
									<!-- Facebook -->
									<li class="social-icons-facebook">
										<a href="https://www.facebook.com/sharer.php?u=https://www.okler.net" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Facebook"> <i class="fab fa-facebook-f"></i> </a>
									</li>
									<!-- Google+ -->
									<li class="social-icons-googleplus">
										<a href="https://plus.google.com/share?url=https://www.okler.net" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Google+"> <i class="fab fa-google-plus-g"></i> </a>
									</li>
									<!-- Twitter -->
									<li class="social-icons-twitter">
										<a href="https://twitter.com/share?url=https://www.okler.net&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Twitter"> <i class="fab fa-twitter"></i> </a>
									</li>
									<!-- Email -->
									<li class="social-icons-email">
										<a href="https://www.okler.net/cdn-cgi/l/email-protection#724d210710181711064f211a13001752261a1b01522213151754131f0249301d160b4f3b574042011305574042061a1b01574042131c16574042061a1d07151a065740421d145740420b1d0753574042521a06060201485d5d0505055c1d191e17005c1c1706" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share By Email"> <i class="far fa-envelope"></i> </a>
									</li>
								</ul>
								<!-- <a href="#" class="d-flex align-items-center text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"> <i class="far fa-heart me-1"></i> SAVE TO WISHLIST </a> -->
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-4">
					<div class="col">
						<div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
							<ul class="nav nav-tabs justify-content-start">
								<li class="nav-item"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-bs-toggle="tab">Description</a></li>
								<li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-bs-toggle="tab">Specifications</a></li>
								<li class="nav-item"><a class="nav-link nav-link-reviews font-weight-bold text-3 text-uppercase py-2 px-3" href="#productReviews" data-bs-toggle="tab">Reviews</a></li>
							</ul>
							<div class="tab-content p-0">
								<div class="tab-pane px-0 py-3 active" id="productDescription">
									<p>
									{{$product_data[0]->product_description}}
									</p>
									<?php 
										if($product_data[0]->product_manual == "Not available")
										{
									?>
									<p>User manual not available</p>
									<?php
										}
										else
										{
									?>
									<p><a href="{{ URL::to('/') }}/uploads/product/manual/{{$product_data[0]->product_manual}}" target="_blank">{{$product_data[0]->product_manual}}</a></p>
									<?php  } ?>
								</div>
							

								<div class="tab-pane px-0 py-3" id="productInfo">
									<!-- <table class="table table-striped m-0">
										<tbody>
											<tr> -->
												{!! $product_data[0]->product_specification !!} 
											<!-- </tr>
											
										</tbody>
									</table> -->
								</div>

								<div class="tab-pane px-0 py-3" id="productReviews">
									<ul class="comments">
										<?php
											if(!empty($review))
											{
										?>
										@foreach($review as $row)
										<li>
											<div class="comment">
												<div class="img-thumbnail border-0 p-0 d-none d-md-block"> <img class="avatar rounded-circle" alt="" src="{{ URL::to('/') }}/uploads/users/{{ $row->user_profile }}"> 
												</div>
												<div class="comment-block">
													<div class="comment-arrow"></div> <span class="comment-by">
															<strong>{{ $row->user_name }}</strong>
															<span class="float-end">
																<div class="pb-0 clearfix">
																	<div title="Rated 3 out of 5" class="float-start">
																		<input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
																	</div>

																	<!-- <div class="review-num">
																		<span class="count" itemprop="ratingCount">2</span> reviews </div> -->
															</div>
															</span>
															</span>
															<p>{{ $row->review_text }}</p>
														</div>
												</div>
										</li> 
										@endforeach
										<?php  
											}
											else
											{?>
												<li>
													<div class="col-12">
														<p>Not reviewed yet !!</p>
													</div>
												</li>

											<?php }
										
										?>
							
					</ul>
					<hr class="solid my-5">
					<!-- <h4>Add a review</h4> -->
					<div class="row">
						<!-- <div class="col">
							<form action="/User/productlist/review/{{$product_data[0]->product_id}}" id="submitReview" method="post">
								@csrf
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
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col">
			<h4 class="font-weight-semibold text-4 mb-3">RELATED PRODUCTS</h4>
			<hr class="mt-0">
			<div class="products row">
				<div class="col">
					<div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0" data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">
						@foreach($related_data as $row)
						<div class="product mb-0">
							<div class="product-thumb-info border-0 mb-3">
								<div class="product-thumb-info-badges-wrapper"> </div>
								 <!-- <a href="ajax/shop-product-quick-view.html" class="quick-view text-uppercase font-weight-semibold text-2">
													QUICK VIEW
												</a> -->
								<a href="/User/productlist/detail/{{ $row->product_id}}">
									<div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}"> </div>
								</a>
							</div>
							<div class="d-flex justify-content-between">
								<div> <a href="/User/categorylist/search/{{ $row->cat_id }}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $cat_data[0]->cat_name }}</a>
									<h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="/User/productlist/detail/{{ $row->product_id}}" class="text-color-dark text-color-hover-primary">{{ $row->product_name }}</a></h3> 
								</div>  
							</div>
							<div title="Rated 5 out of 5">
								<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}"> </div>
							<p class="price text-5 mb-3"> <span class="sale text-color-dark font-weight-semi-bold">{{ $row->product_sales_price }}</span> <span class="amount">{{ $row->product_retail_price }}</span> </p>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr class="my-5">
	
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