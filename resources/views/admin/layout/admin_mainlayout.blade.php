<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <!-- Original URL: https://demos.wrappixel.com/premium-admin-templates/bootstrap/adminpro-bootstrap/package/html/main/index.html
Date Downloaded: 2021-12-04 12:37:23 PM !-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, admin pro admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, material design, material dashboard bootstrap 5 dashboard template"
    />
    <meta name="description" content="Admin Pro is powerful and clean admin dashboard template" />
    <meta name="robots" content="noindex,nofollow" />
    <title>@yield('title-section')</title>
    <link rel="canonical" href="{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/../www.wrappixel.com/templates/adminpro/index.html" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/') }}/assets/images/Mr_refill_logo_title-removebg-preview.png" />
    
    
    @yield('admin-css-section')
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/../cdn.jsdelivr.net/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');


#search-form {
  width: 30%;
  margin: 0 auto;
  position: relative;
}
#search-form input {
  width: 100%;
  font-size: 1.5rem;
  padding: 10px 15px;
  border: 2px solid #ccc;
  border-radius: 2px;
}
#search-form button {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  background-color: transparent;
  outline: none;
  border: none;
  width: 3rem;
  text-align: center;
  font-size: 1.75rem;
  cursor: pointer;
  color: #333;
}
.info {
  margin-top: 0.5rem;
  text-align: center;
  font-size: 0.75rem;
}

@media (max-width: 1200px) {
  #search-form { width: 50%; }
}
@media (max-width: 768px) {
  .container { padding: 30px 35px; }
  #search-form { width: 100%; }
  .info { font-size: 0.5rem; }
}
        </style>

</head>

