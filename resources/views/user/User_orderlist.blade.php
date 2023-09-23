@extends('User_layout.User_layout')

@section('content-part')

<div class="row">
	<div class="col">
		<hr class="solid my-2">
		<h4 align="center">My Orders</h4> </div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="tabs">
			<ul class="nav nav-tabs nav-justified flex-column flex-md-row">
			    <li class="nav-item"> <a class="nav-link active" href="#process" data-bs-toggle="tab" class="text-center">Processing</a> </li>
				<li class="nav-item"> <a class="nav-link " href="#delivered" data-bs-toggle="tab" class="text-center">Delivered</a> </li>	
				<li class="nav-item"> <a class="nav-link" href="#canceled" data-bs-toggle="tab" class="text-center">Canceled</a> </li>

			</ul>
			<div class="tab-content">
			<div id="process" class="tab-pane active">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>no</th>
								<th>Address</th>
								<th>Date</th>
								<th>Total amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
					
						    @foreach($pending as $row)
							<tr>
								<td>Ord_0{{$row->order_id}}</td>
                                <td>{{$row->order_address}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->order_total_pay - $row->cancelamount }}</td>
								<td><a href="/User/orderdelete/{{$row->order_id}}" id="#"  name="txtid" class="btn btn-quaternary btn-circle" style="background-color:red;" title="cancel order"><i class="fa fa-times"></i></a>
								 <a href="/User/orderview/{{$row->order_id}}" class="btn btn-quaternary btn-circle" title="view products" ><i class="fa fa-eye"></i></a></td>
							</tr>
							@endforeach
						
						</tbody>
					</table>
				</div>

            <div id="delivered" class="tab-pane">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>no</th>
								<th>Address</th>
								<th>Date</th>
								<th>Total amount</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
					
						    @foreach($delivered as $row)
							<tr>
								<td>Ord_0{{$row->order_id}}</td>
                                <td>{{$row->order_address}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>{{$row->order_total_pay}}</td>
								<td><a href="/User/order/invoice/{{ $row->order_id }}" id="#"  name="txtid" class="btn btn-quaternary btn-circle" style="background-color:green;" title="view invoice"><i class="fa fa-file"></i></a> 
								<a href="/User/orderview2/{{$row->order_id}}" class="btn btn-quaternary btn-circle" title="view products" ><i class="fa fa-eye"></i></a></td>
							</tr>
							@endforeach
						
						</tbody>
					</table>
				</div>
			

		

				<div id="canceled" class="tab-pane">
					<table class="table table-hover">
						<thead>
							<tr>
							    <th>no</th>
								<th>Address</th>
								<th>Date</th>
								<th>Order</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
					
						@foreach($cancled as $row)
							<tr>
								<td>{{ $loop->index + 1 }}</td>
                                <td>{{$row->order_address}}</td>
                                <td>{{$row->created_at}}</td>
                                <td>Ord_0{{$row->order_id}}</td>
								<td><a href="/User/orderview3/{{$row->item_id}}" class="btn btn-quaternary btn-circle" title="view products" ><i class="fa fa-eye"></i></a></td>
							</tr>
							@endforeach
						
						</tbody>
					</table>
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

		<!-- Web Fonts  -->		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap/css/bootstrap.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/animate/animate.compat.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-elements.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-blog.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-shop.css">

		<!-- Skin CSS -->		<link id="skinCSS" rel="stylesheet" href="{{ URL::to('/') }}/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/custom.css">

		<!-- Head Libs -->
	


		<!-- Favicon -->
		<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->	
			<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->		
		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap/css/bootstrap.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/animate/animate.compat.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">		<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-elements.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-blog.css">
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-shop.css">

		<!-- Skin CSS -->		<link id="skinCSS" rel="stylesheet" href="{{ URL::to('/') }}/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ URL::to('/') }}/css/custom.css">

        <script src="{{ URL::to('/') }}/vendor/modernizr/modernizr.min.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SEP1T05Z5V');
</script>

		<!-- Head Libs -->
		<script src="{{ URL::to('/') }}/vendor/modernizr/modernizr.min.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-SEP1T05Z5V');
		</script>

@endsection

@section('script')

<script src="{{ URL::to('/') }}/vendor/jquery/jquery.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.appear/jquery.appear.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.easing/jquery.easing.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.validation/jquery.validate.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/lazysizes/lazysizes.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/isotope/jquery.isotope.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/owl.carousel/owl.carousel.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/vide/jquery.vide.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ URL::to('/') }}/js/theme.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ URL::to('/') }}/js/theme.init.js"></script>

	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd79760d798aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>

    <script src="{{ URL::to('/') }}/vendor/jquery/jquery.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.appear/jquery.appear.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.easing/jquery.easing.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.validation/jquery.validate.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/lazysizes/lazysizes.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/isotope/jquery.isotope.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/owl.carousel/owl.carousel.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/vide/jquery.vide.min.js"></script>		<script src="{{ URL::to('/') }}/vendor/vivus/vivus.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ URL::to('/') }}/js/theme.js"></script>

<!-- Theme Initialization Files -->
<script src="{{ URL::to('/') }}/js/theme.init.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd796cc9c34a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
  

@endsection