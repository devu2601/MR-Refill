@extends('admin.layout.admin_mainlayout')

@section("title-section")
View Assigned Request
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

@section("admin-view_assigned_request-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Assigned Request Details </h3>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <!-- basic table -->
           @if(Session::get('status'))
				<div class="alert alert-success d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('status')}}
				</div>
				</div>
			@endif
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <!-- <div class="border-bottom title-part-padding">
                 </div> -->
                 <div class="card-body">
                  <form action="/admin/exchange/status_change_assigned/{{ $assigned_data[0]->request_id }}">
                    @csrf
                  
                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="table-responsive">
                         <table class="table">
                           <tbody>
                             <tr>
                               <th>User name </th>
                               <td>{{ $assigned_data[0]->user_name }} </td>
                             </tr>
                             <tr>
                               <th>Model name </th>
                               <td>{{ $assigned_data[0]->model_name }} </td>
                             </tr>
                             <tr>
                            <th>Date of appointment</th>
                            <td>{{ $assigned_data[0]->exchange_date }} </td>
                        </tr>
                        <tr>
                           <th>Time of appointment</th>
                           <td>{{ $assigned_data[0]->exchange_time }}  </td>
                        </tr>
                        <tr>
                           <th>Address </th>
                           <td>{{ $assigned_data[0]->exchange_address }}</td>
                        </tr>
                        <tr>   
                           <th>Landmark </th>
                           <td>{{ $assigned_data[0]->exchange_landmark }}</td>
                        </tr>
                        <tr>
                           <th>Pincode </th>
                           <td>{{ $assigned_data[0]->exchange_pincode }}</td>
                        </tr>
                        <tr>
                           <th>Latitude</th>
                           <td>{{ $assigned_data[0]->exchange_latitude }}  </td>
                        </tr>
                        <tr>
                           <th>Longitude</th>
                           <td>{{ $assigned_data[0]->exchange_longititute }}  </td>
                        </tr>
                        <tr>
                           <th>Status</th>
                           <td>{{ $assigned_data[0]->exchange_status }}  </td>
                        </tr>
                        <tr>
                           <th>Payment type</th>
                           <td>{{ $assigned_data[0]->payment_type }}  </td>
                        </tr>
                        <tr>
                           <th>Total payment</th>
                           <td>{{ $assigned_data[0]->payment_amount }}  </td>
                        </tr>
                        <tr>
                           <th>Assigned to </th>
                           <td>{{ $log_data[0]->employee_name }}</td>
                        </tr>
                        <tr >
                            <td colspan="2"><a href="/admin/exchange/assign"><button type="button" class="btn waves-effect waves-light btn-info">Back</button></a></td>
                        </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                     
                 </div>
                 </form>
               </div>
             </div>
           </div>
        
      
           <!-- -------------------------------------------------------------- -->
           <!-- End PAge Content -->
           <!-- -------------------------------------------------------------- -->
        
@endsection