@extends('User_layout.User_layout')

@section('content-part')
<div role="main" class="main">
            <section >
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-12 align-self-center p-static order-2 text-center">
                            <h1 class="text-9 font-weight-bold">About Us</h1></div>
                        <div class="col-md-12 align-self-center order-1">
                            <ul class="breadcrumb breadcrumb-light d-block text-center">
                                <li><a href="/User/home">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row pt-5">
                    <div class="col">
                        <div class="row text-center pb-5">
                            <div class="col-md-9 mx-md-auto">
                                <div class="overflow-hidden mb-3">
                                    <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                        <span>We are Mr Refill, The perfect choice for your</span>
                                        <span class="word-rotator-words bg-primary">
												<b class="is-visible">New</b>
												<b>Next</b>
												
											</span>
                                        <span>Printer.</span>
                                    </h1>
                                </div>
                                <div class="overflow-hidden mb-3">
                                    <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200"> <strong><b>"Welcome To The New Era"</b></strong> </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 mb-5">
                            <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                                <h3 class="font-weight-bold text-4 mb-2">Our Mission</h3>
                                <p>Our Mission is To Provide One Stop solutions For everyday Problems Related to Printer.</p>
                            </div>
                            <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                                <h3 class="font-weight-bold text-4 mb-2">Our Vision</h3>
                                <p>Mr Refill has a Vision to Provide Highly afforadble services Accompanying With Providing Timely Services.</p>
                            </div>
                            <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                                <h3 class="font-weight-bold text-4 mb-2">Why Us</h3>
                                <p>Mr Refill is Purely Adamant on <strong>Make In India</strong> Movement And is Providing One Of Cheapest Services Related To Printer Within Gujarat And Maharashtra , And Has Been Honoured With Many Awards For Services.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <section class="section section-primary border-0 mb-0 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': -150}">
                <div class="container">
                    <div class="row counters counters-sm pb-4 pt-3">
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="counter"> <i class="icons icon-user text-color-light"></i> <strong class="text-color-light font-weight-extra-bold" data-to="40000" data-append="+">0</strong>
                                <label class="text-4 mt-1 text-color-light">Happy Clients</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                            <div class="counter"> <i class="icons icon-badge text-color-light"></i> <strong class="text-color-light font-weight-extra-bold" data-to="15">0</strong>
                                <label class="text-4 mt-1 text-color-light">Years In Business</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                            <div class="counter"> <i class="icons icon-graph text-color-light"></i> <strong class="text-color-light font-weight-extra-bold" data-to="178">0</strong>
                                <label class="text-4 mt-1 text-color-light">High Score</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="counter"> <i class="icons icon-cup text-color-light"></i> <strong class="text-color-light font-weight-extra-bold" data-to="352">0</strong>
                                <label class="text-4 mt-1 text-color-light">Cups of Coffee</label>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 pb-sm-4 pb-lg-0 pe-lg-5 mb-sm-5 mb-lg-0">
                            <h2 class="text-color-dark font-weight-normal text-6 mb-2">Who <strong class="font-weight-extra-bold">We Are</strong></h2>
                            <p class="lead">Mr Refill is To Provide One Stop solutions For everyday Problems Related to Printer.</p>
                            <p class="pe-5 me-5">Mr Refill has a Vision to Provide Highly afforadble services Accompanying With Providing Timely Services.</p>
                        </div>
                        <div class="col-sm-8 col-md-6 col-lg-4 offset-sm-4 offset-md-4 offset-lg-2 position-relative mt-sm-5" style="top: 1.7rem;"> <img src="{{ URL::to('/') }}/img/generic/generic-corporate-3-1.jpg" class="{{ URL::to('/') }}/img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="300" style="top: 10%; left: -50%;" alt="" />                            <img src="{{ URL::to('/') }}/img/generic/generic-corporate-3-2.jpg" class="{{ URL::to('/') }}/img-fluid position-absolute d-none d-sm-block appear-animation" data-appear-animation="expandIn" style="top: -33%; left: -29%;" alt="" /> <img src="{{ URL::to('/') }}/img/generic/generic-corporate-3-3.jpg"
                                class="{{ URL::to('/') }}/img-fluid position-relative appear-animation mb-2" data-appear-animation="expandIn" data-appear-animation-delay="600" alt="" /> </div>
                    </div>
                </div>
            </section>
            <!-- <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
                <div class="row pt-5 pb-4 my-5">
                    <div class="col-md-6 order-2 order-md-1 text-center text-md-start">
                        <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                            <div> <img class="{{ URL::to('/') }}/img-fluid rounded-0 mb-4" src="{{ URL::to('/') }}/img/team/team-1.jpg" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                                <p class="text-2 mb-0">CEO</p>
                            </div>
                            <div> <img class="{{ URL::to('/') }}/img-fluid rounded-0 mb-4" src="{{ URL::to('/') }}/img/team/team-2.jpg" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                                <p class="text-2 mb-0">CEO</p>
                            </div>
                            <div> <img class="{{ URL::to('/') }}/img-fluid rounded-0 mb-4" src="{{ URL::to('/') }}/img/team/team-3.jpg" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                                <p class="text-2 mb-0">DEVELOPER</p>
                            </div>
                            <div> <img class="{{ URL::to('/') }}/img-fluid rounded-0 mb-4" src="{{ URL::to('/') }}/img/team/team-4.jpg" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                                <p class="text-2 mb-0">SEO ANALYST</p>
                            </div>
                            <div> <img class="{{ URL::to('/') }}/img-fluid rounded-0 mb-4" src="{{ URL::to('/') }}/img/team/team-5.jpg" alt="" />
                                <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                                <p class="text-2 mb-0">DESIGNER</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-1 order-md-2 text-center text-md-start mb-5 mb-md-0">
                        <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
                    </div>
                </div>
            </div> -->
            <!-- <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
                <div class="container pb-2">
                    <div class="row">
                        <div class="col-lg-6 text-center text-md-start mb-5 mb-lg-0">
                            <h2 class="text-color-dark font-weight-normal text-6 mb-2">About <strong class="font-weight-extra-bold">Our Clients</strong></h2>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                            <div class="row justify-content-center my-5">
                                <div class="col-8 text-center col-md-4"> <img src="{{ URL::to('/') }}/img/logos/logo-1.png" class="{{ URL::to('/') }}/img-fluid hover-effect-3" alt="" /> </div>
                                <div class="col-8 text-center col-md-4 my-3 my-md-0"> <img src="{{ URL::to('/') }}/img/logos/logo-2.png" class="{{ URL::to('/') }}/img-fluid hover-effect-3" alt="" /> </div>
                                <div class="col-8 text-center col-md-4"> <img src="{{ URL::to('/') }}/img/logos/logo-3.png" class="{{ URL::to('/') }}/img-fluid hover-effect-3" alt="" /> </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="owl-carousel owl-theme nav-style-1 stage-margin" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': false, 'dots': false, 'stagePadding': 40, 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                                <div>
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                        <div class="testimonial-author"> <img src="{{ URL::to('/') }}/img/clients/client-1.jpg" class="{{ URL::to('/') }}/img-fluid rounded-circle mb-0" alt=""> </div>
                                        <blockquote>
                                            <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-quotes-dark testimonial-remove-right-quote ps-md-4 mb-0">
                                        <div class="testimonial-author"> <img src="{{ URL::to('/') }}/img/clients/client-1.jpg" class="{{ URL::to('/') }}/img-fluid rounded-circle mb-0" alt=""> </div>
                                        <blockquote>
                                            <p class="text-color-dark text-4 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae metus tellus. Curabitur non lorem at odio tempus consectetur vel eu lacus. Morbi.</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p><strong class="font-weight-extra-bold text-2">John Smith</strong><span>Okler</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
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
    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::to('/') }}/js/theme.js"></script>
    <!-- Theme Initialization Files -->
    <script src="{{ URL::to('/') }}/js/theme.init.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd82806a3b4a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>
@endsection