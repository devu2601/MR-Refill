@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main">
			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Post Full Width</h1> <span class="sub-title text-dark">Check out our Latest News!</span> </div>
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
						<div class="blog-posts single-post">
							<article class="post post-large blog-single-post border-0 m-0 p-0">
								<div class="post-image ms-0">
									<a href="blog-post.html"> <img src="{{ URL::to('/') }}/img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" /> </a>
								</div>
								<div class="post-date ms-0"> <span class="day">10</span> <span class="month">Jan</span> </div>
								<div class="post-content ms-0">
									<h2 class="font-weight-semi-bold"><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
									<div class="post-meta"> <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span> <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span> <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> </div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
									<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
									<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
									<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
									<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>
									<div class="post-block mt-5 post-share">
										<h4 class="mb-3">Share this Post</h4>
										<!-- Go to www.addthis.com/dashboard to customize your tools -->
										<div class="addthis_inline_share_toolbox"></div>
										<script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>
									</div>
									<div class="post-block mt-4 pt-2 post-author">
										<h4 class="mb-3">Author</h4>
										<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
											<a href="blog-post.html"> <img src="{{ URL::to('/') }}/img/avatars/avatar.jpg" alt=""> </a>
										</div>
										<p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
									</div>
									<div id="comments" class="post-block mt-5 post-comments">
										<h4 class="mb-3">Comments (3)</h4>
										<ul class="comments">
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block"> <img class="avatar" alt="" src="{{ URL::to('/') }}/img/avatars/avatar-2.jpg"> </div>
													<div class="comment-block">
														<div class="comment-arrow"></div> <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> </span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p> <span class="date float-end">January 12, 2021 at 1:38 pm</span> </div>
												</div>
												<ul class="comments reply">
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block"> <img class="avatar" alt="" src="{{ URL::to('/') }}/img/avatars/avatar-3.jpg"> </div>
															<div class="comment-block">
																<div class="comment-arrow"></div> <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> </span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p> <span class="date float-end">January 12, 2021 at 1:38 pm</span> </div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block"> <img class="avatar" alt="" src="{{ URL::to('/') }}/img/avatars/avatar-4.jpg"> </div>
															<div class="comment-block">
																<div class="comment-arrow"></div> <span class="comment-by">
																		<strong>John Doe</strong>
																		<span class="float-end">
																			<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> </span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p> <span class="date float-end">January 12, 2021 at 1:38 pm</span> </div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block"> <img class="avatar" alt="" src="{{ URL::to('/') }}/img/avatars/avatar.jpg"> </div>
													<div class="comment-block">
														<div class="comment-arrow"></div> <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> </span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <span class="date float-end">January 12, 2021 at 1:38 pm</span> </div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block"> <img class="avatar" alt="" src="{{ URL::to('/') }}/img/avatars/avatar.jpg"> </div>
													<div class="comment-block">
														<div class="comment-arrow"></div> <span class="comment-by">
																<strong>John Doe</strong>
																<span class="float-end">
																	<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span> </span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> <span class="date float-end">January 12, 2021 at 1:38 pm</span> </div>
												</div>
											</li>
										</ul>
									</div>
									<div class="post-block mt-5 post-leave-comment">
										<h4 class="mb-3">Leave a comment</h4>
										<form class="contact-form p-4 rounded bg-color-grey" action="https://www.okler.net/previews/porto/9.3.0/php/contact-form.php" method="POST">
											<div class="p-2">
												<div class="row">
													<div class="form-group col-lg-6">
														<label class="form-label required font-weight-bold text-dark">Full Name</label>
														<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required> </div>
													<div class="form-group col-lg-6">
														<label class="form-label required font-weight-bold text-dark">Email Address</label>
														<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required> </div>
												</div>
												<div class="row">
													<div class="form-group col">
														<label class="form-label required font-weight-bold text-dark">Comment</label>
														<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
													</div>
												</div>
												<div class="row">
													<div class="form-group col mb-0">
														<input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading..."> </div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</article>
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
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd85e2dcfa4a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>

@endsection