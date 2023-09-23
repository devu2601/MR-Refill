<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\User_Aboutus_controller;
use App\Http\Controllers\User_ChangePassword_Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin_Exchange_cartridge;
use App\Http\Controllers\Admin_Order_controller;
use App\Http\Controllers\Admin_shop_controller;
use App\Http\Controllers\Admin_utilities_controller;
use App\Http\Controllers\Admin_Employee_controller;
use App\Http\Controllers\Admin_reports_controller;
use App\Http\Controllers\Admin_users_controller;
use App\Http\Controllers\mailsendemployee;
use App\Http\Controllers\testcontroller;

use App\Http\Middleware\CheckAdminLogin;


//  user controllers

use App\Http\Controllers\User_Auth;
use App\Http\Controllers\User_common;
use App\Http\Controllers\User_exchange;
use App\Http\Controllers\User_shop;
use App\Http\Middleware\checkuserlogin;

// user controllers over

// employee controllers

use App\Http\Controllers\employecontroller;
use App\Http\Controllers\Employe_AuthController;
use App\Http\Controllers\SendEmailController;
use App\Http\Middleware\employelogin;
use App\Http\Controllers\LocationController;

// employee controllers over


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LoginController::class, 'login']);
// Admin controllers
Route::get('/admin/login', [LoginController::class, 'login']);

Route::post('/admin/checklogin', [LoginController::class, 'checklogin']);
Route::get('/admin/changepassword',[LoginController::class,'changepassword']);
Route::post('/admin/checkpassword',[LoginController::class,'checkpassword']);

