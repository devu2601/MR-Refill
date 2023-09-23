@extends('employee.layout.employe__mainlayout')

@section("title-section")
Rating & Review
@endsection

@section("employe-css-section")
<link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/css/responsive.dataTables.min.css" />
    <!-- Custom CSS -->
    <link href="{{ URL::to('/') }}/dist/css/style.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ URL::to('/') }}/dist/css/star-rating-svg.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/css/star-rating.min.css">
	<link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">
@endsection

@section("employe-jq-section")
<script src="{{ URL::to('/') }}/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ URL::to('/') }}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
    <script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
	<script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
    <!--This page plugins -->
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ URL::to('/') }}/assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/jquery.star-rating-svg.js"></script>
    <script src="{{ URL::to('/') }}/dist/js/jquery.star-rating-svg.min.js"></script>
    <script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd8668fd6b8aff","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
        $(".my-rating-2").starRating({
    // totalStars: 5,
    // emptyColor: 'lightgray',
    // hoverColor: 'gold',
    // activeColor: 'gold',
    // strokeWidth: 0,
    // useGradient: false

    
});
    </script>
@endsection

@section('employe-ratingreview-section')


                <!-- -------------------------------------------------------------- -->
                <!-- Start Page Content -->
                <!-- -------------------------------------------------------------- -->
                <!-- basic table -->
                <div class="row">
                    @foreach($data as $row)
                    <div class="col-12">
                        <div _ngcontent-upo-c298="" class="card">
                            <div _ngcontent-upo-c298="" class="body">
                                <div _ngcontent-upo-c298="" class="row">
                                    <div _ngcontent-upo-c298="" class="col-12">
                                        <div _ngcontent-upo-c298="" class="card p-3 m-0">
                                            
                                            <div _ngcontent-upo-c298="" class="row">
                                                <div _ngcontent-upo-c298="" class="col-12 col-md-2 mb-0">
                                                    <img _ngcontent-upo-c298="" src="{{ URL::to('/') }}/uploads/users/{{ $row->user_profile }}" class="img-circle doc-card-image" style="width: 150px;">
                                                </div>
                                                <div _ngcontent-upo-c298="" class="col-md-6 border-right mb-0">
                                                    <div _ngcontent-upo-c298="" class="doc-card-title">
                                                        <h4 _ngcontent-upo-c298="">{{ $row->user_name }}</h4>
                                                    </div>
                                               
                                                    <div _ngcontent-upo-c298="" class="d-flex flex-row align-items-center">
                                                        <div _ngcontent-upo-c298="" class="d-flex flex-row align-items-center ratings">
                                                            <!-- <span _ngcontent-upo-c298="" class="msr-1 rating-number">{{ $row->emp_rating }}</span> -->
                                                            <div _ngcontent-upo-c298="" class="stars star">
                                                                @for($i=1;$i<=$row->emp_rating;$i++)
                                                               
                                                                <span class="fa fa-star "></span>
                                                                
                                                                @endfor
                                                            </div>

                                                            <!-- <div class="d-block pb-2">
                                                                    <input type="text" class="rating-invisible" value="{{ $row->rating }}" name="rating" id="rating" title="" data-plugin-star-rating data-plugin-options="{'color': 'dark', 'size':'sm'}" readonly> 
                                                            </div> -->
                                                           
                                                        </div>
                                                    </div>
                                                    <div _ngcontent-upo-c298="" class="description">
                                                        <p _ngcontent-upo-c298="">{{ $row->emp_review }}<br _ngcontent-upo-c298=""></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
             @endforeach
         </div>
        
@endsection