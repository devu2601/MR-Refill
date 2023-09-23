@extends('admin.layout.admin_mainlayout')

@section("title-section")
View Inquiry
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
    <!-- <script>
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
    </script> -->
@endsection


@section("admin-viewproducts-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Inquiry details </h3>
             </div>
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <!-- basic table -->
           <div class="row">
             <div class="col-12">
               <div class="card">
                 <!-- <div class="border-bottom title-part-padding">
                 </div> -->
                 <div class="card-body">
                  
                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="table-responsive">
                         <table class="table">
                           <tbody>
                             <tr>
                               <th width="390">User name </th>
                               <td>{{ $data->user_name }} </td>
                             </tr>
                             <tr>
                               <th>Contact Number </th>
                               <td>{{ $data->inquriy_contact }} </td>
                             </tr>
                             <tr>
                            <th>Email ID</th>
                            <td>{{ $data->inquriy_email }} </td>
                        </tr>
                        <tr>
                           <th>Subject</th>
                           <td>{{ $data->inquriy_subject }}  </td>
                        </tr>
                        <tr>
                           <th>Description</th>
                           <td>{{ $data->inquriy_descriotion }}</td>
                        </tr>
                        <tr>
                           <th>Date & Time </th>
                           <td>{{ $data->inquriy_date_time }}  </td>
                        </tr>
                        <tr>
                           <th>Status </th>
                           <td>{{ $data->inquriy_status }}  </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        
                              <a href="/admin/utility/inquiry/view"><button type="button" class="btn btn-info">Back</button></a>
                              @if($data->inquriy_status == "in process")
                              <a href="/admin/utility/inquiry/statuschange/{{ $data->inquiry_id }}"><button type="button" class="btn btn-success">Complete</button></a>
                              @endif
                            </td>
                        </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>

                 </div>
               </div>
             </div>
           </div>
        
      
           <!-- -------------------------------------------------------------- -->
           <!-- End PAge Content -->
           <!-- -------------------------------------------------------------- -->
        
@endsection