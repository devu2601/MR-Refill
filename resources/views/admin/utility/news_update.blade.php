@extends('admin.layout.admin_mainlayout')

@section("title-section")
News Update
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
	</script>
	
	

@endsection

@section("admin-utilities-news-update")
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
					<h4 class="card-title mb-0">Update News </h4>
					</div>
				</div>
			</div>
				<div class="card-body">
				
				<form id="form" action="/admin/utility/news/savedata" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                            
                            <input type="hidden" value="{{ $data->news_id }}" name="id" id="id">
                            <input type="hidden" value="{{ $data->news_img1 }}" name="image1" id="image1">
                            <input type="hidden" value="{{ $data->news_img2 }}" name="image2" id="image2">
                            <div class="form-group">
								<label for="txttitle"><b>Title</b></label>
								<input type="text" class="form-control" id="txttitle" placeholder="Enter title of news" name="txttitle" value="{{ $data->news_title }}">
							</div> 
							<br>     
                            <div class="form-group">
                                <label for="txtdescription"><b>Description</b></label>
                                <textarea class="form-control" name="txtdescription" id="txtdescription" rows="3">{{ $data->news_description }}</textarea>
                            </div>
							<br>
                            <div class="form-group">
								<label for="txtimage1"><b>Image-1</b></label>
								<input type="file" class="form-control" id="txtimage1" name="txtimage1">	
								<div id="imgContainer"></div>
                                <img src="{{ URL::to('/') }}/uploads/news_image/{{ $data->news_img1 }}" height="100px" width="150px" alt="">
							</div>
							<br>
							<div class="form-group">
								<label for="txtimage2"><b>Image-2</b></label>
								<input type="file" class="form-control" id="txtimage2" name="txtimage2">	
								<div id="imgContainer"></div>
                                <img src="{{ URL::to('/') }}/uploads/news_image/{{ $data->news_img2 }}" height="100px" width="150px" alt="">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtdatetime"><b>Date and time</b></label>
								<input type="datetime-local" onchange="afterdate(this.value);" class="form-control" id="txtdatetime" placeholder="Enter news arrives date and time" name="txtdatetime" value="{{ date('Y-m-d\TH:i', strtotime($data->news_date_time)) }}">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtstarttime"><b>Display start from</b></label>
								<input type="datetime-local"  onchange="afterdate2(this.value);" class="form-control" id="txtstarttime" placeholder="Enter display start date and time" name="txtstarttime" value="{{ date('Y-m-d\TH:i', strtotime($data->start_time)) }}">
							</div>
							<br>
                            <div class="form-group">
								<label for="txtendtime"><b>Display stop from</b></label>
								<input type="datetime-local" class="form-control" id="txtendtime" placeholder="Enter display stop dateand time" name="txtendtime" value="{{ date('Y-m-d\TH:i', strtotime($data->end_time)) }}">
							</div>
							 <div class="toggle-group">
		                          &nbsp; &nbsp;
		                            <!-- <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 99.7344px; height: 38px;"><input type="checkbox" name="is_active" data-toggle="toggle" data-on="Active" data-off="In Active" data-onstyle="success"><div class="toggle-group"><label class="btn btn-success toggle-on">Active</label><label class="btn btn-default active toggle-off">In Active</label><span class="toggle-handle btn btn-default"></span></div></div> -->
									<div class="form-group" data-toggle="buttons">
 									 <label class="">
    									<input type="checkbox" @if($data->news_display == "Yes")checked  @endif  name="active" value="yes" id="option1" autocomplete="off"> Display
 									 </label>
  									</div>
		                        </div>
								
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-success " id="button">Update</button>
							<a href="/admin/utility/news/view" class="btn btn-primary">Back</a>
						</div>
					</form>
				</div>
		</div>
</section>
@endsection