Route::middleware([CheckAdminLogin::class])->group(function () {
   
    Route::get('/admin/logout', [LoginController::class, 'logout']);
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/admin/getnotification', [DashboardController::class, 'notification']);
    Route::get('/admin/calendar', [DashboardController::class, 'calendar']);
    Route::get('/admin/myprofile', [DashboardController::class, 'myprofile']);
    Route::get('/admin/exchange/pending', [Admin_Exchange_cartridge::class, 'pending']);
    Route::get('/admin/exchange/pending/details/{id}', [Admin_Exchange_cartridge::class, 'pendingdetails']);
    Route::get('/admin/exchange/approved/details/{id}', [Admin_Exchange_cartridge::class, 'approveddetails']);
    Route::get('/admin/exchange/assigned/details/{id}', [Admin_Exchange_cartridge::class, 'assigneddetails']);
    Route::get('/admin/exchange/cancel/details/{id}', [Admin_Exchange_cartridge::class, 'canceldetails']);
    Route::get('/admin/exchange/cancel/request/{id}', [Admin_Exchange_cartridge::class, 'cancelrequest']);
    Route::get('/admin/exchange/complete/details/{id}', [Admin_Exchange_cartridge::class, 'completedetails']);
    Route::get('/admin/exchange/admin_complete/details/{id}', [Admin_Exchange_cartridge::class, 'admin_completedetails']);
    Route::get('/admin/exchange/status_change_assign/{req_id}', [Admin_Exchange_cartridge::class, 'status_change_assign']);
    Route::get('/admin/exchange/status_change_approved/{req_id}', [Admin_Exchange_cartridge::class, 'status_change_approved']);
    Route::get('/admin/exchange/statuschange/{req_id}', [Admin_Exchange_cartridge::class, 'status_change_admin_complete']);
    Route::get('/admin/exchange/approved', [Admin_Exchange_cartridge::class, 'approved']);
    Route::get('/admin/exchange/invoice/{id}', [Admin_Exchange_cartridge::class, 'invoice']);
    Route::get('/admin/exchange/assign', [Admin_Exchange_cartridge::class, 'assign']);
    Route::get('/admin/exchange/complete', [Admin_Exchange_cartridge::class, 'complete']);
    Route::get('/admin/exchange/cancel', [Admin_Exchange_cartridge::class, 'cancel']);
    Route::get('/admin/exchange/admin_complete', [Admin_Exchange_cartridge::class, 'admin_complete']);
    Route::get('/admin/exchange/model/view', [Admin_Exchange_cartridge::class, 'viewmodel']);
    Route::get('/admin/exchange/model', [Admin_Exchange_cartridge::class, 'model']);
    Route::get('/admin/exchange/map', [Admin_Exchange_cartridge::class, 'map']);
    Route::get('/admin/exchange/log', [Admin_Exchange_cartridge::class, 'log']);
    Route::get('/admin/exchange/log/details/{id}', [Admin_Exchange_cartridge::class, 'logdetails']);
    Route::get('/admin/order/map', [Admin_Order_controller::class, 'map']);
    Route::get('/admin/order/pending', [Admin_Order_controller::class, 'pending']);
    Route::get('/admin/order/pending/details/{id}', [Admin_Order_controller::class, 'pendingdetails']);
    Route::get('/admin/order/process', [Admin_Order_controller::class, 'process']);
    Route::get('/admin/order/process/details/{id}', [Admin_Order_controller::class, 'process_details']);
    Route::get('/admin/order/invoice/{id}', [Admin_Order_controller::class, 'invoice']);
    Route::get('/admin/order/delivery', [Admin_Order_controller::class, 'delivery']);
    Route::get('/admin/order/delivery/details/{id}', [Admin_Order_controller::class, 'deliverydetails']);
    Route::get('/admin/order/cancel', [Admin_Order_controller::class, 'cancel']);
    Route::get('/admin/order/cancel/details/{id}', [Admin_Order_controller::class, 'canceldetails']);
    Route::get('/admin/order/statuschange/{id}', [Admin_Order_controller::class, 'statuschange']);
    Route::get('/admin/shop/category', [Admin_Shop_controller::class, 'category']);
    Route::get('/admin/shop/category/view', [Admin_Shop_controller::class, 'viewcategory']);
    Route::get('/admin/shop/brand', [Admin_Shop_controller::class, 'brand']);
    Route::get('/admin/shop/brand/view', [Admin_Shop_controller::class, 'viewbrand']);
    Route::get('/admin/shop/product/view', [Admin_Shop_controller::class, 'viewproduct']);
    Route::get('/admin/shop/alldetails/{id}', [Admin_Shop_controller::class, 'viewoneproduct']);
    Route::get('/admin/shop/product', [Admin_Shop_controller::class, 'product']);
    Route::get('/admin/shop/ratingANDreviews', [Admin_Shop_controller::class, 'rating_review']);
    Route::get('/admin/shop/productRating/changestatus/{id}', [Admin_Shop_controller::class, 'change_rating_status']);
    Route::get('/admin/utility/city/view',[Admin_utilities_controller::class,'cityview']);
    Route::get('/admin/utility/state/view',[Admin_utilities_controller::class,'stateview']);
    Route::get('/admin/utility/offer/view', [Admin_utilities_controller::class, 'offerview']);
    Route::get('/admin/utility/offer/insert/form', [Admin_utilities_controller::class, 'offerinsertform']);
    Route::get('/admin/utility/offer/update/form/{id}', [Admin_utilities_controller::class, 'offerupdateform']);
    Route::get('/admin/utility/inquiry/view', [Admin_utilities_controller::class, 'inquiryview']);    
    Route::get('/admin/utility/inquiry/details/{id}', [Admin_utilities_controller::class, 'inquirydetails']);    
    Route::get('/admin/utility/inquiry/statuschange/{id}', [Admin_utilities_controller::class, 'inquirystatuschange']);    
    Route::get('/admin/utility/news', [Admin_utilities_controller::class, 'news']);
    Route::get('/admin/utility/news/details', [Admin_utilities_controller::class, 'news']);
    Route::get('/admin/utility/news/view', [Admin_utilities_controller::class, 'newsview']);
    Route::get('/admin/utility/faq', [Admin_utilities_controller::class, 'faq']);
    Route::get('/admin/utility/faq/view', [Admin_utilities_controller::class, 'faqview']);
    Route::get('/admin/utility/city',[Admin_utilities_controller::class,'city']);
    Route::get('/admin/utility/state',[Admin_utilities_controller::class,'state']);
    Route::get('/admin/employee/all_employee', [Admin_Employee_controller::class, 'all_employee']);
    Route::get('/admin/employee/detailed/view/{id}', [Admin_Employee_controller::class, 'employee_one']);
    Route::get('/admin/employee/employee_reports', [Admin_Employee_controller::class, 'employee_reports']);
    Route::get('/admin/employee/employee_ratings', [Admin_Employee_controller::class, 'emp_rating_review']);
    Route::get('/admin/employee/addnew', [Admin_Employee_controller::class, 'addnewemp']);
    Route::get('/admin/reports/requests', [Admin_reports_controller::class, 'report_requests']);
    Route::get('/admin/reports/orders', [Admin_reports_controller::class, 'report_orders']);
    Route::get('/admin/users', [Admin_users_controller::class, 'users']);
    Route::get('/admin/user/alldetails/{id}', [Admin_users_controller::class, 'oneuser']); 
    Route::get('/admin/user/changestatus/{id}', [Admin_users_controller::class, 'changestatus']);  
    // User controllers
    Route::get('/contact', [UserContactController::class, 'contact']);
    Route::get('/home', [UserHomeController:: class, 'home']);
    Route::get('/aboutus', [User_Aboutus_controller:: class, 'aboutus']);
    Route::get('/test', [testcontroller:: class, 'test']);
    Route::get('/testrequest', [testcontroller:: class, 'test_request']);

    // insert controllers and model
    Route::post('/admin/shop/category/insert', [Admin_Shop_controller::class, 'insertCategory']);
    Route::post('/admin/shop/brand/insert', [Admin_Shop_controller::class, 'insertBrand']);
    Route::post('/admin/shop/product/insert', [Admin_Shop_controller::class, 'insertProduct']);
    Route::post('/admin/shop/rating/insert', [Admin_Shop_controller::class, 'rating']);
    Route::post('/admin/utility/city/insert',[Admin_utilities_controller::class,'cityinsert']);
    Route::post('/admin/utility/state/insert',[Admin_utilities_controller::class,'stateinsert']);
    Route::post('/admin/utility/news/insert',[Admin_utilities_controller::class,'newsinsert']);
    Route::post('/admin/utility/faq/insert',[Admin_utilities_controller::class,'faqinsert']);
    Route::post('/admin/exchange/model/insert',[Admin_Exchange_cartridge::class,'modelinsert']);
    Route::post('/admin/employee/insertemp', [Admin_Employee_controller::class, 'insertemp']);
    Route::get('/admin/employee/changestatus/{id}', [Admin_Employee_controller::class, 'emp_changestatus']);
    Route::post('/admin/utility/offer/insert', [Admin_utilities_controller::class, 'offerinsert']);

    // change status routes of shop and utilities

    Route::get('/admin/shop/category/changestatus/{id}', [Admin_Shop_controller::class, 'change_status_category']);
    Route::get('/admin/shop/brand/changestatus/{id}', [Admin_Shop_controller::class, 'change_status_brand']);
    Route::get('/admin/shop/product/changestatus/{id}', [Admin_Shop_controller::class, 'change_status_product']);
    Route::get('/admin/utility/offer/changestatus/{id}', [Admin_utilities_controller::class, 'change_status_offer']);
    Route::get('/admin/utility/faq/changestatus/{id}', [Admin_utilities_controller::class, 'change_status_faq']);
    Route::get('/admin/exchange/model/changestatus/{id}', [Admin_Exchange_cartridge::class, 'change_status_model']);

    // delete routes
    Route::post('/admin/shop/category/delete', [Admin_Shop_controller::class, 'delete_Category']);
    Route::post('/admin/shop/product/delete', [Admin_Shop_controller::class, 'delete_product']);
    Route::post('/admin/shop/brand/delete', [Admin_Shop_controller::class, 'delete_brand']);
    Route::post('/admin/shop/ratring/delete', [Admin_Shop_controller::class, 'delete_rating']);
    Route::get('/admin/utility/city/status_change/{id}',[Admin_utilities_controller::class,'city_status_change']);
    Route::get('/admin/utility/state/status_change/{id}',[Admin_utilities_controller::class,'state_status_change']);
    Route::post('/admin/exchange/model/delete',[Admin_Exchange_cartridge::class,'modeldelete']);
    Route::post('/admin/utility/offer/delete',[Admin_utilities_controller::class,'offerdelete']);
    Route::post('/admin/utility/news/delete',[Admin_utilities_controller::class,'newsdelete']);
    Route::post('/admin/utility/faq/delete',[Admin_utilities_controller::class,'faqdelete']);


    // update routes
    Route::get('/admin/shop/updatebrand/{id}', [Admin_Shop_controller::class, 'updateBrand']);
    Route::get('/admin/shop/updatecategory/{id}', [Admin_Shop_controller::class, 'updateCategory']);
    Route::get('/admin/shop/updateproduct/{id}', [Admin_Shop_controller::class, 'updateProduct']);
    Route::post('/admin/shop/savebrand', [Admin_Shop_controller::class, 'savebrand']);
    Route::post('/admin/shop/savecategory', [Admin_Shop_controller::class, 'saveCategory']);
    Route::post('/admin/shop/saveproduct', [Admin_Shop_controller::class, 'saveProduct']);
    Route::get('/admin/utility/updatecity/{id}',[Admin_utilities_controller::class,'updatecity']);
    Route::post('/admin/utility/savecity',[Admin_utilities_controller::class,'savecity']);
    Route::get('/admin/utility/updatestate/{id}',[Admin_utilities_controller::class,'updatestate']);
    Route::post('/admin/utility/offer/update/{id}',[Admin_utilities_controller::class,'offerupdate']);
    Route::get('/admin/utility/faq/update/{id}',[Admin_utilities_controller::class,'faqupdateform']);
    Route::get('/admin/utility/news/update/{id}',[Admin_utilities_controller::class,'newsupdateform']);
    Route::post('/admin/utility/faq/savedata',[Admin_utilities_controller::class,'faqupdate']);
    Route::post('/admin/utility/news/savedata',[Admin_utilities_controller::class,'newsupdate']);
    Route::post('/admin/utility/savestate',[Admin_utilities_controller::class,'savestate']);
    Route::get('/admin/exchange/updatemodel/{id}',[Admin_Exchange_cartridge::class,'updatemodel']);
    Route::post('/admin/exchange/savemodel',[Admin_Exchange_cartridge::class,'savemodel']);

    //  send email pdf

    Route::get('/admin/send-email-order-pdf/{user_id}/{order_id}', [SendEmailController::class, 'index']);
    Route::get('/admin/send-email-request-pdf/{user_id}/{request_id}', [SendEmailController::class, 'index2']);
});

