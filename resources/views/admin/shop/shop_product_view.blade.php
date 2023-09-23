@extends('admin.layout.admin_mainlayout')

@section("title-section")
View Products
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
    <!-- <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script> -->

    <script>
      $("#zero_config").DataTable({
        "drawCallback": function( settings ) {
          feather.replace();
        }
      });
    </script>
    
    <!-- <script>
      $(document).ready(function(){
        $(".btn-delete").click(function(){
          var id = $(this).attr("data-id");
          var img1 = $(this).attr("data-img1");
          var img2 = $(this).attr("data-img2");
          var img3 = $(this).attr("data-img3");
          var manual = $(this).attr("data-manual");
          $("#deleteid").val(id);
          $("#deleteimg1").val(img1);
          $("#deleteimg2").val(img2);
          $("#deleteimg3").val(img3);
          $("#deletemanual").val(manual);
        })
      })
    </script> -->
@endsection


@section("admin-viewproducts-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">Manage Products </h3>
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
                 <div class="border-bottom title-part-padding">
                 <form action="/admin/shop/product" method="get"> 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">All Products </h4>
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit" name="addbtn">Add Products</button>
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
                           <th>Product Name </th>
                           <th>Category Name</th>
                           <th>Image</th>
                           <th>Status </th>
                           <th>Product sales price </th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($product_data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->product_name }} </td>
                           <td>{{ $row->cat_name }} </td>
                           <td><img height="60" width="80" src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}" />  </td>
                           <td>{{ $row->product_status }} </td>
                           <td><i style="font-size:14px" class="fa">&#xf156;</i> {{ $row->product_sales_price }}  </td>
                           <td>
                              <!-- view  -->
                              <a href="/admin/shop/alldetails/{{ $row->product_id }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a><br>
                              <!-- edit -->
                              <a href="/admin/shop/updateproduct/{{ $row->product_id }}" class="btn btn-info btn-xs btnEdit" title="edit"><i class="fa fa-edit"></i></a><br>
                              <!-- block active -->
                              @if( $row->product_status == "Active")
                                <a href="/admin/shop/product/changestatus/{{ $row->product_id }}" class="btn btn-danger btn-xs btnshow" title="Block"><i data-feather="x-circle" class="feather feather-x feather-sm"></i></a>
                              @else
                                <a href="/admin/shop/product/changestatus/{{ $row->product_id }}" class="btn btn-primary btn-xs btnbtn btnshow" title="Active"><i data-feather="user-check" class="feather feather-x feather-sm"></i></a>
                              @endif
                           </td>
                         </tr>
                         @endforeach
                       </tbody>
                       <tfoot align="center">
                         <tr>
                           <th># </th>
                           <th>Product Name </th>
                           <th>Category Name</th>
                           <th>Image</th>
                           <th>Status </th>
                           <th>Product sales price </th>
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
                             <form action="/admin/shop/product/delete" method="post">
                               @csrf
                             <input type="hidden" id="deleteid" name="deleteid"/>
                                  <input type="hidden" name="deleteimg1" id="deleteimg1">
                                  <input type="hidden" name="deleteimg2" id="deleteimg2">
                                  <input type="hidden" name="deleteimg3" id="deleteimg3">
                                  <input type="hidden" name="deletemanual" id="deletemanual">
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