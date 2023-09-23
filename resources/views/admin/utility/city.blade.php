@extends('admin.layout.admin_mainlayout')

@section("title-section")
Add City
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
    <script src="{{ URL::to('/') }}/assets/extra-libs/sparkline/sparklinSe.js"></script>
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
	<script src="{{ URL::to('/') }}/assets/additional-methods.min.js"></script>
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
	<script>
		$("#form_category").validate({
			rules:
			{
				txtcityname:
				{
					required:true
				},
				txtstatename:
				{
					required:true,
					
				}
			},
			messages:
			{
				txtcityname:
				{
					required:"Please enter city name"
				},
				txtstatename:
				{
					required:"Please select state name",
				}
			}
		})
	</script>
@endsection

@section("admin-utilities-city")
<section class="content">
            <div class="card card-primary card-outline">
			<div class="card-header">
      		<h5 class="m-0"><b>Add City </b></h5>
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
		
			<form id="form_category" action="/admin/utility/city/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
				<div class="card-body">
							<div class="form-group">
								<label for="txtcityname">City name</label>
								<input type="text" class="form-control" id="txtcityname" placeholder="Enter the city name" name="txtcityname" value="">
							</div>
							<br>
							<div class="form-group">
								<label for="txtcityname">Lattitude</label>
								<input type="text" class="form-control" id="txtlat" placeholder="Enter the city name" name="txtlat" value="">
							</div>
							<br>
							<div class="form-group">
								<label for="txtcityname">Longitude</label>
								<input type="text" class="form-control" id="txtlong" placeholder="Enter the city name" name="txtlong" value="">
							</div>
							<br>
							<div class="form-group">
                                <label for="txtstatename"><b>State name</b></label>
                                <select class="form-control" name="txtstatename" id="txtstatename">
								<option value="">Please select state name</option>		
								@foreach($state_data as $row)
									<option value="{{ $row->state_id }}">{{ $row->state_name }}</option>
								@endforeach
                                </select>
                   			 </div>
								
                   		 <br>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<a href="/admin/utility/city/view" class="btn btn-primary">Back</a>
						</div>
					</form>
		</div>
			</div>
</section>
@endsection