@extends('admin.layout.admin_mainlayout')

@section("title-section")
Brands
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
	<script src="{{ URL::to('/') }}/assets/additional-methods.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
	<script>
		$("#form_brand").validate({
			rules:
			{
				txtbrandname:
				{
					required:true
				},
				txtbrandimage:
				{
					required:true,
					accept:"image/jpeg,image/jpg,image/png,image/gif"
				}
			},
			messages:
			{
				txtbrandname:
				{
					required:"Please enter brand name"
				},
				txtbrandimage:
				{
					required:"Please upload image",
					accept:"Only image id allowed"
				}
			}
		});
	</script>
@endsection

@section("admin-shop-brand")
<section class="content">
        <div class="card card-primary card-outline">
		<div class="card">
                 <div class="border-bottom title-part-padding">
                   <h4 class="mb-0"><b><b>Add Brand</b></b></h4>
                 </div>
		<div class="card-body">
				@if(Session::get('status'))
                  <div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
                  <div>
                  {{Session::get('status')}}
                  </div>
                  </div>
                  @endif
                  @if(Session::get('message'))
                  <div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
                  <div>
                  {{Session::get('message')}}
                  </div>
                  </div>
                  @endif
				<form id="form_brand" action="/admin/shop/brand/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf						
						<div class="card-body">

                            <div class="form-group">
								<label for="txtbrandname"><b>Name</b></label>
								<input type="text" class="form-control textbox" id="txtbrandname" placeholder="Enter the brand name" name="txtbrandname" value="">
							</div><br>
                            <div class="form-group">
								<label for="txtbrandimage"><b>Brand logo</b></label>
								<input type="file" class="form-control textbox" value="" id="txtbrandimage" name="txtbrandimage">
								<div id="imgContainer"></div>
							</div>
							<br>
							<div class="form-group">
                            <label for="txtrprice"><b>Status</b></label><br>
                               <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" value="active" name="active" autocomplete="on">
                         </div>
							<br>
						<!-- /.card-body -->
						<div class="card-footer">
							
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<a href="/admin/shop/brand/view" class="btn btn-primary">Back</a>
							
						</div>
					</form>
	        </div>
        </div>
</section>
@endsection