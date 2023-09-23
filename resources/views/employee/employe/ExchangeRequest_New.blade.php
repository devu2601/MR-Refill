@extends('employee.layout.employe__mainlayout')

@section("title-section")
Exchange Request
@endsection

@section("employe-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
     <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" /> 
    
@endsection

@section("employe-jq-section")
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

@section('employe-exchangereq-section')
<div class="container-fluid">
           <div class="row page-titles">
             
             <div class="
                col-md-7 col-12
                align-self-center
                d-none d-md-flex
                justify-content-end">
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
                   <h3 class="card-title mb-0"><b>Exchange New Request</b> </h3>
                 </div>
                
                 <div class="card-body">
                  
                   <div class="table-responsive">

                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead>
                         <tr>
                           <th>Request id</th>
                           <th>User name</th>
                           <th>Model name</th>
                           <th>Exchange date</th>
                           <th>Exchange time</th>
                           
                           <th>City</th>
                           <th>Status</th>
                           <th colspan="2" class="text-center">Action</th>

                         </tr>
                       </thead>
                       <tbody>
                        @foreach($request_data as $row)
                         <tr>
                           <td>{{ $row->request_id  }}</td>
                           <td>{{ $row->user_name }}</td>
                           <td>{{ $row->model_name }}</td>
                           <td>{{ $row->exchange_date }}</td>
                           <td>{{ $row->exchange_time }}</td>
                           
                           <td>{{ $row->city_name }}</td>
                           <td>

                            {{ $row->exchange_status }}
                           <td>
                              <a href="/employe/exchangerequest/view/{{ $row->request_id  }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a><br>
                              
                           </td>
                          
                         </tr>
                         @endforeach
                       </tbody>
                       <tfoot>
                         <tr>
                           <th>Request id</th>
                           <th>User name</th>
                           <th>Model name</th>
                           <th>Exchange date</th>
                           <th>Exchange time</th>
                           
                           <th>City</th>
                           <th>Status</th>
                           <th colspan="2" class="text-center">Action</th>
                         </tr>
                       </tfoot>
                     </table>
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


