@extends('admin.layout.admin_mainlayout')

@section("title-section")
View news
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
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
          var image= $(this).attr("data-img");
          var name= $(this).attr("data-name");
          $("#deleteid").val(id);
          $("#deleteimg").val(image);
          $("#deletename").val(name);
        })
      })
    </script>
@endsection


@section("admin-viewnews-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Manage Brand </h3>
             </div>
             <div class="
                col-md-7 col-12
                align-self-center
                d-none d-md-flex
                justify-content-end
              ">
               <ol class="breadcrumb mb-0 p-0 bg-transparent">
                 <li class="breadcrumb-item">
                   <a href="javascript:void(0)">Home </a>
                 </li>
                 <li class="breadcrumb-item active d-flex align-items-center">
                  Basic
                 </li>
               </ol>
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
                 <form action="/admin/utility/news" method="get"> 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">All news </h4>
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit" name="addbtn">Add news</button>
                      </div>
                      
                    </div>
                  </form>
                 </div>
                 <div class="card-body">
                  
                   <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead>
                         <tr>
                           <th># </th>
                           <th>Brnad Name </th>
                           <th>Image </th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody>

                         @foreach($brand_data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->brand_name }} </td>
                           <td><img height="100" width="150" src="{{ URL::to('/') }}/uploads/brand/{{ $row->brand_logo }}" />  </td>
                           <td>
                           <button type="button" data-bs-toggle="modal" data-bs-target="#deletemodal" data-id="{{ $row->brand_id }}" data-name="{{ $row->brand_name }}" data-img="{{ $row->brand_logo }}" class="btn waves-effect waves-light btn-danger btn-delete">
                      Delete
                     </button>
                     <a href="/admin/shop/updatebrand/{{ $row->brand_id }}"><button type="button" class="btn waves-effect waves-light btn-success">
                      Edit
                     </button></a>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot>
                         <tr>
                         <th># </th>
                           <th>Brand Name </th>
                           <th>Image </th>
                           <th>Actions </th>
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
                             <form action="/admin/shop/brand/delete" method="post">
                               @csrf
                             <input type="hidden" id="deleteid" name="deleteid"/>
                             <input type="hidden" id="deletename" name="deletename"/>
                                  <input type="hidden" name="deleteimg" id="deleteimg">
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