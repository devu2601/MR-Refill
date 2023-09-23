@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main">
            <section class="page-header page-header-modern page-header-background page-header-background-md parallax overlay overlay-color-dark overlay-show overlay-op-5 mt-0" data-plugin-parallax data-plugin-options="{'speed': 1.2}" data-image-src="{{ URL::to('/') }}/img/page-header/page-header-parallax.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1> Exchange <strong>Cartridge</strong> </h1> <span class="sub-title">Get in touch with us</span> </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb breadcrumb-light d-block text-md-right">
                                <li><a href="/User/home">Home</a></li>
                                <li class="active">Cartridge</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="650">
                        <div class="offset-anchor" id="contact-sent"></div>
                        <h2 class="font-weight-bold text-7 mt-2 mb-0">EXCHANGE CARTRIDGE</h2>
                        <form id="form-checkout" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="true" name="emailSent" id="emailSent">
                            
                            <input type="hidden" value="{{  Session::get('model_id') }}" name="modelid" id="modelid">
                            
                            <div class="row">
                               
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="{{$user_data->user_name}}" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtname" id="txtname" readonly required>                    </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="{{$user_data->user_email}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtemail" id="txtemail" readonly required>                                    </div>
                                    <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Contact Number</label>
                                    <input type="text" value="{{$user_data->user_contact}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtconatct" id="txtconatct" readonly required>                                    </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Model Name</label>
                                    <input type="text" value="{{$model_data->model_name}}" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="name" id="name" readonly required></input> </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Price</label>
                                    <input type="text" value="{{$model_data->model_price}}" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtprice" id="txtprice" readonly required> </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">State</label>
                                    <select data-msg-required="Please enter state." class="form-control text-3 h-auto py-2" name="txtstate" id="txtstate" required>
										<option value="">Please Select State</option>
                                        @foreach($statedata as $row)
										<option value="{{ $row->state_id }}">{{ $row->state_name }}</option>
                                        @endforeach
									</select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">City</label>
                                    <select onchange="getloc(this.value);" data-msg-required="Please enter city." class="form-control text-3 h-auto py-2" name="txtcity" id="txtcity" required>
										
									</select>
                                    <input type="hidden" name="txtcityid" id="txtcityid"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Landmark</label>
                                    <input type="text" value="" data-msg-required="Please enter landmark." maxlength="100" class="form-control text-3 h-auto py-2" name="txtlandmark" id="txtlandmark" required> </div>
                                    <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Pincode</label>
                                    <input type="number" value="" data-msg-required="Please enter pincode." maxlength="100" class="form-control text-3 h-auto py-2" name="txtpincode" id="txtpincode" required> </div>
                                 
                            </div>
                            <!-- <div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Latitude</label>
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtlat" id="name" required> </div>
                                    <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Longitude</label>
                                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtlng" id="name" required> </div>
                            </div> -->
                <div class="row">
                    <div class="form-group col-md-6">
                        <label>Latitude</label>
                        <input type="text" readonly class="form-control" placeholder="lat" name="txtlat" id="lat">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Longitude</label>
                        <input type="text" readonly class="form-control" placeholder="lng" name="txtlng" id="lng">
                    </div>
                </div>

                <div class="row">
                <div class="form-group col-md-12">
                <div id="map" style="height:500px; width: 1118px;" class="my-3"></div>

                    
                    </div>
                    </div>
                </div>

                
                <div class="row">
								<div class="form-group col-md-12">
									<label class="form-label">Street Address <span class="text-color-danger">*</span></label>
									<input type="text" class="form-control h-auto py-2" name="txtadd" id="txtadd" value="" placeholder="House number and street name" required /> </div>
							</div>
                           
                            
                           
                            <!-- <div class="row">
                                <div class="form-group col-md-7">
                                    <label class="form-label mb-1 text-2">Address</label>
                                    <textarea id="w3review" name="txtadd" id="txtadd" rows="4" cols="50" class="form-control text-3  py-2">
                                    </textarea>
                                </div>
                            </div> -->
                            
                            <div class="row">
                            <tr class="payment-methods">
												<td colspan="2"> <strong class="d-block text-color-dark mb-2">Payment Methods</strong>
													<div class="d-flex flex-column">
														<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method1">
															<input id="payment_method1" type="radio" class="me-2" name="payment_method" value="cod" checked /> Cash On Delivery </label>
														<label class="d-flex align-items-center text-color-grey mb-0" for="payment_method2">
															<input id="payment_method2" type="radio" class="me-2" name="payment_method" value="online" /> Online Payment </label>
													</div>
												</td>
											</tr>
                                            </div>
                            
                            <div class="row">
                                <div class="form-group col-md-12 mb-5">
                                    <input type="submit" id="contactFormSubmit" value="Place Request" class="btn btn-primary btn-modern pull-right" data-loading-text="Loading..."> </div>
                            </div>
                        </form>
        </div>

                    <div class="col-lg-5">
                       

                 
                    <!-- map -->


                    </div>
                </div>
            </div>

@endsection

@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Favicon -->
<meta name="csrf-token" content="{{ csrf_token() }}">
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
    <!-- <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhpYHdYRY2U6V_VfyyNtkPHhywLjDkhfg&callback=initMap"></script> -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&callback=initMap&key=AIzaSyAHC7ZZhrJsX0LhwNqKI5TKwhK-LHb_Lu0"
                            type="text/javascript"></script>
    <script>
                        let map;
                        function getloc(location)
                        {
                            var data = location.split(",");
                            var cityid = data;
                            $("#txtcityid").val(data[0]);
                            var lat = parseFloat(data[1]);
                            var lng = parseFloat(data[2]);
                            $("#lat").val(lat);
                            $("#lng").val(lng);
                            initMap(lat,lng);                          
                        }
                        function initMap(slat=20.0673381073285,slng=77.77845869104205) {
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: { lat: slat, lng: slng },
                                zoom: 11,
                                scrollwheel: true,
                            });
                            const uluru = { lat: slat, lng: slng };
                            let marker = new google.maps.Marker({
                                position: uluru,
                                map: map,
                                draggable: true
                            });
                            google.maps.event.addListener(marker,'position_changed',
                                function (){
                                    let lat = marker.position.lat()
                                    let lng = marker.position.lng()
                                    $('#lat').val(lat)
                                    $('#lng').val(lng)
                                })
                            google.maps.event.addListener(map,'click',
                            function (event){
                                pos = event.latLng
                                marker.setPosition(pos)
                            })
                        }
                    </script>
                  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
       
        $(document).ready(function(){
            
            $("#txtstate").change(function(){
                var stateid = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/getcity",
                    data: {"stateid":stateid},
                    success: function (data) {
                       $("#txtcity").html(data);
                    },
                    error: function (data) {
                        alert("Error : "+data);
                    }
                });
            });

            
			$.ajaxSetup({
			headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
			}); 
			$("#form-checkout").submit(function(e){
				

				var ty = $('input[name="payment_method"]:checked').val();
				// alert(ty);
				if(ty=="online")
				{
					e.preventDefault();
					var options = {
					"key": "rzp_test_l47B6PuNqO0Aib",
					"amount": ($("#txtprice").val()*100),
					"name": "Mr Refill",
					"description": "Order Payment",
					"handler": function (response){
                        //window.location.href = "/User/exchange/form/insert";
						 window.location.href = "/User/exchange/insert?txtcity="+$("#txtcityid").val()+"&txtlandmark="+$("#txtlandmark").val()+"&txtpincode="+$("#txtpincode").val()+"&txtlat="+$("#lat").val()+"&txtlng="+$("#lng").val()+"&txtprice="+$("#txtprice").val()+"&modelid="+$("#modelid").val()+"&txtadd="+$("#txtadd").val()+"&payment_method="+ty+"&trid="+response.razorpay_payment_id;
					},
					"prefill": {
					"contact": $("#txtconatct").val(),
					"email":   $("#txtemail").val(),
					},
					"theme": {
					"color": "#528FF0"
					}
					};
					var rzp1 = new Razorpay(options);
					rzp1.open();
				}
				else
				{
					//alert("asdf");
					$("#form-checkout").attr("method","POST");
					$("#form-checkout").attr("action","/User/exchange/insert2");
					$("#btnsubmit").trigger("click");
				}
			});

        });
    </script>
@endsection