<body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
        <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#2962FF" stroke-width="2"></path>
         <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#2962FF" stroke-width="2"></path>
         <path id="teabag" fill="#2962FF" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
         <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#2962FF"></path>
         <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#2962FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
       </svg>
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- -------------------------------------------------------------- -->
    <div id="main-wrapper">
        <!-- -------------------------------------------------------------- -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- -------------------------------------------------------------- -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ri-close-line fs-6 ri-menu-2-line"></i>
                    </a>
                    <!-- ----------------------------------------------------------------->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="navbar-brand" style="background-color:#202224;" href="/admin/dashboard">
                        
                        <!-- Logo icon -->
                        <b class="logo-icon">
                 <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                 <!-- Dark Logo icon -->
                 <img src="{{ URL::to('/') }}/assets/images/Mr_refill_logo_1-removebg-preview.png" height="50px" width="55px" alt="homepage" class="dark-logo" />
                 <!-- Light Logo icon -->
                 <img src="{{ URL::to('/') }}/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
               </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                 <!-- dark Logo text -->
                 <img src="{{ URL::to('/') }}/assets/images/Logo_text-removebg-preview.png" height="60px" width="170px" alt="homepage" class="dark-logo" />
                 <!-- Light Logo text -->
                 <img src="{{ URL::to('/') }}/assets/images/Logo-text-light-2.png" class="light-logo" alt="homepage" />
               </span>
                        <!--End Logo icon -->
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i data-feather="more-horizontal" class="feather-sm"></i></a>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End Logo -->
                <!-- -------------------------------------------------------------- -->
                <div class="navbar-collapse collapse" style="background-color:#398bf7;" id="navbarSupportedContent">
                    <!-- -------------------------------------------------------------- -->
                    <!-- toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item">
                            <a class="
                    nav-link
                    sidebartoggler
                    d-none d-md-block
                    waves-effect waves-dark
                  " href="javascript:void(0)"><i data-feather="menu" style="color:white;" class="feather-sm"></i></a>
                        </li>
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">
                        
                        <!-- -------------------------------------------------------------- -->
                        
                        <!-- -------------------------------------------------------------- -->
                        <!-- Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell" style="color:white;"></i>
                                <div class="notify">
                                    <span class="heartbit"></span> <span class="point"></span>
                                </div>
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    mailbox
                    dropdown-menu-animate-up
                  ">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">
                                                Notifications
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative" style="height: 230px">
                                            <!-- Message -->
                                           
                                            <!-- Message -->
                                            
                                            <!-- Message -->
                                            
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                                            <strong>Check all notifications </strong>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Comment -->
                        <!-- -------------------------------------------------------------- -->
                        
                        <!-- -------------------------------------------------------------- -->
                        <!-- Profile -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ URL::to('/') }}/uploads/admin/{{ Session::get('profile') }}" alt="user" width="50" height="50"  class="profile-pic rounded-circle" />
                            </a>
                            <div class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  ">
                                <div class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-primary
                      text-white
                      mb-2
                    ">
                                    <div class="">
                                        <img src="{{ URL::to('/') }}/uploads/admin/{{ Session::get('profile') }}" alt="user" class="rounded-circle" width="50" height="50" />
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">{{ Session::get('name') }} </h4>
                                        <p class="mb-0">{{ Session::get('email') }}</p>
                                    </div>
                                </div>
                                <!-- <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                    Inbox </a> -->
                                <a class="dropdown-item" href="/admin/changepassword"><i data-feather="unlock" class="feather-sm text-info me-1 ms-1"></i>
                    Change password </a>
                              
                                <a class="dropdown-item" href="/admin/logout"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                    Logout </a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-2">
                                    <a href="/admin/myprofile" class="btn d-block w-100 btn-primary rounded-pill">View Profile </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- -------------------------------------------------------------- -->
        <!-- End Topbar header -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                    <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="/admin/dashboard" aria-expanded="false">
                                <i data-feather="airplay" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                    </li>
                    <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark" href="/admin/calendar" aria-expanded="false">
                                <i data-feather="calendar" class="feather-icon"></i>
                                <span class="hide-menu">Calendar</span>
                            </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="/admin/users" aria-expanded="false">
                            <i data-feather="users" class="feather-icon"></i>
                            <span class="hide-menu">Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="/admin/shop/category/view" aria-expanded="false">
                            <i data-feather="command" class="feather-icon"></i>
                            <span class="hide-menu">Category</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="/admin/shop/brand/view" aria-expanded="false">
                            <i data-feather="slack" class="feather-icon"></i>
                            <span class="hide-menu">Brand</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="/admin/shop/product/view" aria-expanded="false">
                            <i data-feather="life-buoy" class="feather-icon"></i>
                            <span class="hide-menu">Product</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link waves-effect waves-dark" href="/admin/shop/ratingANDreviews" aria-expanded="false">
                            <i data-feather="star" class="feather-icon"></i>
                            <span class="hide-menu">Product Review</span>
                        </a>
                    </li>
                    <!-- <li class="sidebar-item">
                            <a href="/admin/shop/ratingANDreviews/view" class="sidebar-link">   /admin/shop/ratingANDreviews/view   
                            <i class="mdi mdi-adjust"></i>
                            <span class="hide-menu"> Rating & Reviews  </span>
                        </a>
                    </li>            -->
                    
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Utilities</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                     <a href="/admin/utility/offer/view" class="sidebar-link">   <!-- /admin/utility/offer -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Offers </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/inquiry/view" class="sidebar-link">  <!-- /admin/utility/inquiry -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Inquiry  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/news/view" class="sidebar-link">   <!-- /admin/utility/news/view -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> News  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/faq/view" class="sidebar-link">  <!-- /admin/utility/faq -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> FAQ  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/state/view" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> State  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/city/view" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> City  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="package" class="feather-icon"></i>
                                <span class="hide-menu">Orders</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                
                                <li class="sidebar-item">
                                    <a href="/admin/order/process" class="sidebar-link">  <!-- /admin/order/process -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Process  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/order/delivery" class="sidebar-link">   <!-- /admin/order/delivery -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Delivered  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/order/cancel" class="sidebar-link">  <!-- /admin/order/cancle -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Cancel  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="repeat" class="feather-icon"></i>
                                <span class="hide-menu">Exchange</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/pending" class="sidebar-link">  <!-- /admin/exchange/pending -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Pending </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/approved" class="sidebar-link">  <!-- /admin/exchange/approved -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Approved  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/assign" class="sidebar-link">  <!-- /admin/exchange/assign -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Assign  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/complete" class="sidebar-link">  <!-- /admin/exchange/complete -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Complete  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/admin_complete" class="sidebar-link">  <!-- /admin/exchange/admin_complete -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Admin Complete  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/cancel" class="sidebar-link">  <!-- /admin/exchange/cancle -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Cancel  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/model/view" class="sidebar-link">   <!-- /admin/exchange/model/view -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Models </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/log" class="sidebar-link" >
                                        <span class="hide-menu">Log</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="map-pin" class="feather-icon"></i>
                                <span class="hide-menu">Location</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                            <!-- <li class="sidebar-item">
                                    <a href="/admin/utility/state/view" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> State  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/utility/city/view" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> City  </span>
                                    </a>
                                </li> -->
                                <li class="sidebar-item">
                                    <a href="/admin/exchange/map" class="sidebar-link">  <!-- /admin/exchange/cancle -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Request On Map  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/order/map" class="sidebar-link">  <!-- /admin/exchange/cancle -->
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Order On Map  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="bar-chart-2" class="feather-icon"></i>
                                <span class="hide-menu">Reports</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                      <a href="/admin/reports/requests" class="sidebar-link"> 
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Requests </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                     <a href="/admin/reports/order" class="sidebar-link">    
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Orders  </span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="user" class="feather-icon"></i>
                                <span class="hide-menu">Employee</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="/admin/employee/all_employee" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> All employee </span>
                                    </a>
                                </li>
                                <!-- <li class="sidebar-item">
                                    <a href="/admin/employee/employee_reports" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Employee Reports  </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/admin/employee/employee_ratings" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Rating & Reviews  </span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- -------------------------------------------------------------- --> 
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
        <div class="page-wrapper">
            <!-- -------------------------------------------------------------- -->
            <!-- Container fluid  -->
            <!-- -------------------------------------------------------------- -->
            <div class="container-fluid">
                @yield('dashboard-main-section')
                @yield('admin-calendar-section')
                @yield('admin-add-section')
                @yield('admin-view-section')
                @yield('admin-order-pending')
                @yield('admin-order-delivery')
                @yield('admin-order-process')
                @yield('admin-order-cancle')
                @yield('admin-orders_invoice-section')
                @yield('admin-view_process_orders-section')
                @yield('admin-view_cancle_orders-section')
                @yield('admin-view_delivery_orders-section')
                @yield('admin-view_pending_orders-section')
                @yield('admin-shop-brand')
                @yield('admin-shop-updatebrand')
                @yield('admin-shop-updatecategory')
                @yield('admin-shop-category')
                @yield('admin-viewcategory-section')
                @yield('admin-viewmodels-section')
                @yield('admin-viewbrand-section')
                @yield('admin-viewproducts-section')
                @yield('admin-shop-product')
                @yield('admin-viewproduct-section')
                @yield('admin-shop-rating')
                @yield('admin-viewrating-section')
                @yield('admin-utilities-offer')
                @yield('admin-viewoffers-section')
                @yield('admin-utilities-inquiry')
                @yield('admin-utilities-news')
                @yield('admin-viewnews-section')
                @yield('admin-utilities-faq')
                @yield('admin-utilities-city')
                @yield('admin-utilities-state')
                @yield('admin-utility-updatestate')
                @yield('admin-utility-updatecity')
                @yield('admin-utilities-offer-update')
                @yield('admin-utilities-news-update')
                @yield('admin-viewstate-section')
                @yield('admin-viewcity-section')
                @yield('admin-exchange-admin_complete')
                @yield('admin-exchange-approved')
                @yield('admin-exchange-assign')
                @yield('admin-exchange-cancle')
                @yield('admin-exchange-complete')
                @yield('admin-exchange-pending')
                @yield('admin-exchange-log')
                @yield('admin-exchange-map-section')
                @yield('admin-view_pending_request-section')
                @yield('admin-view_log-section')
                @yield('admin-view_approved_request-section')
                @yield('admin-view_assigned_request-section')
                @yield('admin-view_cancle_request-section')
                @yield('admin-view_complete_request-section')
                @yield('admin-view_admin-complete_request-section')
                @yield('admin-exchange-model')
                @yield('admin-exchange-updatemodel')
                @yield('admin-exchange_invoice-section')
                @yield('admin-employee-all_employee')
                @yield('admin-viewemployee-section')
                @yield('admin-employee-employee_reports')
                @yield('admin-employee-employee_ratings')
                @yield('admin-report-requests-section')
                @yield('admin-report-orders-section')
                @yield('admin-changepassword-section')
                @yield('admin-employee-addemp')
                @yield('admin-users-section')
                @yield('admin-viewuser-section')
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
        </div>
         <!-- Footer -->
        <footer class="footer text-center">
            All Rights Reserved by Mr REFILL.
            <!--Start of Tawk.to Script-->
            <!-- <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/623eff020bfe3f4a876fd138/1fv3189at';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script> -->
            <!--End of Tawk.to Script-->
         </footer>

         <!-- Footer end -->
        <!-- -------------------------------------------------------------- -->
        <!-- End Page wrapper  -->
        <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    <!-- -------------------------------------------------------------- -->
    <!-- customizer Panel -->
    <!-- -------------------------------------------------------------- -->
    <aside class="customizer">
       
        <div class="customizer-body">
            <ul class="nav customizer-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="ri-tools-fill fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false"><i class="ri-message-3-line fs-6"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="ri-timer-line fs-6"></i></a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="p-3 border-bottom">
                        <!-- Sidebar -->
                        <h5 class="font-weight-medium mb-2 mt-2">Layout Settings </h5>
                        <div class="form-check mt-3">
                            <input type="checkbox" name="theme-view" class="form-check-input" id="theme-view" />
                            <label class="form-check-label" for="theme-view">
                   <span>Dark Theme </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" class="sidebartoggler form-check-input" name="collapssidebar" id="collapssidebar" />
                            <label class="form-check-label" for="collapssidebar">
                   <span>Collapse Sidebar </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="sidebar-position" class="form-check-input" id="sidebar-position" />
                            <label class="form-check-label" for="sidebar-position">
                   <span>Fixed Sidebar </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="header-position" class="form-check-input" id="header-position" />
                            <label class="form-check-label" for="header-position">
                   <span>Fixed Header </span>
                 </label>
                        </div>
                        <div class="form-check mt-2">
                            <input type="checkbox" name="boxed-layout" class="form-check-input" id="boxed-layout" />
                            <label class="form-check-label" for="boxed-layout">
                   <span>Boxed Layout </span>
                 </label>
                        </div>
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-logobg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Navbar BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-navbarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Navbar BG -->
                    </div>
                    <div class="p-3 border-bottom">
                        <!-- Logo BG -->
                        <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds </h5>
                        <ul class="theme-color m-0 p-0">
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin1"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin2"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin3"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin4"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin5"></a>
                            </li>
                            <li class="theme-item list-inline-item me-1">
                                <a href="javascript:void(0)" class="theme-link rounded-circle d-block" data-sidebarbg="skin6"></a>
                            </li>
                        </ul>
                        <!-- Logo BG -->
                    </div>
                </div>
                <!-- End Tab 1 -->
                <!-- Tab 2 -->
                <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <ul class="mailbox list-style-none mt-3">
                        <li>
                            <div class="message-center chat-scroll position-relative">
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_1" data-user-id="1">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle online"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_2" data-user-id="2">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle busy"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sonu Nigam </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I've sung a song! ___ you at </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_3" data-user-id="3">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle away"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Arijit Sinh </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">I am a singer! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_4" data-user-id="4">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Nirav Joshi </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_5" data-user-id="5">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/5.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Sunil Joshi </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_6" data-user-id="6">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/6.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Akshay Kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_7" data-user-id="7">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/7.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Pavan kumar </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                                <!-- Message -->
                                <a href="javascript:void(0)" class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    " id="chat_user_8" data-user-id="8">
                                    <span class="user-img position-relative d-inline-block">
                       <img src="{{ URL::to('/') }}/assets/images/users/8.jpg" alt="user" class="rounded-circle w-100" />
                       <span class="profile-status rounded-circle offline"></span>
                                    </span>
                                    <div class="w-75 d-inline-block v-middle ps-2">
                                        <h5 class="message-title mb-0 mt-1">Varun Dhavan </h5>
                                        <span class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        ">Just see the my _____! </span>
                                        <span class="fs-2 text-nowrap d-block text-muted">9:02 AM </span>
                                    </div>
                                </a>
                                <!-- Message -->
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- End Tab 2 -->
                <!-- Tab 3 -->
                <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <h6 class="mt-3 mb-3">Activity Timeline </h6>
                    <div class="steamline">
                        <div class="sl-item">
                            <div class="sl-left bg-success">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm </span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark </div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ URL::to('/') }}/assets/images/users/2.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Contrary to popular belief </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ URL::to('/') }}/assets/images/users/1.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen </a>
                                    <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Approve meeting with tiger </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-primary">
                                <i data-feather="user" class="feather-sm fill-white"></i>
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Meeting today <span class="sl-date"> 5pm </span>
                                </div>
                                <div class="desc">you can write anything </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left bg-info"><i class="fas fa-image"></i></div>
                            <div class="sl-right">
                                <div class="font-weight-medium">Send documents to Clark </div>
                                <div class="desc">Lorem Ipsum is simply </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ URL::to('/') }}/assets/images/users/4.jpg" />
                            </div>
                            <div class="sl-right">
                                <div class="font-weight-medium">
                                    Go to the Doctor <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Contrary to popular belief </div>
                            </div>
                        </div>
                        <div class="sl-item">
                            <div class="sl-left">
                                <img class="rounded-circle" alt="user" src="{{ URL::to('/') }}/assets/images/users/6.jpg" />
                            </div>
                            <div class="sl-right">
                                <div>
                                    <a href="javascript:void(0)">Stephen </a>
                                    <span class="sl-date">5 minutes ago </span>
                                </div>
                                <div class="desc">Approve meeting with tiger </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Tab 3 -->
            </div>
        </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
   
    @yield('admin-jq-section')
    <script>
        const searchForm = document.querySelector("#search-form");
