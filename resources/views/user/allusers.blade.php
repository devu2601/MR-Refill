@extends('admin.layout.admin_mainlayout')

@section("title-section")
All users
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
    <script>
      $(document).ready(function(){
        $(".btn-delete").click(function(){
          var id = $(this).attr("data-id");
          var img = $(this).attr("data-image");
          $("#deleteid").val(id);
          $("#deleteimage").val(img);
        })
      })
    </script>
@endsection


@section("admin-users-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">All User </h3>
             </div>
             
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
                 <div class="card-body">
                   <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead align="center">
                         <tr>
                           <th># </th>
                           <th>Profile </th>
                           <th>User Name </th>
                           <th>Contact no</th>
                           <th>Status</th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td><img height="70" width="100" src="{{ URL::to('/') }}/uploads/users/{{ $row->user_profile }}"/>  </td>
                           <td>{{ $row->user_name }} </td>
                           <td>{{ $row->user_contact }} </td>
                           <td>{{ $row->user_status }} </td>
                           <td>
                              @if( $row->user_status =="Active")
                                <a href="/admin/user/changestatus/{{ $row->user_id }}" class="btn btn-danger btn-xs btnshow" title="Block"><i data-feather="x-circle" class="feather feather-x feather-sm"></i></a>
                              @else
                                <a href="/admin/user/changestatus/{{ $row->user_id }}" class="btn btn-primary btn-xs btnbtn btnshow" title="Active"><i data-feather="user-check" class="feather feather-x feather-sm"></i></a>
                              @endif
                              <a href="/admin/user/alldetails/{{ $row->user_id }}" class="btn btn-success btn-xs btnshow" title="view"><i class="fa fa-eye"></i></a>
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                         <th># </th>
                           <th>Profile </th>
                           <th>User Name </th>
                           <th>Contact no</th>
                           <th>Status</th>
                           <th>Actions </th>
                          </tr>
                       </tfoot>
                     </table>
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
                             <form action="/user/delete" method="post">
                               @csrf
                                  <input type="hidden" id="deleteid" name="deleteid"/>
                                  <input type="hidden" name="deleteimage" id="deleteimage">
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