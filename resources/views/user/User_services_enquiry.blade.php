@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{ URL::to('/') }}/img/enquiry3.jpg " data-image-src-width="200px" data-image-src-height="20px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1><strong>ENQUIRY</strong> </h1> <span class="sub-title">Get in touch with us</span> </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                                <li><a href="/User/home">Home</a></li>
                                <li class="active">ENQUIRY</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row py-4">
                    <div class="col-lg-7 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">
                        <div class="offset-anchor" id="contact-sent"></div>
                        <h2 class="font-weight-bold text-7 mt-2 mb-0">ENQUIRY</h2>
                        <form id="contactFormAdvanced" action="/User/services/enquiry/insert" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="true" name="emailSent" id="emailSent">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="{{$user_data[0]->user_name}}" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtname" id="txtname"  readonly required></div>
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="{{$user_data[0]->user_email}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtemail" id="txtemail" readonly required></div>
                                    <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Contact Number</label>
                                    <input type="text" value="{{$user_data[0]->user_contact}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtnumber" id="txtnumber" readonly required></div>
                                    <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Subject</label>
                                    <input type="text" value="" data-msg-required="Please enter subject." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtsubject" id="txtsubject"  required> </div>
                            </div>
                           
                          
                            
                           
                            <div class="row">
                                <div class="form-group col-md-12 mb-4">
                                    <label class="form-label mb-1 text-2">Description</label>
                                    <textarea maxlength="5000" data-msg-required="Please enter description." rows="6" class="form-control text-3 h-auto py-2" name="txtdescription" id="txtdescription" required></textarea>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="form-group col-md-12 mb-5">
                                    <input type="submit" id="contactFormSubmit" value="Place Request" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading..."> </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="overflow-hidden mb-1">
                            <h4 class="text-primary mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Get in <strong>Touch</strong></h4>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus.</p>
                        </div>
                        <div class="overflow-hidden">
                            <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius.</p>
                        </div>
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                            <h4 class="text-primary pt-5">Our <strong>Office</strong></h4>
                            <ul class="list list-icons list-icons-style-3 mt-2">
                                <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                                <li><i class="fas fa-phone top-6"></i> <strong>Phone:</strong> (123) 456-789</li>
                                <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="https://www.okler.net/cdn-cgi/l/email-protection#c7aaa6aeab87a2bfa6aab7aba2e9a4a8aa"><span class="__cf_email__" data-cfemail="0a676b63664a6f726b677a666f24696567">[email&#160;protected]</span></a></li>
                            </ul>
                            <div class="row lightbox mt-4 mb-0 pb-0" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <a class="{{ URL::to('/') }}/img-thumbnail p-0 border-0 d-block" href="{{ URL::to('/') }}/img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}"> <img class="{{ URL::to('/') }}/img-fluid" src="{{ URL::to('/') }}/img/office/our-office-1.jpg" alt="Office"> </a>
                                </div>
                                <div class="col-md-4 mb-4 mb-md-0">
                                    <a class="{{ URL::to('/') }}/img-thumbnail p-0 border-0 d-block" href="{{ URL::to('/') }}/img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}"> <img class="{{ URL::to('/') }}/img-fluid" src="{{ URL::to('/') }}/img/office/our-office-2.jpg" alt="Office"> </a>
                                </div>
                                <div class="col-md-4">
                                    <a class="{{ URL::to('/') }}/img-thumbnail p-0 border-0 d-block" href="{{ URL::to('/') }}/img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}"> <img class="{{ URL::to('/') }}/img-fluid" src="{{ URL::to('/') }}/img/office/our-office-3.jpg" alt="Office"> </a>
                                </div>
                            </div>
                            <h4 class="text-primary pt-5">Business <strong>Hours</strong></h4>
                            <ul class="list list-icons list-dark mt-2">
                                <li><i class="far fa-clock top-6"></i> Monday - Friday - 9am to 5pm</li>
                                <li><i class="far fa-clock top-6"></i> Saturday - 9am to 2pm</li>
                                <li><i class="far fa-clock top-6"></i> Sunday - Closed</li>
                            </ul>
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
    <!-- Current Page {{ URL::to('/') }}/vendor and Views -->
    <script src="{{ URL::to('/') }}/js/views/view.contact.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg"></script>
    <script>
        /*
        				Map Settings

        					Find the Latitude and Longitude of your address:
        						- http://universimmedia.pagesperso-orange.fr/geo/loc.htm
        						- http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

        				*/
        // Map Markers
        var mapMarkers = [{
            address: "217 Summit Boulevard, Birmingham, AL 35243",
            html: "<strong>Alabama Office</strong><br>217 Summit Boulevard, Birmingham, AL 35243<br><br><a href='#' onclick='mapCenterAt({latitude: 33.44792, longitude: -86.72963, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "{{ URL::to('/') }}/img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }, {
            address: "645 E. Shaw Avenue, Fresno, CA 93710",
            html: "<strong>California Office</strong><br>645 E. Shaw Avenue, Fresno, CA 93710<br><br><a href='#' onclick='mapCenterAt({latitude: 36.80948, longitude: -119.77598, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "{{ URL::to('/') }}/img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }, {
            address: "New York, NY 10017",
            html: "<strong>New York Office</strong><br>New York, NY 10017<br><br><a href='#' onclick='mapCenterAt({latitude: 40.75198, longitude: -73.96978, zoom: 16}, event)'>[+] zoom here</a>",
            icon: {
                image: "{{ URL::to('/') }}/img/pin.png",
                iconsize: [26, 46],
                iconanchor: [12, 46]
            }
        }];
        // Map Initial Location
        var initLatitude = 37.09024;
        var initLongitude = -95.71289;
        // Map Extended Settings
        var mapSettings = {
            controls: {
                draggable: (($.browser.mobile) ? false : true),
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true
            },
            scrollwheel: false,
            markers: mapMarkers,
            latitude: initLatitude,
            longitude: initLongitude,
            zoom: 5
        };
        var map = $('#googlemaps').gMap(mapSettings),
            mapRef = $('#googlemaps').data('gMap.reference');
        // Map Center At
        var mapCenterAt = function(options, e) {
                e.preventDefault();
                $('#googlemaps').gMap("centerAt", options);
            }
            // Styles from https://snazzymaps.com/
        var styles = [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#e9e9e9"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dedede"
            }, {
                "lightness": 21
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#333333"
            }, {
                "lightness": 40
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f2f2"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }];
        var styledMap = new google.maps.StyledMapType(styles, {
            name: 'Styled Map'
        });
        mapRef.mapTypes.set('map_style', styledMap);
        mapRef.setMapTypeId('map_style');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd825c79228aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>

@endsection