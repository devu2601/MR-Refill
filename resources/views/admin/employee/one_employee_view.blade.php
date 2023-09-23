@extends('admin.layout.admin_mainlayout')

@section("title-section")
View Employee Details
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
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
    <script>
      $(document).ready(function(){
        $(".btn-delete").click(function(){
          var id = $(this).attr("data-id");
          var img1 = $(this).attr("data-img1");
          var img2 = $(this).attr("data-img2");
          var img3 = $(this).attr("data-img3");
          $("#deleteid").val(id);
          $("#deleteimg1").val(img1);
          $("#deleteimg2").val(img2);
          $("#deleteimg3").val(img3);
        })
      })
    </script>
@endsection


@section("admin-viewemployee-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Employee details </h3>
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
                  
                   <div class="table-responsive">
                     <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="table-responsive">
                         <table class="table">
                           <tbody>
                           <tr>
                           <th>Employee profile </th>
                           <td><img height="100" width="150" src="{{ URL::to('/') }}/uploads/employee/{{ $singleemployee->employee_profile }}" /> </td>
                        </tr>
                        <tr>
                           <th>Employee name</th>
                           <td>{{ $singleemployee->employee_name }} </td>
                        </tr>
                        <tr>
                            <th>Employee contact no</th>
                            <td>{{ $singleemployee->employee_contact }} </td>
                        </tr>
                        <tr>
                           <th>Employee email </th>
                           <td>{{ $singleemployee->employee_email }}  </td>
                        </tr>
                        <tr>
                           <th>Employee status </th>
                           <td>{{ $singleemployee->employee_active }}</td>
                        </tr>
                        <tr>   
                           <th>Employee registration time </th>
                           <td>{{ $singleemployee->employee_registration_time }}</td>
                        </tr>
                           </tbody>
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
         <div id="deletemodal" class="modal fade" tabindex="-1" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                       <div class="modal-dialog">
                         <div class="modal-content">
                           <div class="
                              modal-header modal-colored-header
                              bg-danger
                              text-white
                            ">
                             <h4 class="modal-title" id="danger-header-modalLabel">
                              Warning!
                             </h4>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                           </div>
                           <div class="modal-body">
                             <h5 class="mt-0">Are you sure?</h5>
                             
                           </div>
                           <div class="modal-footer">
                             <form action="/admin/shop/product/delete" method="post">
                               @csrf
                             <input type="text" id="deleteid" name="deleteid"/>
                                  <input type="text" name="deleteimg1" id="deleteimg1">
                                  <input type="text" name="deleteimg2" id="deleteimg2">
                                  <input type="text" name="deleteimg3" id="deleteimg3">
                             <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                              No
                             </button>
                             <button type="submit" class="
                                btn btn-light-danger
                                text-danger
                                font-weight-medium
                              ">
                              Yes
                             </button>
                             </form>
                           </div>
                         </div>
                         <!-- /.modal-content -->
                       </div>
                       <!-- /.modal-dialog -->
                     </div>


           <!-- -------------------------------------------------------------- -->
           <!-- End PAge Content -->
           <!-- -------------------------------------------------------------- -->
         </div>
@endsection