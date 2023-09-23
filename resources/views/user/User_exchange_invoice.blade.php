@extends('User_layout.User_layout')
@section('content-part')
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-6 align-self-center">
               <h3 class="text-themecolor mb-0">Invoice </h3>
             </div>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <div class="row">
             <div class="col-md-12">
               <div class="card card-body printableArea">
                 <h3><b>INVOICE </b>  <span class="pull-right">&nbsp&nbsp Exchange_0{{$invoice[0]->request_id}} </span></h3>
                 <hr />
                 <div class="row">
                   <div class="col-md-12">
                     <div class="pull-left">
                       <address>
                         <h3>
                           <b class="text-danger">Mr. REFILL </b>
                         </h3>
                         <p class="text-muted m-l-5">
                          101, Raj World,<br />
                          Palanpur jakatnaka, cenal road<br />
                          Adajan, Surat<br />
                          395009
                         </p>
                       </address>
                     </div>
                     <div class="pull-right text-end">
                       <address>
                         <h3>To, </h3>
                         <h4 class="fw-bold">{{ $invoice[0]->user_name }}, </h4>
                         <p class="text-muted m-l-30">
                         {{ $invoice[0]->exchange_address }},<br />
                         {{ $invoice[0]->exchange_landmark }},  <br />
                         {{ $invoice[0]->exchange_pincode }},  <br />
                         </p>
                         <p class="m-t-30">
                           <b>Invoice Date : </b>
                           <i data-feather="calendar" class="feather-sm"></i>
                          <?php echo  date('d-F-Y',strtotime($invoice[0]->request_date_time)); ?>
                         </p>
                       </address>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="table-responsive m-t-40" style="clear: both">
                       <table class="table table-hover">
                         <thead>
                           <tr>
                             <th class="text-center"># </th>
                             <th>Product Name </th>
                             <th class="text-end">Exchange cost </th>
                             <th class="text-end">Extra Cost </th>
                             <th class="text-end">Total </th>
                           </tr>
                         </thead>
                         <tbody>
                         <?php $total=0;  ?>
                         @foreach($invoice as $row) 
                          <tr>
                             <?php $total = $total + ($row->payment_amount + $row->exchange_extra_cost);  ?>
                             <td class="text-center">{{ $loop->index + 1 }}</td>
                             <td>{{ $row->model_name }}</td>
                             <td class="text-end">{{ $row->payment_amount }}</td>
                             <td class="text-end">{{ $row->exchange_extra_cost }}</td>
                             <td class="text-end"><i style="font-size:14px" class="fa">&#xf156;</i> {{ $row->payment_amount + $row->exchange_extra_cost }}</td>
                           </tr>
                           @endforeach
                         </tbody>
                       </table>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="pull-right m-t-30 text-end">
                       <p>Sub - Total amount: <i style="font-size:14px" class="fa">&#xf156;</i> <?php echo $total; ?> </p>
                       <!-- <p>Discount (10%) : <i style="font-size:14px" class="fa">&#xf156;</i> {{ $invoice[0]->order_discount }} </p> -->
                       <hr/>
                       
                       <h3><b>Total : <i style="font-size:14px" class="fa">&#xf156;</i></b> <?php echo $total; ?> </h3>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     <div class="text-end">
                       
                        
                        <!-- @if($invoice[0]->order_status=="delivered")
                          <button id="print" class="btn btn-default btn-outline" type="button">
                            <span><i data-feather="printer" class="feather-sm"></i>
                            Print </span> 
                          </button>
                        @endif 
                        @if($invoice[0]->order_status!="delivered")
                          @if($invoice[0]->order_status=="pending")
                            <a href="/admin/order/statuschange/{{ $invoice[0]->order_id }}"><button type="button" class="btn btn-info">Process</button></a>
                          @else
                            <a href="/admin/order/statuschange/{{ $invoice[0]->order_id }}"><button type="button" class="btn btn-info">Delivered</button></a>
                          @endif  
                          <button type="button" class="btn btn-danger">Cancel</button>
                        @endif -->
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- End PAge Content -->
           <!-- -------------------------------------------------------------- -->
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
<script src="{{ URL::to('/') }}/dist/js/invoice.js"></script>

<!-- Theme Initialization Files -->
<script src="{{ URL::to('/') }}/js/theme.init.js"></script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd796cc9c34a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
<script src="{{ URL::to('/') }}/dist/js/jquery.PrintArea.js"></script>
<script>
      $(function () {
        $("#print").click(function () {
          var mode = "iframe"; //popup
          var close = mode == "popup";
          var options = {
            mode: mode,
            popClose: close,
          };
          $("div.printableArea").printArea(options);
        });
      });
    </script>  

@endsection