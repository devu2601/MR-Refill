@extends('admin.layout.admin_mainlayout')

@section("title-section")
Update City
@endsection

@section("admin-css-section")
<link rel="stylesheet" href="{{ URL::to('/') }}/assets/libs/apexcharts/dist/apexcharts.css" />
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
    <script src="{{ URL::to('/') }}/assets/jquery.validate.js"></script>

    <script>
        $("#form-update_city").validate({
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

@section("admin-utility-updatecity")
<section class="content">
        <div class="card card-primary card-outline">
            <div class="card-header">
            <h3 class="m-0"><b><b>Update City</b> </b></h3>
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
                <form action="/admin/utility/savecity" method="post" id="form-update_city" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
                @csrf                       
                        <div class="card-body">

                        <input value="{{ $singlecity[0]->city_id }}" type="hidden" name="txtcityid" />
                        

                            <div class="form-group">
                                <label><b>City name</b></label>
                                <input value="{{ $singlecity[0]->city_name }}" type="text" class="form-control" id="name" placeholder="Enter the city name" name="txtcityname">
                            </div>
                            <br>
                            <!-- <div class="form-group">
                                <label><b>State name</b></label>
                                <input value="{{ $singlecity[0]->state_name }}" type="text" class="form-control" id="name" placeholder="Enter the state name" name="txtstatename">
                            </div> -->
                            <div class="form-group">
                                <label for="txtstatename"><b>State name</b></label>
                                <select class="form-control" name="txtstatename" id="txtstatename">
								<option value="">Please select state name</option>		
								@foreach($state_data as $row)
									<option @if($singlecity[0]->state_id == $row->state_id) selected @endif value="{{ $row->state_id }}">{{ $row->state_name }}</option>
								@endforeach
                                </select>
                   			 </div>
                            <br>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success " id="button">Update</button>
                            <a href="/admin/utility/city/view" class="btn btn-primary">Back</a>
                        </div>
                    </form>
            </div>
        </div>
</section>
@endsection