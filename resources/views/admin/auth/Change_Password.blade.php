@extends('admin.layout.admin_mainlayout')

@section("title-section")
Change Password
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

@endsection

@section('admin-changepassword-section')
<div class="
          auth-wrapper
          d-flex  
          no-block
          justify-content-center
          align-items-center
          
        ">
         <div class="auth-box p-4 bg-white rounded"> 
           <div>
             <div class="logo text-center">    
              
               <h5 class="font-weight-medium mb-3 mt-1">Change Password </h5>
             </div>
             <!-- Form -->
             <div class="row">
               <div class="col-12">
               @if(Session::get('message'))
                  <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
                  <div>
                  {{Session::get('message')}}
                  </div>
                  </div>
                  @endif
                  @if(Session::get('success'))
                  <div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
                  <div>
                  {{Session::get('success')}}
                  </div>
                  </div>
                  @endif
                 <form class="form-horizontal mt-3" action="/admin/checkpassword" method="post" id="form">
                    @csrf
                   <div class="mb-3 row">
                     <div class="col-12">
                        <label for="txtoldpassword">Old Password</label>
                       <input class="form-control" type="text" placeholder="Enter current password" name="txtoldpassword" id="txtoldpassword" />
                         
                     </div>
                   </div>
                   <div class="mb-3 row">
                     <div class="col-12">
                        <label for="txtnewpassword">New Password</label>
                       <input class="form-control" type="text" placeholder="Enter the new password" name="txtnewpassword" id="txtnewpassword" />
                         
                     </div>
                   </div>
                   <div class="mb-3 row">
                     <div class="col-12">
                        <label for="txtconfirmpassword">Confirm Password</label>
                       <input class="form-control" type="text" placeholder="Enter same password" name="txtconfirmpassword" id="txtconfirmpassword" />
                     </div>
                   </div>
                   <div class="text-center">
                     <div class="col-xs-12">
                       <button class="btn d-block w-100 btn-info" type="submit">
                        Change Password
                       </button>
                     </div>
                   </div>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
@endsection