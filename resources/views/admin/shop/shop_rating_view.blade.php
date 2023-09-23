@extends('admin.layout.admin_mainlayout')

@section("title-section")
View ratings
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


@section("admin-viewrating-section")
<div class="row">
             <div class="col-12">
               <div class="card">
                 <div class="border-bottom title-part-padding">
                   <h3 class="card-title mb-0"><b>Product Ratings</b> </h3>
                 </div>
                 <div class="card-body">
                   
                 <div class="table-responsive">
                     <table id="zero_config" class="table table-striped table-bordered">
                       <thead align="center">
                         <tr>
                           <th># </th>
                           <th>Product Name </th>
                           <th>Rating </th>
                           <th>Review </th>
                           <th>Review Display </th>
                           <th>Actions </th>
                         </tr>
                       </thead>
                       <tbody align="center">

                         @foreach($rating_data as $row)
                         <tr>
                           <td>{{ $loop->index + 1 }} </td>
                           <td>{{ $row->product_name }} </td>
                           <td>{{ $row->rating }}</td>
                           <td>{{ $row->review_text }}</td>
                           <td>{{ $row->rating_display }}</td>
                           <td>
                              @if( $row->rating_display == "yes")
                                <a href="/admin/shop/productRating/changestatus/{{ $row->rating_id }}" class="btn btn-danger btn-xs btnshow" title="Block"><i data-feather="x-circle" class="feather feather-x feather-sm"></i></a>
                              @else
                                <a href="/admin/shop/productRating/changestatus/{{ $row->rating_id }}" class="btn btn-primary btn-xs btnbtn btnshow" title="Active"><i data-feather="user-check" class="feather feather-x feather-sm"></i></a>
                              @endif
                              
                           </td>
                         </tr>
                         @endforeach
                        
                       </tbody>
                       <tfoot align="center">
                         <tr>
                         <th># </th>
                           <th>Product Name </th>
                           <th>Rating </th>
                           <th>Review </th>
                           <th>Review Display </th>
                           <th>Actions </th>
                         </tr>
                       </tfoot>
                     </table>
                   </div>
                 </div>
               </div>
             </div>
           </div>
@endsection