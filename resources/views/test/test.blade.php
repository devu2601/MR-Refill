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
     table, th, td 
     {
        border: 1px solid black;
      }
    .margin1
    {
      margin-left: 1150px;
    }
    .margin2
    {
      margin-left: 1211px;
    }
    .margin3
    {
      margin-left: 1225px;
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
                 <h3><b>INVOICE </b>  <span class="pull-right"> Ord_0{{$orderdata[0]->order_id}} </span></h3>
                 <hr />
                 <div class="row">
                   <div class="col-md-12">
                   <p class="m-t-30">
                           <b>Invoice Date : </b>
                           <i data-feather="calendar" class="feather-sm"></i>
                          <?php echo  date('d-F-Y',strtotime($orderdata[0]->order_date_time)); ?>
                         </p>
                     
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
                
                     <div class="to_style">
                       <address class="to_style">
                         <h3>To, </h3>
                         <h4 class="fw-bold">{{ $orderdata[0]->user_name }}, </h4>
                         <p class="text-muted m-l-30">
                         {{ $orderdata[0]->order_address }},<br />
                         {{ $orderdata[0]->order_landmark }},  <br />
                         {{ $orderdata[0]->order_pincode }},  <br />
                         </p>
                         
                       </address>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="">
                       <table  cellpadding="5px" cellspacing="0px">
                         
                           <tr>
                             <th class="text-center"># </th>
                             <th>Product Name </th>
                             <th class="text-end">Quantity </th>
                             <th class="text-end">Unit Cost </th>
                             <th class="text-end">Total </th>
                           </tr>
                      
                         <?php $total=0;  ?>
                         @foreach($itemdata as $row) 
                          <tr>
                             <?php $total = $total + ($row->product_sales_price * $row->item_quantity);  ?>
                             <td class="text-center">{{ $loop->index + 1 }}</td>
                             <td>{{ $row->product_name }}</td>
                             <td class="text-end">{{ $row->item_quantity }}</td>
                             <td class="text-end"> <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>{{ $row->product_sales_price }}</td>
                             <td class="text-end"> <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>{{ $row->product_sales_price * $row->item_quantity }}</td>
                             
                           </tr>
                           @endforeach
                       
                       </table>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="pull-right m-t-30 text-end">
                       <p class="margin1">Sub - Total amount:  <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span><?php echo $total; ?> </p>
                       <p class="margin2">Discount : <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>{{ $orderdata[0]->order_discount }} </p>
                       <hr/>
                       <?php $total = $total - ($orderdata[0]->order_discount); ?>
                       <h3 class="margin3"><b>Total : </b> <span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span> <?php echo $total; ?> </h3>
                     </div>
                     
                     <div class="clearfix"></div>
                     <hr />
                     
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