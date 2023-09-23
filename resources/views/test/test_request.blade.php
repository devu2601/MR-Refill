<!DOCTYPE html>
<html>
<head>
 <title>Laravel 8 Send Email Example</title>
 <style>
     .heading_invoice
     {
        color: red;
        font-size: 40px;
     }
     .to_style
     {
        text-align: end;
     }
     .title2_style
     {
        color: #0029ff;
     }
     table, th, td {
            border: 1px solid black;
         }
 </style>
</head>
<body>
 
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-6 align-self-center">
               <h3 class="text-themecolor mb-0 heading_invoice">Invoice </h3>
             </div>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <div class="row">
             <div class="col-md-12">
               <div class="card card-body printableArea">
                 <h3><b>INVOICE </b>  <span class="pull-right"> Exchange_0{{$invoice[0]->request_id}} </span></h3>
                 <hr />
                 <div class="row">
                   <div class="col-md-12">
                     <div class="pull-left">
                       <address>
                       <h3>
                           <b class="">Mr.</b>
                           <b class="title2_style">REFILL </b>
                         </h3>
                         <p class="text-muted m-l-5">
                          101, Raj World,<br />
                          Palanpur jakatnaka, cenal road<br />
                          Adajan, Surat<br />
                          395009
                         </p>
                       </address>
                     </div>
                     <div class="to_style">
                       <address class="to_style">
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
                     <div class="">
                       <table cellpadding="5px" cellspacing="0px">
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
                             <td class="text-end"><span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> {{ $row->payment_amount + $row->exchange_extra_cost }}</td>
                           </tr>
                           @endforeach
                         </tbody>
                       </table>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="pull-right m-t-30 text-end">
                       <p>Sub - Total amount: <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> <?php echo $total; ?> </p>
                       
                       <hr/>
                     
                       <h3><b>Total : </b> <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> <?php echo $total; ?> </h3>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     <div class="">
                     <div class="row">
                            <b><label for="">Description for extra work</label></b>
                       </div>
                       <div class="row">
                            <textarea name="" id="" cols="70" rows="10">{{ $log_data[0]->log_description }}</textarea>
                       </div>

                        
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
        
       
</body>
</html>