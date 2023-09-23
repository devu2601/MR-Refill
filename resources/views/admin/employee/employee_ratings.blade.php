@extends('admin.layout.admin_mainlayout')

@section("title-section")
Employee ratings
@endsection

@section("admin-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/star-rating-svg.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    
@endsection

@section("admin-jq-section")
<script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="{{ URL::to('/') }}/dist/js/app.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/app.init.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/jquery.star-rating-svg.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/jquery.star-rating-svg.min.js"></script>
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
        $(".my-rating-2").starRating({
    totalStars: 5,
    emptyColor: 'lightgray',
    hoverColor: 'gold',
    activeColor: 'gold',
    strokeWidth: 0,
    useGradient: false
});
    </script>
@endsection

@section("admin-employee-employee_reports")
<div class="row page-titles">
                    <div class="col-md-5 col-12 align-self-center">
                        
                    </div>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- Start Page Content -->
                <!-- -------------------------------------------------------------- -->
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="border-bottom title-part-padding">
                                <h4 class="card-title mb-0">Rating & Review </h4>
                            </div>
                            <div class="card-body">
                                <!-- <label >Your rating</label> &nbsp; &nbsp; &nbsp; &nbsp;
                                <label>Quality<label>
                                <div class="my-rating-2"></div>
                                <label>Quality<label>
                                <div class="my-rating-2"></div> -->
                                <div class="row col-12">
                                        <div class="col-2">
                                            <table>
                                                <tr>
                                                    <td>Your rating</td>
                                                </tr>
                                            </table>
                                        </div>
                                    
                                        <div class="col-10">
                                            <table>
                                            <tr>
                                                <td>Quality&nbsp;</td>
                                                <td><div class="my-rating-2"></div></td>
                                            </tr>    
                                            <tr>
                                                <td> &nbsp; </td>
                                            </tr>
                                            <tr>
                                                <td>Rating&nbsp;</td>
                                                <td><div class="my-rating-2"></div></td>
                                            </tr>    
                                        </table>
                                    </div>    
                                </div>
                                <div class="row col-12" style="margin-top: 25px;">
                                        <div class="col-2">
                                            <table>
                                                <tr>
                                                    <td>Review</td>
                                                </tr>
                                            </table>
                                        </div>
                                    
                                        <div class="col-10">
                                            <table>
                                            <tr>
                                                <td><textarea name="review" id="review" cols="40" rows="3" class="form-control" disabled></textarea></td>
                                            </tr>    
                                            
                                        </table>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
@endsection