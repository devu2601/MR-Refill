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
    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::to('/') }}/assets/images/Mr_refill_logo_title.png" />
    @yield('employe-css-section')
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="{{ URL::to('/') }}/{{ URL::to('/') }}/{{ URL::to('/') }}/../cdn.jsdelivr.net/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <!-- -------------------------------------------------------------- -->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="navbar-brand" href="/employe/dashboard">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                 <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                 <!-- Dark Logo icon -->
                 <img src="{{ URL::to('/') }}/assets/images/logo7.jpg" alt="homepage" class="dark-logo" height="60px" width="55px" />
                 <!-- Light Logo icon -->
                 <img src="{{ URL::to('/') }}/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
               </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                 <!-- dark Logo text -->
                 <img src="{{ URL::to('/') }}/assets/images/text7.jpg" alt="homepage" class="dark-logo" height="70px" width="120px" />
                 <!-- Light Logo text -->
                 <img src="{{ URL::to('/') }}/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
               </span>
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
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
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
                  " href="javascript:void(0)"><i data-feather="menu" class="feather-sm"></i></a>
                        </li>
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Search -->
                        <!-- -------------------------------------------------------------- -->
                       
                        <!-- -------------------------------------------------------------- -->
                        <!-- Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
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
                                    <li>
                                        <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                                            <strong>Check all notifications </strong>
                                            <i data-feather="chevron-right" class="feather-sm"></i>
                                        </a>
                                    </li>
                                </ul>  
                              
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Messages -->
                        <!-- -------------------------------------------------------------- -->
                        
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Messages -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Mega Menu -->
                        <!-- -------------------------------------------------------------- -->
                       
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Mega Menu -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Language -->
                        <!-- -------------------------------------------------------------- -->
                        
                        <!-- -------------------------------------------------------------- -->
                        <!-- Profile -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ URL::to('/') }}/uploads/employee/<?php echo Session::get('employee_profile'); ?>" alt="user" height="50" width="50" class="profile-pic rounded-circle" />
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
                                        <img src="{{ URL::to('/') }}/uploads/employee/<?php echo Session::get('employee_profile'); ?>" alt="user" class="rounded-circle" width="70" height="70" />
                                    </div>
                                    <div class="ms-2">
                                        <h4 class="mb-0 text-white">{{ Session::get('employee_name') }}</h4>
                                        <p class="mb-0">{{ Session::get('employee_email') }}</p>
                                    </div>
                                </div>
                                
                                
                                
                                <a class="dropdown-item" href="/employe/changepassword"><i data-feather="unlock" class="feather text-secondary feather-unlock feather-sm me-1 ms-1"></i>
                    Change Password </a>
                                
                                
                                
                                <a class="dropdown-item" href="/employe/logout"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>
                    Logout </a>
                                <div class="dropdown-divider"></div>
                                <div class="pl-4 p-2">
                                    <a href="/employe/myprofile" class="btn d-block w-100 btn-primary rounded-pill">View Profile </a>
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
                            <a class="sidebar-link  waves-effect waves-dark" href="/employe/dashboard" aria-expanded="false">
                                <i data-feather="shopping-bag" class="feather-icon"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            
                        </li>
                            <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="/employe/myprofile" aria-expanded="false">
                                <i data-feather="users" class="feather-icon"></i>
                                <span class="hide-menu">My Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i data-feather="grid" class="feather-icon"></i>
                                <span class="hide-menu">Exchange Request</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="/employe/exchangenew" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> New </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/employe/exchangerequest/complete" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Complete  </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="/employe/ratingreview" aria-expanded="false">
                                <i data-feather="package" class="feather-icon"></i>
                                <span class="hide-menu">Rating & Reviews</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="/employe/calender" aria-expanded="false">
                                <i data-feather="calendar" class=" feather-icon"></i>
                                <span class="hide-menu">Calender</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item">
                            <a class="sidebar-link  waves-effect waves-dark" href="/exchangereports" aria-expanded="false">
                                <i data-feather="bar-chart-2" class="feather-icon"></i>
                                <span class="hide-menu">Exchange Reports</span>
                            </a>
                        </li> -->
                        </ul>
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
                @yield('employe-myprofile-section')
                @yield('employe-exchangereq-section')
                @yield('employe-changepassword-section')
                
                @yield('employe-viewrequest-section')
                @yield('employe-ratingreview-section')
                @yield('employe-location-section')
                @yield('employe-calendar-section')
            </div>
            <!-- -------------------------------------------------------------- -->
            <!-- End Container fluid  -->
            <!-- -------------------------------------------------------------- -->
        </div>
        <footer class="footer text-center">
            All Rights Reserved by Mr REFILL.
            <!--Start of Tawk.to Script-->
            
            <!--End of Tawk.to Script-->
         </footer>
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
    
    <div class="chat-windows"></div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    @yield('employe-jq-section')
    
    <!--Start of Tawk.to Script-->
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
</script>-->
<script>
    function getnot()
{
    $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
    
        $.ajax({
            url: "/employe/getnotification",
            method: 'get',
            success: function(result){
                
              //  alert(result);
                var obj = $.parseJSON(result);
                output="";
                $.each(obj, function(key,value) {
                      
                output+='<a href="/employe/exchangerequest/view/'+value["request_id"]+'" class="message-item d-flex align-items-center border-bottom px-3 py-2"><span class="btn btn-light-primary text-primary btn-circle"><i data-feather="users" class="feather-sm fill-white"></i></span><div class="w-75 d-inline-block v-middle ps-3"><h5 class="message-title mb-0 mt-1 fs-3 fw-bold">'+value['user_name']+'</h5><span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1 ">New Request Arrived</span><span class=" fs-2 text-nowrap d-block subtext text-muted ">'+value["log_date_time"]+'</span> </div></a>';  
                });
                $(".notifications").html(output);
            }
        });
}
    $(document).ready(function(){

        setInterval(getnot(), 10000);
        
    });
</script>
</body>

</html>