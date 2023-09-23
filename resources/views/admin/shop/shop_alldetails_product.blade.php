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
               <h3 class="text-themecolor mb-0">Product details </h3>
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
                  
                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="table-responsive">
                         <table class="table">
                           <tbody>
                             <tr>
                               <th width="390">Product name </th>
                               <td>{{ $singleproduct->product_name }} </td>
                             </tr>
                             <tr>
                               <th>Category name </th>
                               <td>{{ $singleproduct->cat_name }} </td>
                             </tr>
                             <tr>
                            <th>Brand Name</th>
                            <td>{{ $singleproduct->brand_name }} </td>
                        </tr>
                        <tr>
                           <th>Product Description </th>
                           <td>{{ $singleproduct->product_description }}  </td>
                        </tr>
                        <tr>
                           <th>Image1 </th>
                           <td><img height="100" width="150" src="{{ URL::to('/') }}/uploads/product/{{ $singleproduct->product_img1 }}" />  </td>
                        </tr>
                        <tr>   
                           <th>Image2 </th>
                           <td><img height="100" width="150" src="{{ URL::to('/') }}/uploads/product/{{ $singleproduct->product_img2 }}" />  </td>
                        </tr>
                        <tr>
                           <th>Image3 </th>
                           <td><img height="100" width="150" src="{{ URL::to('/') }}/uploads/product/{{ $singleproduct->product_img3 }}" />  </td>
                        </tr>
                        <tr>
                           <th>Product video url </th>
                           <td>{{ $singleproduct->product_video_url }}  </td>
                        </tr>
                        <tr>
                           <th>Product retail price </th>
                           <td>{{ $singleproduct->product_retail_price }}  </td>
                        </tr>
                        <tr>
                           <th>Product sales price </th>
                           <td>{{ $singleproduct->product_sales_price }}  </td>
                        </tr>
                        <tr>
                           <th>Product status </th>
                           <td>{{ $singleproduct->product_status }}  </td>
                        </tr>
                        <tr>
                           <th>Product manual </th>
                           <td>{{$singleproduct->product_manual}}</td>
                        </tr>
                        <tr>
                           <th>Product specification </th>
                           <td>{!! $singleproduct->product_specification !!}  </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                        
                              <a href="/admin/shop/product/view"><button type="button" class="btn btn-info">Back</button></a>
                            
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