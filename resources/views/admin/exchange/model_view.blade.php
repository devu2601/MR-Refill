@extends('admin.layout.admin_mainlayout')

@section("title-section")
View Models
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
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
          var img = $(this).attr("data-img");
          $("#deleteid").val(id);
          $("#deleteimg").val(img);
        })
      })
    </script>
@endsection


@section("admin-viewmodels-section")
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
                 <form action="/admin/exchange/model" method="get"> 
                    <div class="row">
                      <div class="col-10"> 
                        <h4 class="card-title mb-0">All Models </h4>
                      </div>
                      <div class="col-2">
                        <button class="btn btn-success" type="submit" name="addbtn">Add Models</button>
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
                           <th>Model name </th>
                           <th>Price </th>
                           <th>Image </th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($model_data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->model_name }} </td>
                           <td><img height="100" width="100" src="{{ URL::to('/') }}/uploads/models/{{ $row->model_img_url }}"></img> </td>
                           <td>{{ $row->model_status }} </td>
                           <td>
                              @if( $row->model_status =="Active")
                                <a href="/admin/exchange/model/changestatus/{{ $row->model_id }}" class="btn btn-danger btn-xs btnshow" title="Block"><i data-feather="x-circle" class="feather feather-x feather-sm"></i></a>
                              @else
                                <a href="/admin/exchange/model/changestatus/{{ $row->model_id }}" class="btn btn-primary btn-xs btnbtn btnshow" title="Active"><i data-feather="user-check" class="feather feather-x feather-sm"></i></a>
                              @endif   
                                <a href="/admin/exchange/updatemodel/{{ $row->model_id }}"><button type="button" class="btn waves-effect waves-light btn-info">
                                <i class="fa fa-edit"></i>
                                </button></a>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                           <th># </th>
                           <th>Model name </th>
                           <th>Price </th>
                           <th>Image </th>
                           <th>Actions </th>
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
                             <h5 class="mt-0">Are you sure want to delete ?</h5>
                             
                           </div>
                           <div class="modal-footer">
                             <form action="/admin/exchange/model/delete" method="post">
                               @csrf
                             <input type="hidden" id="deleteid" name="deleteid"/>
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