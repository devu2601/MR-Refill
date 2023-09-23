@extends('User_layout.User_layout')

@section('content-part')

<div role="main" class="main shop pt-4">

<div class="container">

    <div class="row">
        <div class="col-lg-3 order-2 order-lg-1">
            <aside class="sidebar">
                
                <h5 class="font-weight-semi-bold pt-3">Categories</h5>
                <ul class="nav nav-list flex-column">
                    @foreach($catdata as $row)
                        <?php if($row->cat_status == "Active"){ ?>
                    <li class="nav-item"><a class="nav-link" href="/User/categorylist/search/{{ $row->cat_id }}">{{$row->cat_name}}</a></li>
                            <?php } ?>
                    @endforeach
                </ul>
                
               
                <div class="row mb-5">
                    <div class="col">
                        <h5 class="font-weight-semi-bold pt-5">Top Rated Products</h5>
                        <div class="product row row-gutter-sm align-items-center mb-4">
                            @foreach($product_data2 as $row)
                            <div class="col-5 col-lg-5">
                                <div class="product-thumb-info border-0">
                                    <a href="/User/productlist/detail/{{ $row->product_id}}">
                                        <div class="product-thumb-info-image"> <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}"> </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-7 col-lg-7 ms-md-0 ms-lg-0 ps-lg-1 pt-1"> <a href="" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-2"></a>
                                <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="/User/productlist/detail/{{ $row->product_id}}" class="text-color-dark text-color-hover-primary text-decoration-none">{{ $row->product_name }}</a></h3>
                                <div title="Rated 5 out of 5"> 
                                    <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'dark', 'size':'xs'}" readonly> </div>
                                <p class="price text-4 mb-0"> <span class="sale text-color-dark font-weight-semi-bold">{{ $row->product_sales_price }}</span> <span class="amount">{{ $row->product_retail_price }}</span> </p>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </aside>
        </div>
        <div class="col-lg-9 order-1 order-lg-2">
            <div class="masonry-loader masonry-loader-showing">
                <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                  @foreach($product_data as $row)
                    <div class="col-sm-6 col-lg-4">
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                               
                                <!-- <div class="addtocart-btn-wrapper">
                                    <a href="#" class="text-decoration-none addtocart-btn" title="Add to Cart">
                                        <i class="icons icon-bag"></i>
                                    </a>
                                </div>
                                <a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
                                        QUICK VIEW
                                    </a> -->
                                <a href="/User/productlist/detail/{{ $row->product_id}}">
                                    <div class="product-thumb-info-image">
                                        <img alt="" class="img-fluid" src="{{ URL::to('/') }}/uploads/product/{{ $row->product_img1 }}">
                                    </div>
                                </a>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="/User/categorylist/search/{{ $row->cat_id }}" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $row->cat_name }}</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0"><a href="/User/productlist/detail/{{ $row->product_id}}" class="text-color-dark text-color-hover-primary">{{ $row->product_name }}</a></h3>
                                </div>
                                <!-- <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4"><i class="far fa-heart"></i></a> -->
                            </div>
                            <!-- <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                             -->
                            
                             
                            <div class="price mb-3">
									<input type="text" class="rating-invisible" value="{{$row->totalrating}}" name="rating" id="rating" title="" data-plugin-star-rating data-plugin-options="{'color': 'dark', 'size':'s'}" readonly> 
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">Rs. {{$row->product_sales_price}}</span>
                                <span class="amount">Rs. {{$row->product_retail_price}}</span>
                            </p>
                            
                        </div>
                    </div>

                    @endforeach
                

                </div>
                <!-- <div class="row mt-4">
                    <div class="col">
                        <ul class="pagination float-end">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>

</div>    

@endsection

@section('css')

<link rel="shortcut icon" href="{{ URL::to('/') }}/img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ URL::to('/') }}/img/apple-touch-icon.png">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&amp;display=swap" rel="stylesheet" type="text/css">
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/css/star-rating.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/theme.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-elements.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-blog.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/theme-shop.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ URL::to('/') }}/css/skins/default.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/css/custom.css">

    <!-- Head Libs -->
    <script src="{{ URL::to('/') }}/vendor/modernizr/modernizr.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SEP1T05Z5V');
    </script>

@endsection

@section('script')

<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/lazysizes/lazysizes.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/isotope/jquery.isotope.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/vide/jquery.vide.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/vivus/vivus.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>
    <script src="{{ URL::to('/') }}/vendor/jquery.countdown/jquery.countdown.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ URL::to('/') }}/js/theme.js"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ URL::to('/') }}/js/views/view.shop.js"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ URL::to('/') }}/js/theme.init.js"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6ccd869e4e8d4a1d","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}'
        crossorigin="anonymous"></script>

@endsection