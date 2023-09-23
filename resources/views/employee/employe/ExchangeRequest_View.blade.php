@extends('employee.layout.employe__mainlayout')

@section("title-section")
View Request
@endsection

@section("employe-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/custom.css" rel="stylesheet" />
    <style type="text/css">
       .customTextfield input{
 border:unset;
  
}
.customTextfield input:focus{
  outline:unset;
}
.customTextfield form-control{
  border:2px solid;
  padding:2px;
}
    </style>
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" /> 
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
    
    
@endsection


@section("employe-viewrequest-section")
<div class="container-fluid">
           <div class="row page-titles">
             <div class="col-md-5 col-12 align-self-center">
               <h3 class="text-themecolor mb-0">View Detail </h3>
             </div>
             
           </div>
           <!-- -------------------------------------------------------------- -->
           <!-- Start Page Content -->
           <!-- -------------------------------------------------------------- -->
           <!-- basic table -->
           @if(Session::get('status'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"></use></svg>
        <div>
        {{Session::get('status')}}
        </div>
        </div>
      @endif
           <div class="row">
             <div class="col-12">
               <div class="card">

                 <div class="card-body">
                  <form method="post" action="/employe/exchangecomplete/{{ $singlerequest->request_id }}">
                    @csrf
                   <div class="col-lg-12 col-md-12 col-sm-12">

                       <div class="table-responsive">
                         <table class="table">
                           <tbody>
                            <tr>
                               <th width="390">User name</th>
                               <td>{{ $singlerequest->user_name }}</td>
                             </tr>
                             <tr>
                               <th width="390">Model name</th>
                               <td>{{ $singlerequest->model_name }}</td>
                             </tr>
                             <tr>
                               <th>Exchange date</th>
                                <td>{{ $singlerequest->exchange_date }}</td>
                             </tr>
                             <tr>
                            <th>Exchange time</th>
                            <td>{{ $singlerequest->exchange_time }}</td>
                        </tr>
                        <tr>
                           <th>Address</th>
                           <td>{{ $singlerequest->exchange_address }}</td>
                        </tr>
                        <tr>
                           <th>City </th>
                           <td>{{ $singlerequest->city_name }}</td>
                        </tr>
                        <tr>
                          <th>Extra Cost</th>
                          <td>
                          <span class="customTextfield">
                        &#x20B9; <input name="amount" type="number">
                          </span>
                          </td>
                        </tr>
                        <tr>
                          <th>Extra cost type</th>
                          <td>
                            <div class="">
                                <select class="form-control" name="txtpaymenttype" id="txtpaymenttype">
                                    <option disabled selected value="">Select Payment Type</option>
                                    <option value="online">Online</option>
                                    <option value="cash">Cash</option>
                                </select>
                            </div>
                     </div>
                          </td>
                        </tr>
                        <tr>
                           <th>Status</th>
                           <td>{{ $singlerequest->exchange_status }}</td>
                        </tr>
                        <tr>
                          <th>Description</th>
                          <td>
                            
                            <textarea class="form-control" id="txtdescription" rows="10" cols="2" name="txtdescription"></textarea>
                          </td>
                        <tr>
                        <tr>
                            <td colspan="2"><center><button type="submit" class="btn btn-primary">Complete</button></center></td>
                        </tr>
                           </tbody>
                         </table>
                       </div>
                     </div>
                     </form>
                 </div>
               </div>
             </div>
           </div>
        
      
           <!-- -------------------------------------------------------------- -->
           <!-- End PAge Content -->
           <!-- -------------------------------------------------------------- -->
         <!-- </div> -->
         @endsection