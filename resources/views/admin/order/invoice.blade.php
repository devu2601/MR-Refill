@extends('admin.layout.admin_mainlayout')

@section("title-section")
Invoice
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" /> -->
@endsection

@section("admin-jq-section")
<script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="{{ URL::to('/') }}/dist/js/app.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/app.init.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="{{ URL::to('/') }}/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ URL::to('/') }}/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ URL::to('/') }}/dist/js/feather.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/custom.min.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/invoice.js"></script>
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

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    
@endsection

@section("admin-orders_invoice-section")
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
                 <h3><b>INVOICE </b>  <span class="pull-right">&nbsp&nbsp Ord_0{{$orderdata[0]->order_id}} </span></h3>
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
                         <h4 class="fw-bold">{{ $orderdata[0]->user_name }}, </h4>
                         <p class="text-muted m-l-30">
                         {{ $orderdata[0]->order_address }},<br />
                         {{ $orderdata[0]->order_landmark }},  <br />
                         {{ $orderdata[0]->order_pincode }},  <br />
                         </p>
                         <p class="m-t-30">
                           <b>Invoice Date : </b>
                           <i data-feather="calendar" class="feather-sm"></i>
                          <?php echo  date('d-F-Y',strtotime($orderdata[0]->order_date_time)); ?>
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
                             <th class="text-end">Quantity </th>
                             <th class="text-end">Unit Cost </th>
                             <th class="text-end">Total </th>
                           </tr>
                         </thead>
                         <tbody>
                         <?php $total=0;  ?>
                         @foreach($itemdata as $row) 
                          <tr>
                             <?php $total = $total + ($row->product_sales_price * $row->item_quantity);  ?>
                             <td class="text-center">{{ $loop->index + 1 }}</td>
                             <td>{{ $row->product_name }}</td>
                             <td class="text-end">{{ $row->item_quantity }}</td>
                             <td class="text-end"><i style="font-size:14px" class="fa">&#xf156;</i> {{ $row->product_sales_price }}</td>
                             <td class="text-end"><i style="font-size:14px" class="fa">&#xf156;</i> {{ $row->product_sales_price * $row->item_quantity }}</td>
                             
                           </tr>
                           @endforeach
                         </tbody>
                       </table>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="pull-right m-t-30 text-end">
                       <p>Sub - Total amount: <i style="font-size:14px" class="fa">&#xf156;</i> <?php echo $total; ?> </p>
                       <p>Discount (10%) : <i style="font-size:14px" class="fa">&#xf156;</i> {{ $orderdata[0]->order_discount }} </p>
                       <hr/>
                       <?php $total = $total - ($orderdata[0]->order_discount); ?>
                       <h3><b>Total : <i style="font-size:14px" class="fa">&#xf156;</i></b> <?php echo $total; ?> </h3>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     <div class="text-end">
                       
                        
                        @if($orderdata[0]->order_status=="delivered")
                        <a href="/admin/send-email-order-pdf/{{ $orderdata[0]->user_id }}/{{ $orderdata[0]->order_id }}"><button type="button" class="btn btn-info">Send invoice to user</button></a>
                        @endif
                        @if($orderdata[0]->order_status!="delivered")
                          @if($orderdata[0]->order_status=="pending")
                            <a href="/admin/order/statuschange/{{ $orderdata[0]->order_id }}"><button type="button" class="btn btn-info">Process</button></a>
                          @else
                            <a href="/admin/order/statuschange/{{ $orderdata[0]->order_id }}"><button type="button" class="btn btn-info">Delivered</button></a>
                          @endif  
                          <button type="button" class="btn btn-danger">Cancel</button>
                        @endif
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