const searchFormInput = searchForm.querySelector("input"); // <=> document.querySelector("#search-form input");
const info = document.querySelector(".info");

// The speech recognition interface lives on the browser’s window object
const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition; // if none exists -> undefined


        </script>
        <!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6214a262a34c245641277ef6/1fsg9klfj';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->
    
<script>
function getnot()
{
    $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
    
        $.ajax({
            url: "/admin/getnotification",
            method: 'get', 
            success: function(result){
            
                var obj = $.parseJSON(result);
                output="";
                $.each(obj, function(key,value) {
                    
                    // output+='<a href="#" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';
                    
                    if(value["notification_type"]=="new_request")
                    {
                        output+='<a href="/admin/exchange/pending/details/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';  
                    }
                    else if(value["notification_type"]=="new_order")
                    {
                        output+='<a href="/admin/order/invoice/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';  
                    }
                    else if(value["notification_type"]=="new_inquiry")
                    {
                        output+='<a href="/admin/utility/inquiry/details/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';
                    }
                    else if(value['notification_type']=='complete request')
                    {
                        output+='<a href="/admin/exchange/complete/details/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Request Complete</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';
                    }
                    else if(value['notification_type']=='cancel_order')
                    {
                        output+='<a href="/admin/order/cancel/details/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';
                    }
                    else if(value['notification_type']=='cancel_request')
                    {
                        output+='<a href="/admin/exchange/cancel/request/'+value["id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">'+value["remark"]+'</span> <span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["note_date_time"]+'</span> </div></a>';
                    }
                });
                $(".notifications").html(output);
            }
        });
        
}
    $(document).ready(function(){

        setInterval(getnot(), 1000);
        
    });
    </script>

   
</body>

</html>