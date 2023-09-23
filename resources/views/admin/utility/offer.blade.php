@extends('admin.layout.admin_mainlayout')

@section("title-section")
Offers
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
    <!-- Custom CSS -->

	<link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/bootstrap4-toggle.min.css" rel="stylesheet" />
	<link href="{{ URL::to('/') }}/dist/css/bootstrap-datepicker.css" rel="stylesheet" />

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
    <script src="{{ URL::to('/') }}/dist/js/bootstrap-datepicker.js"></script>
	<script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
	<!-- <script sec="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script> -->
	<script>
		function afterdate(sdate)
			{
				$("#txtendtime").val("");
				$("#txtendtime").attr("min",sdate);
			}
			function minamt(amount)
			{
				$("#txtmaxamount").val("");
				$("#txtmaxamount").attr("min",amount);
				$("#txtdiscamount").attr("max",amount);
			}
			$("#form").validate({
				rules:
					{
						txtoffername:
						{
							required:true
						},
						txtoffertitle:
						{
							required:true
						},
						txtdescription:
						{
							required:true
						},
						txtminamount:
						{
							required:true
						},
						txtmaxamount:
						{
							required:true
						},
						txtdiscamount:
						{
							required:true
						},
						txtcode:
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
						},
						txtdescription:
						{
							required:true
						}
					},
				messages:
				    {
						txtoffername:
						{
							required:"please enter Offer Name"
						},
						txtoffertitle:
						{
							required:"Please enter Offer Title"
						},
						txtdescription:
						{
							required:"Please wirte Description of Offer"
						},
						txtminamount:
						{
							required:"Please enter Minimum Amount"
						},
						txtmaxamount:
						{
							required:"Please enter Maximum Amount"
						},
						txtdiscamount:
						{
							required:"Please enter Discount Amount"
						},
						txtcode:
						{
							required:"Please enter Coupen Code"
						},
						txtstarttime:
						{
							required:"Please enter offer's Start Time"
						},
						txtendtime:
						{
							required:"Please enter offer's End Time"
						},
						txtdescription:
						{
							required:"Please enter Offer Description"
						}
				    }
			});
			
			// start time
			
			//end time over
	</script>
@endsection

@section("admin-utilities-offer")
<section class="content">
        <div class="card card-primary card-outline">
		<div class="card">
                 <div class="border-bottom title-part-padding">
                   <h4 class="mb-0"><b><b>Add Offer</b></b></h4>
                 </div>
            @if(Session::get('status'))
				<div class="alert alert-danger d-flex align-items-center" role="alert">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
				<div>
				{{Session::get('status')}}
				</div>
				</div>
			@endif
				<div class="card-body form-group">
				<form id="form" action="/admin/utility/offer/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                            <div class="form-group">
								<label for="txtoffername"><b>Name</b></label>
								<input type="text" class="form-control" id="txtoffername" placeholder="Enter the offer name" name="txtoffername">
							</div>    
							<br>  
							<div class="form-group">
								<label for="txtoffertitle"><b>Title</b></label>
								<input type="text" class="form-control" id="txtoffertitle" placeholder="Enter the offer title" name="txtoffertitle">
							</div>    
							<br>  
                            <div class="form-group">
                                <label for="txtdescription"><b>Description</b></label>
                                <textarea class="form-control" name="txtdescription" id="txtdescription" rows="3"></textarea>
                             </div>
							 <br>
                            <div class="form-group">
								<label for="txtminamount"><b>Minimum Amount</b></label>
								<input type="text" onchange="minamt(this.value);" class="form-control" id="txtminamount" placeholder="Enter minimum amout price" name="txtminamount">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtmaxamount"><b>Maximum Amount</b></label>
								<input type="text" class="form-control" id="txtmaxamount" placeholder="Enter maximum amount price" name="txtmaxamount">
							</div>
							<br>
							<div class="form-group">
								<label for="txtdiscamount"><b>Discount Amount</b></label>
								<input type="text" class="form-control" id="txtdiscamount" placeholder="Enter maximum amount price" name="txtdiscamount">
							</div>
							<br>
							<div class="form-group">
								<label for="txtcode"><b>Coupen Code</b></label>
								<input type="text" class="form-control" id="txtcode" placeholder="Enter the coupen code" name="txtcode">
							</div>   
							<br>
							<div class="form-group">
								<label for="txtstarttime"><b>Start Time</b></label>
								<input onchange="afterdate(this.value);" type="date" class="form-control" id="txtstarttime" placeholder="Enter offer's start time" name="txtstarttime">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtendtime"><b>End Time</b></label>
								<input  type="date" class="form-control" id="txtendtime" placeholder="Enter offer's end time" name="txtendtime">
							</div>
							<!-- <div class="form-group">
								<label class="input-group-btn" for="txtDate"><b>Start Date </b> 
					            </label>
								<input id="txtstartDate" onchange="afterdate(this.value);" type="text" class="form-control date-input" />
					            
							</div>
							<br>
                            <div class="form-group">
                            	<label class="input-group-btn" for="txtDate"><b>End Date </b> 
					            </label>
								<input id="txtendtime" type="text" class="form-control date-input"  />
					            
							</div> -->
							<br>
                            <div class="form-group">
								<label for="onetimeuse"><b>One Time Use</b></label><br>
								<input type="checkbox" value="yes" id="onetimeuse" name="onetimeuse">

								<div id="imgContainer"></div>
							</div>
							 <br>
							 <div class="form-group">
                            <label for="offerstatus"><b>Status</b></label><br>
                               <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" value="active" name="offerstatus" autocomplete="on">
                         </div>
								<br>
						<!-- /.card-body -->
						<div class="card-footer">
					
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<a href="/admin/utility/offer/view" class="btn btn-primary">Back</a>
						
						</div>
					</form>
				</div>
		</div>
</section>
@endsection