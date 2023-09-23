@extends('admin.layout.admin_mainlayout')

@section("title-section")
All employees
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap4-toggle.min.css" rel="stylesheet" />
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
    <script src="{{ URL::to('/') }}/dist/js/bootstrap4-toggle.min.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
@endsection

@section("admin-employee-all_employee")
<div class="container-fluid">
           
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
            @endif
				</div>
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="border-bottom title-part-padding">
                 <form action="/admin/employee/addnew" method="get"> 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">All Employees </h4>
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit" name="addbtn">Add Employee</button>
                      </div>
                      
                    </div>
                  </form>
                 </div>
                 <div class="card-body">
                  
                   <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead align="center">
                         <tr>
                           <th># </th>
                           <th>Employee name </th>
                           <th>Employee profile</th>
                           <th>Employee status</th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($emp_data as $row)
                         <tr>
                             <td>{{ $loop->index + 1 }}</td>
                             <td>{{ $row->employee_name }}</td>
                             <td><img height="100" width="100" src="{{ URL::to('/') }}/uploads/employee/{{ $row->employee_profile }}" alt=""></img></td>
                             <td>
                                <!-- {{ $row->employee_active }} -->
                                <div class="form-group">
                               <input type="checkbox" onchange="window.location='/admin/employee/changestatus/{{ $row->employee_id }}';"    @if($row->employee_active=="Active") checked  @endif data-toggle="toggle" data-onstyle="primary" value="active" name="active" autocomplete="off">
                         </div>
                             </td>
                           <td>
                     <!-- <a href="/admin/employee/detailed/view/{{ $row->employee_id }}" ><button type="button" class="btn waves-effect waves-light btn-success">
                      View
                     </button></a> -->
                     <center>
                     <a href="/admin/employee/detailed/view/{{ $row->employee_id }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a><br>
                     </center>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                         <th># </th>
                           <th>Employee name </th>
                           <th>Employee profile</th>
                           <th>Employee status</th>
                           <th>Actions </th>
                         </tr>
                       </tfoot>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
</div>
         


          
@endsection