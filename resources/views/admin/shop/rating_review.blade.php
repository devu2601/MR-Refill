@extends('admin.layout.admin_mainlayout')

@section("title-section")
Rating & Reviews
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
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
    <!--This page JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Chart JS -->
    <script src="{{ URL::to('/') }}/dist/js/pages/dashboards/dashboard1.js"></script>
	<script src="{{ URL::to('/') }}/assets/additional-methods.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
	<script>
		
	</script>
@endsection

@section("admin-shop-rating")
<section class="content">
    
        <div class="card card-primary card-outline">
			<div class="card-header">
      		<h3 class="m-0"><b><b>Rating & Review</b> </b></h3>
    		</div>
				<div class="card-body">
				<form action="/admin/shop/rating/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Product</b></label>
                                <select class="form-control" name="txtproduct" id="exampleFormControlSelect1">
                                            <option value="">Please select product</option>
											@foreach($rating_data as $row)
											<option value="{{ $row->cat_id }}">{{ $row->vcat_name }}</option>
                                </select>
                   		 </div>
                            <div class="form-group">
								<label><b>Rating</b></label>
								<input type="text" class="form-control" id="name" name="txtrating">
							</div>      
                            <div class="form-group">
								<label><b>Rating text</b></label>
								<input type="text" class="form-control" id="name" placeholder="Enter your review" name="txtreview">
							</div>  
							
                            <div class="form-group">
								<label><b>Image</b> </label>
								<input type="file" class="form-control" id="image" name="image1">
								<br>
								<div id="imgContainer"></div>
							</div>
							<div class="form-group">
							<label for="birthdaytime">Rate-Date-Time</label>
 								 <input type="datetime-local" id="birthdaytime"   name="rating_date" class="form-control">
							</div>
							<br>
							<div class="toggle-group">
		                          <label><b>Status</b></label> &nbsp; &nbsp; &nbsp; &nbsp;
		                            <!-- <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 99.7344px; height: 38px;"><input type="checkbox" name="is_active" data-toggle="toggle" data-on="Active" data-off="In Active" data-onstyle="success"><div class="toggle-group"><label class="btn btn-success toggle-on">Active</label><label class="btn btn-default active toggle-off">In Active</label><span class="toggle-handle btn btn-default"></span></div></div> -->
									<div>
 									 <label>
    									<input type="checkbox" name="options" id="option1" autocomplete="off"> Active
 									 </label>
  									</div>
		                        </div>
								<br>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<a href="/admin/shop/ratingANDreviews/view" class="btn btn-primary">Back</a>
						</div>
					</form>
				</div>
		</div>
</section>
@endsection