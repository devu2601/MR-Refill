@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pb-4">
			<div class="container">
				<div class="row">
					<div class="col">
						<ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
							<li class="text-transform-none me-2"> <a href="/User/cart" class="text-decoration-none text-color-dark text-color-hover-primary">Shopping Cart</a> </li>
							<li class="text-transform-none text-color-dark me-2"> <a href="/User/checkout" class="text-decoration-none text-color-primary">Checkout</a> </li>
							<li class="text-transform-none text-color-grey-lighten"> <a href="#" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Order Complete</a> </li>
						</ul>
					</div>
				</div>
			
				<form role="form" id="form-checkout" class="needs-validation" method="post" action="/User/order/insert">
					@csrf
					<div class="row">
						<div class="col-lg-7 mb-4 mb-lg-0">
							<h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Billing Details</h2>
							<div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Full Name</label>
                                    <input type="text" value="{{$user_data[0]->user_name}}" data-msg-required="Please enter your name." maxlength="100" class="form-control text-3 h-auto py-2" name="txtname" id="txtname" readonly required>                    </div>
                                <div class="form-group col-md-12">
                                    <label class="form-label mb-1 text-2">Email Address</label>
                                    <input type="email" value="{{$user_data[0]->user_email}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtemail" id="txtemail" readonly required>                                    </div>
                            </div>
							<label class="form-label mb-1 text-2">Contact Number</label>
                                    <input type="text" value="{{$user_data[0]->user_contact}}" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control text-3 h-auto py-2" name="txtnumber" id="txtnumber" readonly required>
							<div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">State</label>
                                    <select data-msg-required="Please enter the state." class="form-control text-3 h-auto py-2" name="txtstate" id="txtstate" required>
										<option value="">Please Select State</option>
                                        @foreach($statedata as $row)
										<option value="{{ $row->state_id }}">{{ $row->state_name }}</option>
                                        @endforeach
									</select>
                                </div>
								<div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">City</label>
									<select onchange="getloc(this.value);" data-msg-required="Please enter the city." class="form-control text-3 h-auto py-2" name="txtcity" id="txtcity" required>
										
									</select>
                                </div>
								<div class="row">
                                <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Landmark</label>
                                    <input type="text" value="" data-msg-required="Please enter landmark." maxlength="100" class="form-control text-3 h-auto py-2" name="txtlandmark" id="txtlandmark" required> </div>
                                    <div class="form-group col-md-6">
                                    <label class="form-label mb-1 text-2">Pincode</label>
                                    <input type="number" value="" data-msg-required="Please enter pincode." maxlength="100" class="form-control text-3 h-auto py-2" name="txtpincode" id="txtpincode" required> </div>
                                 
                            </div>
                            </div>

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
                <div class="form-group col-md-12s">
                <div id="map" style="height:200px; width: 650px;" class="my-3"></div>

                    
                    </div>
                    </div>

							
							<div class="row">
								<div class="form-group col">
									<label class="form-label">Street Address <span class="text-color-danger">*</span></label>
									<input type="text" class="form-control h-auto py-2" name="address1" id="address1"value="" placeholder="House number and street name" required /> </div>
							</div>
							
							
							
							
						</div>
						<div class="col-lg-5 position-relative">
							<div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
								<div class="card-body">
									<h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
									<table class="shop_table cart-totals mb-3">
										<tbody>
											<tr>
												<td colspan="2" class="border-top-0"> <strong class="text-color-dark">Product</strong> </td>
											</tr>
											<?php $total=0; ?>
											@foreach($cart_data as $row)
											<tr>
												<td> <strong class="d-block text-color-dark line-height-1 font-weight-semibold">{{$row->product_name}}<span class="product-qty">  (QTY:-{{$row->quantity}})</span></strong> </td>
												<td class="text-end align-top"> <span class="amount font-weight-medium text-color-grey">{{$row->product_sales_price * $row->quantity}}</span> </td>
											</tr>
											<?php $total = $total + ($row->product_sales_price * $row->quantity);  ?>
											<!-- <input type="text" id="subtotalamount" value="/> -->
											@endforeach
											<input type="hidden" id="subtotalamount" value="<?php echo $total; ?>"/>
											<!--  -->
											<tr class="shipping">
												<td colspan="2"> <strong class="d-block text-color-dark mb-2">Shipping</strong>
													<div class="d-flex flex-column">
														<label class="d-flex align-items-center text-color-grey mb-0" for="shipping_method1">
															<input id="shipping_method1" type="radio" class="me-2" name="shipping_method" value="free" checked /> Free Shipping </label>
															</div>
												</td>
											</tr>

											<tr class="">
												<td colspan="2">
												<div class="col-md-auto px-0 mb-3 mb-md-0">
														<div class="d-flex align-items-center">
															<input type="text" class="form-control h-auto border-radius-0 line-height-1 py-3" name="couponCode" id="couponCode" placeholder="Coupon Code" />
															<button type="button" id="btnapply" class="btn btn-light btn-modern text-color-dark bg-color-light-scale-2 text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Apply Coupon</button>
														</div>
														<p id="cerror"></p>
													</div>
												</td>
											</tr>
											
										

											<tr class="total">
												<td> <strong class="text-color-dark text-3-5">Sub Total</strong> </td>
												<td class="text-end"> <strong class="text-color-dark"><span class="amount text-color-dark text-5"><?php echo $total; ?></span></strong>
											<input type="hidden" name="total" id="total" value="<?php echo $total; ?>"></input> </td>
											<input type="hidden" name="offerid" id="offerid">
											</tr>
											<tr class="total">
												<td> <strong class="text-color-dark text-3-5">Discount</strong> </td>
												<td class="text-end"> <strong class="text-color-dark"><span class="amount text-color-dark text-5" id="discount1">0</span></strong>
											</td>
											<input type="hidden" name="discount2" id="discount2">
											</tr>
											<tr class="total">
												<td> <strong class="text-color-dark text-3-5">Total</strong> </td>
												<td class="text-end"> <strong class="text-color-dark"><span id="finaltotal" class="amount text-color-dark text-5"><?php echo $total; ?></span></strong>
											<input type="hidden" name="finaltotal" id="finaltotal" value="<?php echo $total; ?>"></input> </td>
											</tr>
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
											<tr>
												<td colspan="2"> Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy. </td>
											</tr>
										</tbody>
									</table>
									<button type="submit" id="btnsubmit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Place Order <i class="fas fa-arrow-right ms-2"></i></button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

