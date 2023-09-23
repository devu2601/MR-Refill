@extends('User_layout.User_layout')

@section('content-part')

<div align="right "style="margin-right: 20px;"> 

    <h6 class="word-rotator font-weight-semi-bold slide mb-2">  
										<span class="word-rotator-words">
											<b class="is-visible"> <a  href="/User/register" ><u>Not a user? Register Yourself</u></a></b>
										</span>
									</h6>
</div>

<div role="main" class="main shop py-4">
            <div class="container py-4">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 mb-5 mb-lg-0">
                        <h2 class="font-weight-bold text-5 mb-0">Login</h2>
                        @if(Session::get('message'))
				<div class="alert alert-danger d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('message')}}
				</div>
				</div>
			@endif
                        <form action="/User/login/checklogin" id="frmSignIn" method="post" class="needs-validation">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <label class="form-label text-color-dark text-3">Email address <span class="text-color-danger">*</span></label>
                                    <input type="text" name="txtemail" value="" class="form-control form-control-lg text-4" required> </div>
                            </div>
    
                            <div class="row">
                                <div class="form-group col">
                               <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3" data-loading-text="Loading...">Login</button>
                                    
                            </div>
                        </form>
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
    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::to('/') }}/js/theme.js"></script>
    <!-- Current Page Vendor and Views -->
    <script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ URL::to('/') }}/js/theme.init.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd870e59a98aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>

@endsection