// admin routes over

// users routes start

Route::middleware([checkuserlogin::class])->group(function () {

    Route::get('/User/exchange',[User_exchange::class,'exchange']);
    Route::get('/User/exchange/form/{id}',[User_exchange::class,'exchange_form']);
    Route::get('/User/exchange/viewrequests',[User_exchange::class,'view_exchange']);
    Route::post('/getcity',[User_exchange::class,'getcity']);
    Route::post('/shop/getcity',[User_shop::class,'getcity_shop']);
    Route::get('/User/services/enquiry',[User_shop::class,'enquiry']);
    Route::get('/User/services/cartridge_refilling',[User_exchange::class,'cartridge_refilling']);
    Route::get('/User/contact',[User_common::class,'contact']);
    Route::get('/User/cart',[User_shop::class,'cart']);
    Route::get('/User/checkout',[User_shop::class,'checkout']);
    Route::get('/User/ordercomplete',[User_shop::class,'ordercomplete']);
    Route::get('/User/orderlist',[User_shop::class,'orderlist']);
    Route::get('/User/order/invoice/{id}',[User_shop::class,'order_invoice']);
    Route::get('/User/exchange/invoice/{id}',[User_exchange::class,'exchange_invoice']);
    Route::get('/User/profile',[User_Auth::class,'profile']);
    Route::get('/User/login/userlogout',[User_Auth::class,'userlogout']);
    Route::get('/User/exchange/deleterequests/{id}',[User_exchange::class,'deleterequests']);
    Route::get('/User/cart/delete/{id}',[User_shop::class,'deletecartproducts']);
    Route::get('/User/exchange/complete',[User_exchange::class,'exchange_complete']);
    Route::post('/User/updateprofile',[User_Auth::class,'updateprofile']);
    Route::get('/User/productlist/review/{productid}/{orderid}',[User_shop::class,'productlist_review']);
    Route::get('/User/exchange/review/{requestid}',[User_exchange::class,'exchange_review']);
    
    Route::post('/User/productlist/review2/insert',[User_shop::class,'productlist_review_insert']);
    Route::post('/User/exchange/review2/insert',[User_exchange::class,'exchange_review_insert']);
    
    
    Route::post('/User/cart/insert/{id}',[User_shop::class,'cart_insert']);
    Route::get('/User/cartupdate/{id}/{type}',[User_shop::class,'cart_update']);
    Route::get('/User/orderview/{id}',[User_shop::class,'order_view']);
    Route::get('/User/orderview2/{id}',[User_shop::class,'order_view2']);
    Route::get('/User/orderview3/{id}',[User_shop::class,'order_view3']);
    Route::get('/User/orderdelete/{id}',[User_shop::class,'order_delete']);
    Route::get('/User/orderproductdelete/{id}/{product}',[User_shop::class,'order_product_delete']);
    Route::post('/User/services/enquiry/insert',[User_shop::class,'enquiry_insert']);
    
    
    });
    
    Route::get('/User/exchange/insert',[User_exchange::class,'insert_exchange_request']);
    Route::post('/User/exchange/insert2',[User_exchange::class,'insert_exchange_request2']);
    
    Route::get('/User/home',[User_Auth::class,'home']);
    Route::get('/User/login',[User_Auth::class,'login']);
    Route::get('/User/register',[User_Auth::class,'register']);
    Route::get('/User/register/otp',[User_Auth::class,'register_otp']);
    Route::get('/User/login/otp',[User_Auth::class,'login_otp']);
    Route::get('/User/productlist/{name?}',[User_shop::class,'productlist']);
    Route::post('/User/productlist_search',[User_shop::class,'productlist_search']);
    Route::get('/User/productlist/detail/{id}',[User_shop::class,'productlist_detail']);
    
    Route::get('/User/about/aboutus',[User_common::class,'aboutus']);
    Route::get('/User/about/news',[User_common::class,'news']);
    Route::get('/User/about/news/detail',[User_common::class,'news_detail']);
    Route::get('/User/about/updates',[User_common::class,'updates']);
    
    Route::get('/User/brandlist',[User_shop::class,'brandlist']);
    Route::get('/User/categorylist',[User_shop::class,'categorylist']);
    Route::get('/User/faq',[User_common::class,'faq']);
    Route::get('/User/offer',[User_common::class,'offer']);
    
    Route::get('/User/test',[User_common::class,'test']);
    
    Route::get('/User/brandlist/search/{id}',[User_shop::class,'brandlist_search']);
    Route::get('/User/categorylist/search/{id}',[User_shop::class,'categorylist_search']);

    Route::post('/checkcoupon',[User_shop::class,'checkcoupon']);
    
    
    
    
    Route::post('/User/login/checklogin',[User_Auth::class,'checklogin']);
    Route::post('/User/register/checkregister',[User_Auth::class,'checkregister']);
    Route::post('/User/login/checkotplogin',[User_Auth::class,'checkotplogin']);
    Route::post('/User/register/checkotpregister',[User_Auth::class,'checkotpregister']);
    
    
    Route::post('/User/register/insert',[User_Auth::class,'register_insert']);
    
    Route::post('/User/register/checklogin',[User_Auth::class,'checkregister']);
    
    Route::get('/User/order/insert',[User_shop::class,'order_insert']);
    
    Route::post('/User/order/insert2',[User_shop::class,'order_insert2']);

    // user routes over

    // employee routes start

    Route::get('/', [Employe_AuthController::class, 'login']);

