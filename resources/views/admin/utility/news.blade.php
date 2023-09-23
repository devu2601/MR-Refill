@extends('admin.layout.admin_mainlayout')

@section("title-section")
News
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/bootstrap4-toggle.min.css" rel="stylesheet" />

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
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
	<script src="{{ URL::to('/') }}/dist/js/bootstrap4-toggle.min.js"></script>

    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
	<script>
			function afterdate(sdate)
			{
				$("#txtstarttime").val("");
				$("#txtstarttime").attr("min",sdate);
				
			}
			function afterdate2(sdate)
			{
				$("#txtendtime").val("");
				$("#txtendtime").attr("min",sdate);
			}
			$("#form").validate({
				rules:
					{
						txttitle:
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
						txtdatetime:
						{
							required:true
						},
						txtstarttime:
						{
							required:true
						},
						
						txtendtime:
						{
							required:true
						}
					},
				messages:
				    {
						txttitle:
						{
							required:"please enter news title"
						},
						txtdescription:
						{
							required:"Please wirte description of news"
						},
						txtimage1:
						{
							required:"Please select image",
							accept:"Only image is allowed"
						},
						txtdatetime:
						{
							required:"Please enter news date and time"
						},
						txtstarttime:
						{
							required:"Please enter news display start time"
						},
						txtendtime:
						{
							required:"Please enter news display end time"
						}
				    }
			});
			
	</script>

@endsection

@section("admin-utilities-news")
<section class="content">
        <div class="card card-primary card-outline">
			
            @if(Session::get('status'))
				<div class="alert alert-success d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('status')}}
				</div>
				</div>
			@endif
			<div class="card">
				<div class="border-bottom title-part-padding">
				<div class="row">
					<div class="col-10"> 
					<h4 class="card-title mb-0">Insert News </h4>
					</div>
				</div>
			</div>
				<div class="card-body">
				
				<form id="form" action="/admin/utility/news/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                            <div class="form-group">
								<label for="txttitle"><b>Title</b></label>
								<input type="text" class="form-control" id="txttitle" placeholder="Enter title of news" name="txttitle">
							</div> 
							<br>     
                            <div class="form-group">
                                <label for="txtdescription"><b>Description</b></label>
                                <textarea class="form-control" name="txtdescription" id="txtdescription" rows="3"></textarea>
                            </div>
							<br>
                            <div class="form-group">
								<label for="txtimage1"><b>Image-1</b></label>
								<input type="file" class="form-control" id="txtimage1" name="txtimage1">	
								<div id="imgContainer"></div>
							</div>
							<br>
							<div class="form-group">
								<label for="txtimage2"><b>Image-2</b></label>
								<input type="file" class="form-control" id="txtimage2" name="txtimage2">	
								<div id="imgContainer"></div>
							</div>
							<br>
                            <div class="form-group">
								<label for="txtdatetime"><b>Date and time</b></label>
								<input type="date" onchange="afterdate(this.value);" class="form-control" id="txtdatetime" placeholder="Enter news arrives date and time" name="txtdatetime">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtstarttime"><b>Display start from</b></label>
								<input type="date" onchange="afterdate2(this.value);" class="form-control" id="txtstarttime" placeholder="Enter display start date and time" name="txtstarttime">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtendtime"><b>Display stop from</b></label>
								<input type="date" class="form-control" id="txtendtime" placeholder="Enter display stop dateand time" name="txtendtime">
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
							<a href="/admin/utility/news/view" class="btn btn-primary">Back</a>
						</div>
					</form>
				</div>
		</div>
</section>
@endsection