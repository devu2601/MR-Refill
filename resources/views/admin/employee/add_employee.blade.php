@extends('admin.layout.admin_mainlayout')

@section("title-section")
Insert employee
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/bootstrap4-toggle.min.css" rel="stylesheet" />
	<style>
		.toggle btn btn-primary{
			width: 95.9318px; 
			height: 36.5px;
		}
		</style>
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
	<script>
			$("#form_employee").validate({
				rules:
					{
						txtempname:
						{
							required:true
						},
						txtcontact:
						{
							required:true
						},
						txtemail:
						{
							required:true
						},
						txtimage:
						{
							required:true,
							accept:"image/jpg,image/jpeg,image/png"
						},
						txtpassword:
						{
							required:true
						}
					},
				messages:
				    {
						txtempname:
						{
							required:"please enter employee name"
						},
						txtcontact:
						{
							required:"Please enter contact no."
						},
						txtemail:
						{
							required:"Please enter email id"
						},
						txtimage:
						{
							required:"Please select image",
							accept:"Only image is allowed"
						},
						txtpassword:
						{
							required:"Please enter password"
						}
				    }
			});
	</script>
@endsection

@section("admin-employee-addemp")
<section class="content">
        <div class="card card-primary card-outline">
		<div class="card">
                 <div class="border-bottom title-part-padding">
                   <h4 class="mb-0"><b><b>Add Employee</b></b></h4>
                 </div>
            @if(Session::get('status'))
				<div class="alert alert-success d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('status')}}
				</div>
				</div>
			@endif
				<div class="card-body">
				<form id="form_employee" action="/admin/employee/insertemp" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                            <div class="form-group">
								<label for="txtempname"><b>Name</b></label>
								<input type="text" class="form-control" id="txtempname" placeholder="Enter the employee name" name="txtempname">
							</div><br>
                            <div class="form-group">
								<label for="txtcontact"><b>Contact No.</b></label>
								<input type="text" class="form-control" id="txtcontact" placeholder="Enter employee contact No." name="txtcontact">
							</div><br>
                            <div class="form-group">
								<label for="txtemail"><b>Email</b></label>
								<input type="text" class="form-control" id="txtemail" placeholder="Enter employee email id" name="txtemail">
							</div><br>
                            <div class="form-group">
								<label for="txtpassword"><b>Password</b></label>
								<input type="password" class="form-control" id="txtpassword" placeholder="Enter password" name="txtpassword">
							</div><br>
                            <div class="form-group">
								<label for="txtimage"><b>Profile picture</b></label>
								<input type="file" class="form-control" id="txtimage" name="txtimage">	
								<div id="imgContainer"></div>
							</div>
							 <br>
							  
								<div class="form-group " >
                            <label for="txtrprice"><b>Status</b></label><br>
                               <input class="toggle btn btn-primary" type="checkbox" checked data-toggle="toggle" data-onstyle="primary" value="active" name="active" autocomplete="on">
                         </div>
						 <br>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<!-- <a href="/sendemail"><button type="button" class="btn btn-info">Send email to emloyee</button></a> -->
							<a href="/admin/employee/all_employee" class="btn btn-primary">Back</a>
						</div>
					</form>
				</div>
		</div>
</section>
@endsection