//employe  controller

    Route::get('/employe/login', [Employe_AuthController::class, 'login']);
    Route::get('/employe/logout',[Employe_AuthController::class,'logout']);
    Route::post('/employe/checklogin',[Employe_AuthController::class,'checklogin']);
    Route::get('/employe/changepassword',[Employe_AuthController::class,'changepassword']);
    Route::post('/employe/updatepassword',[Employe_AuthController::class,'updatepassword']);
    Route::get('/register',[Employe_AuthController::class,'register']);    

    Route::middleware([employelogin::class])->group(function()
    {
        Route::get('/employe/dashboard',[employecontroller::class,'empdashboard']);
        Route::get('/employe/myprofile',[employecontroller::class,'empmyprofile']);
        Route::get('/employe/myprofile/{id}',[employecontroller::class,'updateprofile']);
        Route::post('/employe/save/myprofile',[employecontroller::class,'saveprofile']);
        Route::get('/employe/exchangenew',[employecontroller::class,'empexchangereqNew']);
        Route::post('/employe/exchangecomplete/{reqid}',[employecontroller::class,'empexchangereqcomplete']);
        Route::get('/employe/exchangerequest/complete',[employecontroller::class,'empexchangerequestcomplete']);
        Route::get('/employe/exchangerequest/view/{id}',[employecontroller::class,'empexchangereqview']);
        Route::get('/employe/ratingreview',[employecontroller::class,'ratingreview']);
        Route::get('/employe/calender',[employecontroller::class,'calender']);
        Route::get('/employe/getnotification',[employecontroller::class,'notification']);
    });

    // employee routes over

    


