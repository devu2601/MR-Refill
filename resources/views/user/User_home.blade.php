@extends('User_layout.User_layout')

@section('content-part')


<div role="main" class="main">



<!-- <div class="myslider" style="width:100%;height:300px;">
  <div>  <img class="w-100" height="700" src="{{ URL::to('/') }}/uploads/users/printer_1.jpg" alt="First slide"></div>
   <div>  <img class="w-100" height="700" src="{{ URL::to('/') }}/uploads/users/printer_2.jpg" alt="First slide"></div>
   <div>  <img class="w-100" height="700" src="{{ URL::to('/') }}/uploads/users/2.jpeg" alt="First slide"></div>
   <div>  <img class="w-100" height="700" src="{{ URL::to('/') }}/uploads/users/1.jpeg" alt="First slide"></div>
</div>-->
            <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center dots-light show-dots-hover show-dots-xs nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 500}"
                data-dynamic-height="['600px','600px','600px','550px','500px']" style="height: 600px;">
                <div class="myslider" style="width:100%;height:300px;">
                    <div>  <img class="w-100" height="600" src="{{ URL::to('/') }}/uploads/users/printer_1.jpg" alt="First slide"></div>
                    <div>  <img class="w-100" height="600" src="{{ URL::to('/') }}/uploads/users/printer_2.jpg" alt="First slide"></div>
                    <div>  <img class="w-100" height="600" src="{{ URL::to('/') }}/uploads/users/2.jpeg" alt="First slide"></div>
                    <div>  <img class="w-100" height="600" src="{{ URL::to('/') }}/uploads/users/1.jpeg" alt="First slide"></div>
                    </div>
            </div>
            <div class="home-intro" id="home-intro">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <p> The  fastest  way  to  get  Hassel  Free <span class="highlighted-word text-color-primary font-weight-semibold text-5">Services <strong>+</strong> Printers Shopping.</span> <span></span> </p>
                        </div>
                        <!-- <div class="col-lg-4">
                            <div class="get-started text-start text-lg-end"> <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now!</a>
                                <div class="learn-more">or <a href="index-2.html">learn more.</a></div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                            <div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">
                                @foreach($product_data2 as $row)
                                <?php  
                                    if($row->product_status == "Active" && $row->cat_status == "Active")
                                    {
                                ?>
                                <div class="portfolio-item"> 
                                    <a href="/User/productlist/detail/{{ $row->product_id }}">
                                    <span class="thumb-info thumb-info-lighten thumb-info-no-borders   thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
											<span class="thumb-info-wrapper border-radius-0">
												<img src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}" class="img-fluid border-radius-0" alt="">
												<span class="thumb-info-title">
													<span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">{{ $row->product_name }}</span> <span class="thumb-info-type">{{ $row->brand_name }}</span> </span> <span class="thumb-info-action">
													<!-- <a href="portfolio-single-wide-slider.html">
														<span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span> </a> -->
                                    <!-- <a href="{{ URL::to('/') }}/img/projects/project.jpg" class="lightbox-portfolio"> <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span> </a> -->
                                    </span>
                                    </a>
                                    </span>
                                    </span>
                                </div>
                                <?php  }  ?>
                                @endforeach                                
                            </div>
                        </div>
                        <hr class="solid my-5"> </div>
                </div>
                <div class="row pt-3">
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon"> <i class="icons icon-support text-color-primary"></i> </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold mb-2">Our Mission</h4>
                                <p>Our Mission is To Provide One Stop solutions For everyday Problems Related to Printer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon"> <i class="icons icon-layers text-color-primary"></i> </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold mb-2">Our Vision</h4>
                                <p>Mr Refill has a Vision to Provide Highly afforadble services Accompanying With Providing Timely Services.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon"> <i class="icons icon-menu text-color-primary"></i> </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold mb-2">Why Us</h4>
                                <p>Mr Refill is Purely Adamant on <strong>Make In India</strong> Movement And is Providing One Of Cheapest Services Related To Printer Within Gujarat And Maharashtra , And Has Been Honoured With Many Awards For Services.</p>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <section class="section section-primary border-top-0 mb-0">
                <div class="container">
                    <div class="row counters counters-sm counters-text-light">
                        <div class="col-sm-6 col-lg-6 mb-5 mb-lg-0">
                            <div class="counter"> <strong data-to="350" data-append="+">0</strong>
                                <label class="opacity-5 text-4 mt-1">Happy Clients</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 mb-5 mb-lg-0">
                            <div class="counter"> <strong data-to="100" data-append="+">0</strong>
                                <label class="opacity-5 text-4 mt-1">Answered Enquiries</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <section class="video section section-height-3 section-text-light section-video section-center overlay overlay-show overlay-op-7 mt-0" data-video-path="video/dark" data-plugin-video-background data-plugin-options="{'posterType': '{{ URL::to('/') }}/uploads/makeinindia/mik.png', 'position': '50% 50%', 'overlay': true}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote mb-0">
                                <div class="testimonial-author"> <img src="{{ URL::to('/') }}/uploads/makeinindia/mik.png" class="img-fluid " alt=""> </div>
                                <blockquote>
                                    <p class="mb-0"><strong><b>MAKE IN INDIA</b></strong></p>
                                </blockquote>
                                <div class="testimonial-author">
                                    <p class="text-2"><strong class="text-color-light opacity-10">Shri</strong>Narendra Modi<br>(PM of INDIA)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <div class="container pt-2">
                <div class="row my-5 pb-5">
                    <div class="col-lg-6 pe-5">
                        <h2 class="font-weight-normal text-6 mb-2 pb-1"><strong class="font-weight-extra-bold">Who</strong> We Are</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscing. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p>Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim d varius blandit massa enimariusi d varius elit.</p> <a href="#" class="font-weight-semibold text-decoration-none learn-more text-2">VIEW MORE <i class="fas fa-chevron-right ms-2"></i></a>                        </div>
                    <div class="col-lg-6">
                        <div class="progress-bars mt-5">
                            <div class="progress-label"> <span>HTML/CSS</span> </div>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="100%"> <span class="progress-bar-tooltip">100%</span> </div>
                            </div>
                            <div class="progress-label"> <span>Design</span> </div>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="300"> <span class="progress-bar-tooltip">85%</span> </div>
                            </div>
                            <div class="progress-label"> <span>WordPress</span> </div>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="75%" data-appear-animation-delay="600"> <span class="progress-bar-tooltip">75%</span> </div>
                            </div>
                            <div class="progress-label"> <span>Photoshop</span> </div>
                            <div class="progress mb-2">
                                <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%" data-appear-animation-delay="900"> <span class="progress-bar-tooltip">85%</span> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter"> <span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ URL::to('/') }}/img/team/team-1.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">John Doe</span> <span class="thumb-info-type">CEO</span> </span>
                        </a>
                        </span> <span class="thumb-info-caption">
									<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span> <span class="thumb-info-social-icons">
										<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a> <a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>                        </span>
                        </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200"> <span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ URL::to('/') }}/img/team/team-2.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Jessica Doe</span> <span class="thumb-info-type">Marketing</span> </span>
                        </a>
                        </span> <span class="thumb-info-caption">
									<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span> <span class="thumb-info-social-icons">
										<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a> <a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>                        </span>
                        </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400"> <span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ URL::to('/') }}/img/team/team-3.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Rick Edward Doe</span> <span class="thumb-info-type">Developer</span> </span>
                        </a>
                        </span> <span class="thumb-info-caption">
									<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span> <span class="thumb-info-social-icons">
										<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a> <a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>                        </span>
                        </span>
                        </span>
                    </div>
                    <div class="col-sm-6 col-lg-3 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600"> <span class="thumb-info thumb-info-hide-wrapper-bg">
								<span class="thumb-info-wrapper">
									<a href="about-me.html">
										<img src="{{ URL::to('/') }}/img/team/team-4.jpg" class="img-fluid" alt="">
										<span class="thumb-info-title">
											<span class="thumb-info-inner">Melinda Wolosky</span> <span class="thumb-info-type">Design</span> </span>
                        </a>
                        </span> <span class="thumb-info-caption">
									<span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan</span> <span class="thumb-info-social-icons">
										<a target="_blank" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i><span>Facebook</span></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i><span>Twitter</span></a> <a href="http://www.linkedin.com/"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a>                        </span>
                        </span>
                        </span>
                    </div>
                </div>
            </div> -->
            <!-- <section class="call-to-action call-to-action-default with-button-arrow content-align-center call-to-action-in-footer call-to-action-in-footer-margin-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="call-to-action-content">
                                <h2 class="font-weight-normal text-6 mb-0">Porto is <strong class="font-weight-extra-bold">everything</strong> you need to create an <strong class="font-weight-extra-bold">awesome</strong> website!</h2>
                                <p class="mb-0">The Best HTML Site Template on ThemeForest</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="call-to-action-btn"> <a href="https://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a><span class="arrow hlb d-none d-md-block" data-appear-animation="rotateInUpLeft"
                                    style="top: -40px; left: 70%;"></span> </div>
                        </div>
                    </div>
                </div>
            </section> -->
        </div>
			
@endsection

@section('home-script')

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
    <!-- Theme Initialization Files -->
    <script src="{{ URL::to('/') }}/js/theme.init.js"></script>
    <!-- Examples -->
    <script src="{{ URL::to('/') }}/js/examples/examples.portfolio.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd76decde04a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>
        

  
<script type="text/javascript" src="{{ URL::to('/') }}/js/slick.js"></script>




  <script>
  $(document).ready(function(){
        $('.myslider').slick({
            infinite: true,
            dots: true,
            speed: 300,
            autoplay: true,
            autoplaySpeed: 1500,
        });
});

</script>


@endsection

@section('home-css')

<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
    <!-- {{ URL::to('/') }}/vendor CSS -->
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


    <link rel="stylesheet" href="{{ URL::to('/') }}/css/slick.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/slick-theme.css">

  
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
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
@endsection