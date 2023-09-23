<!DOCTYPE html>
<html>
<!-- Mirrored from www.okler.net/previews/porto/9.3.0/index-classic-color.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 09:20:04 GMT -->

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mr Refill - One Stop Solution For Printer</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Responsive HTML5 Template">
    <meta name="author" content="okler.net">
    <!-- Favicon -->
    @yield('home-css')
    @yield('css')
</head>

<body data-plugin-page-transition>
    <div class="body">
        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-color-primary header-body-bottom-border">
                <div class="header-top header-top-default border-bottom-0">
                    <div class="container">
                        <div class="header-row py-2">
                            <div class="header-column justify-content-start">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills text-uppercase text-2">
                                            <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link ps-0" href="/User/about/aboutus"><i class="fas fa-angle-right"></i> About Us</a> </li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="header-column justify-content-end">
                                <div class="header-row">
                                    <nav class="header-nav-top">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"> <a href="mailto:mrrefill3@gmail.com"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> <span class="__cf_email__" data-cfemail="f598949c99b5919a98949c9bdb969a98">mrrefilll3@gmail.com&#160;<span><a></li>
                                            <li class="nav-item"> <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> 704-683-5790</a> </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/User/home"> <img alt="Porto" width="170" height="70" src="{{ URL::to('/') }}/img/logo6.jpg"> </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav header-nav-links order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle " href="/User/home">Home</a>
                                                    
                                                </li>
                                                <li class="dropdown "> <a class="dropdown-item dropdown-toggle" href="/User/productlist">Shop</a>
                                                    <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu"> <a class="dropdown-item" href="#">View</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item" href="/User/productlist">All products</a></li>
                                                                        <li><a class="dropdown-item" href="/User/categorylist">Products By Category</a></li>
                                                                        <li><a class="dropdown-item" href="/User/brandlist">Products By Brand</a></li>
                                                                       
                                                                    </ul>
                                                                </li>
                                                    </ul>
                                                </li>
                                                
                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle " href="/User/exchange">Exchange Cartridge</a>
                                                    
                                                </li>

                                                <li class="dropdown"> <a class="dropdown-item dropdown-toggle " href="/User/services/enquiry">Enquiry</a>
                                                    
                                                </li>

                                                <li class="dropdown "> <a class="dropdown-item dropdown-toggle" href="#">About</a>
                                                    <ul class="dropdown-menu">
                                                  
                                                                        <li><a class="dropdown-item" href="/User/about/aboutus">About us</a></li>
                                                                        <li><a class="dropdown-item" href="/User/about/news">News</a></li>
                                                                        
                                                                       
                                                                   
                                                    </ul>
                                                </li>

                                 
                                               
                                                    
                                                 </li>

                                                    
                                                    </li>
                                                @if(Session::has("isuserlogin"))
                                                <li class="dropdown "> <a class="dropdown-item dropdown-toggle" href="/User/profile">My Account</a>
                                                    <ul class="dropdown-menu">
                                                  
                                                                        <li><a class="dropdown-item" href="/User/orderlist">My order</a></li>
                                                                        <li><a class="dropdown-item" href="/User/exchange/viewrequests">My Exchange requests</a></li>
                                                                        <li><a class="dropdown-item" href="/User/offer">My Offers</a></li>
                                                                        <li><a class="dropdown-item" href="/User/login/userlogout"> <i class="icon-logout icons"></i><span class="name">   logout</span></a> </a></li>
                                                                        
                                                                   
                                                    </ul>
                                                </li>
                                                @else
                                                <li class="dropdown "> <a class="dropdown-item dropdown-toggle" href="/User/login">Login</a>
                                                </li>
                                                @endif
                                                
                                            </ul>
                                        </nav>
                                    </div>
                                    <ul class="header-social-icons social-icons d-none d-sm-block">
                                        <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav"> <i class="fas fa-bars"></i> </button>
                                </div>
                                <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex"> <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                        <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                            <form role="search" action="/User/productlist_search" method="post">
                                                @csrf
                                                <div class="simple-search input-group">
                                                    <input class="form-control text-1" id="txtsearch" name="txtsearch" type="search" value="" placeholder="Search...">
                                                    <button class="btn" type="submit"> <i class="fas fa-search header-nav-top-icon"></i> </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @if(Session::has("isuserlogin"))
                                    <div class="header-nav-feature header-nav-features-cart d-inline-flex ms-2">
                                        <a href="/User/cart" class="header-nav-feature"> <img src="{{ URL::to('/') }}/img/icons/icon-cart.svg" width="14" alt="" class="header-nav-top-icon-img"> 
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
       @yield('content-part')
        <footer id="footer">
            <div class="container">
                <div class="footer-ribbon"> <span>Get in Touch</span> </div>
                <div class="row py-5 my-4">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <h5 class="text-3 mb-3">NEWSLETTER</h5>
                        <p class="pe-1">Keep up on our always evolving product features and technology. Enter your e-mail address and subscribe to our newsletter.</p>
                        <div class="alert alert-success d-none" id="newsletterSuccess"> <strong>Success!</strong> You've been added to our email list. </div>
                        <div class="alert alert-danger d-none" id="newsletterError"></div>
                        <form id="newsletterForm" action="https://www.okler.net/previews/porto/9.3.0/php/newsletter-subscribe.php" method="POST" class="me-4 mb-3 mb-md-0">
                            <!-- <div class="input-group input-group-rounded">
                                <input class="form-control form-control-sm bg-light" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email">
                                <button class="btn btn-light text-color-dark" type="submit"><strong>GO!</strong></button>
                            </div> -->
                        </form>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
                     
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                        <div class="contact-details">
                            <h5 class="text-3 mb-3">CONTACT US</h5>
                            <ul class="list list-icons list-icons-lg">
                                <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i>
                                    <p class="m-0">101 Raj World, Adajan, Surat</p>
                                </li>
                                <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i>
                                    <p class="m-0"><a href="tel:8001234567">(+91)&nbsp &nbsp7046 835 790</a></p>
                                </li>
                                <li class="mb-1"><i class="far fa-envelope text-color-primary"></i>
                                    <p class="m-0"><a href="https://www.okler.net/cdn-cgi/l/email-protection#127f737b7e52776a737f627e773c717d7f"><span class="__cf_email__" data-cfemail="eb868a8287ab8e938a869b878ec5888486">[mrrefilll3@gmail.com]</span></a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <h5 class="text-3 mb-3">FOLLOW US</h5>
                        <ul class="social-icons">
                            <li class="social-icons-facebook"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="social-icons-twitter"><a href="https://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="social-icons-linkedin"><a href="https://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container py-2">
                    <div class="row py-4">
                        <div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
                            <a href="/User/home" class="logo pe-0 pe-lg-3"> <img alt="Porto Website Template" src="{{ URL::to('/') }}/img/new_logo_black.jpg" class="opacity-5" width="75" height="35" data-plugin-options="{'appearEffect': 'fadeIn'}"> </a>
                        </div>
                        <div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
                            <p>© Copyright 2022. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
                            <nav id="sub-menu">
                                <ul>
                                    <li><i class="fas fa-angle-right"></i><a href="/User/faq" class="ms-1 text-decoration-none"> FAQ's</a></li>
                                    <!-- <li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li> -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

   <!--   old tawl.to -->

            <!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/621dfad41ffac05b1d7c6203/1ft2hnka1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->

<!--  New tawk.to  -->

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/623eff020bfe3f4a876fd138/1fv3189at';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
        </footer>
    </div>
     
    @yield('home-script')
    @yield('script')

</body>
<!-- Mirrored from www.okler.net/previews/porto/9.3.0/index-classic-color.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Jan 2022 09:20:24 GMT -->

</html>