@endsection

@section('css')

<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
	<!-- -->
	
	<!--  -->
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

<!-- Vendor -->
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
	<!-- Theme Base, Components and Settings -->
	<script src="{{ URL::to('/') }}/js/theme.js"></script>
	<!-- Current Page Vendor and Views -->
	<script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>
	<!-- Theme Initialization Files -->
	<script src="{{ URL::to('/') }}/js/theme.init.js"></script>
	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd871868184a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&callback=initMap&key=AIzaSyAHC7ZZhrJsX0LhwNqKI5TKwhK-LHb_Lu0"
                            type="text/javascript"></script>
    <script>

			$("#btnapply").click(function(){
				
				var coupon = $("#couponCode").val();
				var total = $("#subtotalamount").val();
				// alert(total);



				
				$("#offerid").val("0");
				$("#offerid").html("0");
				$("#discount1").html("0");
				$("#discount2").html("0");
				var newtotal = parseInt(total) + parseInt($("#discount2").val());
				$("#subtotalamount").val(newtotal);
				$("#finaltotal").html($("#total").val());
				$("#discount2").val("0");
		
				$.ajax({
                    type: "POST",
                    url: "/checkcoupon",
					dataType: "json",
                    data: {"coupon":coupon,"total":$("#total").val()},
                    success: function (data) {
						// alert(data["status"]);
                       if(data["status"]=="valid")
					   {
						   $("#cerror").html("Coupon Applied!");
						   $("#discount2").val(data["discount"]);
						   $("#offerid").val(data["offer_id"]);
						   $("#offerid").html(data["offer_id"]);
						   $("#discount1").html(data["discount"]);
						   $("#discount2").html(data["discount"]);
					       var newtotal = total - data["discount"];
						   $("#subtotalamount").val(newtotal);
						//    alert(newtotal);
						   $("#finaltotal").html(newtotal);
					   }
					   else if(data["status"]=="ofinvalid")
					   {
						$("#cerror").html("You have already used this coupon");
					   }
					   else
					   {
						   $("#cerror").html("Invalid Coupon");
					   }
                    },
                    error: function (data) {
                        alert("Error : "+data);
                    }
					
                });
			});















                        let map;
                        function getloc(location)
                        {
                            var data = location.split(",");
                            var cityid = data[0];
                            $("#txtcityid").val(cityid);
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
                    url: "/shop/getcity",
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
					"amount": ($("#subtotalamount").val()*100),
					"name": "Mr Refill",
					"description": "Order Payment",
					"handler": function (response){
						window.location.href = "/User/order/insert?address1="+$("#address1").val()+"&txtlandmark="+$("#txtlandmark").val()+"&txtpincode="+$("#txtpincode").val()+"&offerid="+$("#offerid").val()+"&txtlat="+$("#lat").val()+"&txtlng="+$("#lng").val()+"&total="+$("#subtotalamount").val()+"&discount2="+$("#discount2").val()+"&payment_method="+ty+"&trid="+response.razorpay_payment_id;
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
					$("#form-checkout").attr("action","/User/order/insert2");
					$("#btnsubmit").trigger("click");
				}
			});







        });
    </script>

@endsection


