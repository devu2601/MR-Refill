@extends('admin.layout.admin_mainlayout')

@section("title-section")
Admin Complete Request
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
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
@endsection
@section("admin-exchange-admin_complete")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Manage requests </h3>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <!-- basic table -->
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="border-bottom title-part-padding">
                 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">Admin Complete Request </h4>
                      </div>
                      <div class="col-2">
                        <!-- <button class="btn btn-success" type="submit" name="addbtn">Add Brand</button> -->
                      </div>
                      
                    </div>
                 </div>
                 <div class="card-body">
                  
                   <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead align="center">
                         <tr>
                         <th># </th>
                           <th>User Name </th>
                           <th>Model Name </th>
                           <th>Delivery date </th>
                           <th>Delivery time </th>
                           <th>Address </th>
                           <th>Total payment amount </th>
                           <th>Payment type </th>
                           <th>Action </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($admin_complete_data as $row)
                         <tr>
                         <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->user_name }} </td>
                           <td>{{ $row->model_name }} </td>
                           <td>{{ $row->exchange_date }} </td>
                           <td>{{ $row->exchange_time }} </td>
                           <td>{{ $row->exchange_address }} </td>
                           <td>{{ $row->payment_amount }} </td>
                           <td>{{ $row->payment_type }} </td>
                           <td>
                            <a href="/admin/exchange/admin_complete/details/{{ $row->request_id }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                         <th># </th>
                           <th>User Name </th>
                           <th>Model Name </th>
                           <th>Delivery date </th>
                           <th>Delivery time </th>
                           <th>Address </th>
                           <th>Total payment amount </th>
                           <th>Payment type </th>
                           <th>Action </th>
                         </tr>
                       </tfoot>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
@endsection