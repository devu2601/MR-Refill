@extends('admin.layout.admin_mainlayout')

@section("title-section")
Products
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->
    
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap4-toggle.min.css" rel="stylesheet" />
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
    <script src="{{ URL::to('/') }}/dist/js/bootstrap4-toggle.min.js"></script>
    <!--This page JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ URL::to('/') }}/dist/js/pages/dashboards/dashboard1.js"></script>
	<script src="{{ URL::to('/') }}/assets/additional-methods.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>

	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		CKEDITOR.replace( 'txtspecs' );
	</script>
	<script>
			$("#form_product").validate({
				rules:
					{
						txtprintername:
						{
							required:true
						},
						txtcategory:
						{
							required:true
						},
						txtdescription:
						{
							required:true
						},
						txtimage1:
						{
							required:true,
							accept:"image/jpg,image/jpeg,image/png"
						},
						txtimage2:
						{
							required:true,
							accept:"image/jpg,image/jpeg,image/png"
						},
						txtimage3:
						{
							required:true,
							accept:"image/jpg,image/jpeg,image/png"
						},
						txtvideo:
						{
							required:true
						},
						txtrprice:
						{
							required:true
						},
						txtsprice:
						{
							required:true
						},
						txtbrand:
						{
							required:true
						},
						txtspecs:
						{
							required:true
						}
					},
				messages:
				    {
						txtprintername:
						{
							required:"please enter priter name"
						},
						txtcategory:
						{
							required:"Please select category"
						},
						txtdescription:
						{
							required:"Please wirte description of product"
						},
						txtimage1:
						{
							required:"Please select image",
							accept:"Only image is allowed"
						},
						txtimage2:
						{
							required:"Please select image",
							accept:"Only image is allowed"
						},
						txtimage3:
						{
							required:"Please select image",
							accept:"Only image is allowed"
						},
						txtvideo:
						{
							required:"Please enter video link"
						},
						txtrprice:
						{
							required:"Please enter retail price"
						},
						txtsprice:
						{
							required:"Please enter sales price"
						},
						txtbrand:
						{
							required:"Please select brand"
						},
						txtspecs:
						{
							required:"Please enter product specification"
						}
				    }
			});
	</script>
@endsection

@section("admin-shop-product")
<section class="content">
        <div class="card card-primary card-outline">
		<div class="card">
                 <div class="border-bottom title-part-padding">
                   <h4 class="mb-0"><b><b>Add Product</b></b></h4>
                 </div>
            @if(Session::get('status'))
				<div class="alert alert-success d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('status')}}
				</div>
				</div>
			@endif
				<div class="card-body form-group">
				<form id="form_product" action="/admin/shop/product/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                        <div class="form-group">
                                <label for="txtcategory"><b>Category</b></label>
                                <select class="form-control" name="txtcategory" id="txtcategory">
												<option value="">Please select category</option>
										@foreach($catdata as $row)
												<option value="{{$row->cat_id}}">{{$row->cat_name}}</option>
										@endforeach
                                </select>
                   		 </div><br>
							<div class="form-group">
                                <label for="txtbrand"><b>Brand</b></label>
                                <select class="form-control" name="txtbrand" id="txtbrand">
                                        <option value="">Please select brand</option>
										@foreach($brand_data as $row)
										<option value="{{ $row->brand_id }}">{{ $row->brand_name }}</option>
										@endforeach
                                </select>
                            </div><br>
                            <div class="form-group">
								<label for="txtprintername"><b>Product Name</b></label>
								<input type="text" class="form-control" id="txtprintername" placeholder="Enter the product name" name="txtprintername">
							</div> <br>     
                            <div class="form-group">
                                <label for="txtdescription"><b>Description</b></label>
                                <textarea class="form-control" name="txtdescription" id="txtdescription" rows="3"></textarea>
                             </div><br>
                            <div class="form-group">
								<label for="txtimage1"><b>Image-1</b></label>
								<input type="file" class="form-control" id="txtimage1" name="txtimage1">	
								<div id="imgContainer"></div>
							</div><br>
							<div class="form-group">
								<label for="txtimage2"><b>Image-2</b></label>
								<input type="file" class="form-control" id="txtimage2" name="txtimage2">	
								<div id="imgContainer"></div>
							</div><br>
                            <div class="form-group">
								<label for="txtimage3"><b>Image-3</b></label>
								<input type="file" class="form-control" id="txtimage3" name="txtimage3">
								<div id="imgContainer"></div>
							</div><br>
                            <div class="form-group">
								<label for="txtvideo"><b>Video URL</b></label>
								<input type="text" class="form-control" id="txtvideo" placeholder="Enter video url of product" name="txtvideo">
							</div><br>
                            <div class="form-group">
								<label for="txtrprice"><b>Retail Price</b></label>
								<input type="text" class="form-control" id="txtrprice" placeholder="Enter retail price" name="txtrprice">
							</div><br>

                            <div class="form-group">
								<label for="txtsprice"><b>Seller Price</b></label>
								<input type="text" class="form-control" id="txtsprice" placeholder="Enter sales price" name="txtsprice">
							</div><br>
                            
                            <div class="form-group">
								<label for="txtmanual"><b>Manual Pdf</b></label>
								<input type="file" class="form-control" id="txtmanual" name="txtmanual">
								
								<div id="imgContainer"></div>
							</div><br>
                            <div class="form-group">
                                <label for="txtspecs"><b>Specification</b></label>
                               	
								<textarea class="form-control" id="txtspecs" name="txtspecs"></textarea>

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
							<a href="/admin/shop/product/view" class="btn btn-primary">Back</a>
					
						</div>
					</form>
				</div>
		</div>
</section>
@endsection