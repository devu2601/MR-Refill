@extends('admin.layout.admin_mainlayout')

@section("title-section")
FAQ
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
    <script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script>
			$("#form").validate({
				rules:
					{
						txtquestion:
						{
							required:true
						},
						
						txtanswer:
						{
							required:true
						}
					},
				messages:
				    {
              txtquestion:
              {
                required:"please enter Question"
              },
              txtanswer:
              {
                required:"Please wirte answer"
              }
            }
			});
	</script>
@endsection

@section("admin-utilities-faq")
<section class="content">
        <div class="card card-primary card-outline">
			<div class="card-header">
      		<h3 class="m-0"><b><b>Insert FAQ</b> </b></h3>
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
				<form id="form" action="/admin/utility/faq/insert" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
				@csrf
                            <div class="form-group">
                                <label for="txtquestion"><b>Question</b></label>
                                <input type="text" class="form-control" id="txtquestion" placeholder="Enter Question" name="txtquestion">
                            </div> 
                            <br>     
                            <div class="form-group">
                                <label for="txtanswer"><b>Description</b></label>
                                <textarea class="form-control" name="txtanswer" id="txtanswer" rows="3"></textarea>
                            </div>
							              <br>
                            <!-- <div class="form-group">
                              <label for="txtimage1"><b>Image-1</b></label>
                              <input type="file" class="form-control" id="txtimage1" name="txtimage1">	
                              <div id="imgContainer"></div>
                            </div>
                            <br> -->
							
                        <div class="toggle-group">
                                        &nbsp; &nbsp;
		                            <!-- <div class="toggle btn btn-default off" data-toggle="toggle" style="width: 99.7344px; height: 38px;"><input type="checkbox" name="is_active" data-toggle="toggle" data-on="Active" data-off="In Active" data-onstyle="success"><div class="toggle-group"><label class="btn btn-success toggle-on">Active</label><label class="btn btn-default active toggle-off">In Active</label><span class="toggle-handle btn btn-default"></span></div></div> -->
                          <div class="form-group" data-toggle="buttons">
                          <label class="">
                              <input type="checkbox" name="active" value="Active" id="option1" autocomplete="off"> Display
                          </label>
                            </div>
                        </div>
								      <br>
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" class="btn btn-success " id="button">Add</button>
							<a href="/admin/utility/faq/view" class="btn btn-primary">Back</a>
						</div>
					</form>
				</div>
		</div>
</section>
@endsection