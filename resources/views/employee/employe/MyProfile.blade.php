@extends('employee.layout.employe__mainlayout')

@section("title-section")
My Profile
@endsection

@section("employe-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" /> 
    <link  href="{{ URL::to('/') }}/dist/css/select2.min.css">
@endsection

@section("employe-jq-section")
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
    <script src="{{ URL::to('/') }}/dist/js/bootstrap4-toggle.min.js"></script>

     
   
@endsection


@section("employe-myprofile-section")
<section class="content">
        <div class="card card-primary card-outline">
      <div class="card">
                 <div class="border-bottom title-part-padding">
                   <h4 class="card-title mb-0"><b>My Profile</b></h4>
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
        <form id="form_product" action="/employe/save/myprofile" method="post" enctype="multipart/form-data" id="addEditcategory" novalidate="novalidate">
        @csrf
                    <input type="hidden" name="txtemployeid" value="{{ $data->employee_id }}">
                    <input type="hidden" name="txtimage1" id="txtimage1" value="{{ $data->employee_profile }}">
                         <div class="form-group">
                            <label for="txtrprice"><b>Name</b></label>
                            <input type="text" class="form-control" id="txtrprice" value="{{ $data->employee_name }}" placeholder="Enter the name" name="txtname">
                         </div>
                         <br>
                          <div class="form-group">
                            <label for="txtrprice"><b>Contact No</b></label>
                            <input type="text" class="form-control number_only" id="txtrprice" value="{{ $data->employee_contact }}" placeholder="Phone Number" name="txtcontactno">
                         </div>
                         <br>
                         <div class="form-group">
                            <label for="txtrprice"><b>Email</b></label>
                            <input type="text" class="form-control" id="txtrprice" value="{{ $data->employee_email }}" placeholder="Enter the email" name="txtemail">
                         </div>
                         <br>
                         <!-- <div class="form-group">
                            <label for="txtrprice"><b>Password</b></label>
                            <input type="text" class="form-control" id="txtrprice" value="{{ $data->employee_password }}" placeholder="Enter the password" name="txtpassword">
                         </div>
                         <br> -->
                         
                          <div class="form-group">
                            <label for="txtimage"><b>Profile</b></label>
                           <input type="file" class="form-control" id="txtimage" value="{{ $data->employee_profile }}" name="txtimage"> 
                           <br> 
                           <img height="100" width="100" src="{{ URl::to('/') }}/uploads/employee/{{ $data->employee_profile }}">
                           <div id="imgContainer"></div>
                         </div>
                         <br>
                         
                           <br>
                           
            <!-- /.card-body -->
            <div class="">
              <center><button type="submit" class="btn btn-primary">Submit</button></center>
            </div>
          </form>
        </div>
    </div>
</section>
@endsection