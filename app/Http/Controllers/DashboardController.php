<?php

namespace App\Http\Controllers;
use App\Models\exchange;
use App\Models\order;
use App\Models\users;
use App\Models\inquiry;
use App\Models\AdminLogin;
use App\Models\notification;
use App\Models\product;
use App\Models\Brand;
use App\Models\Models;
use App\Models\employee;
use DB;
use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function dashboard()
    {
      $exreq = count(exchange::all());
      $order = count(order::all());
      $users = count(users::all());
      $product = count(product::all());
      $brand = count(Brand::all());
      $model = count(Models::all());
      $employee = count(employee::all());
      $exdata = exchange::orderBy('request_date_time','DESC')->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->limit(10)->get();
      $orderdata = order::orderBy('order_date_time','DESC')->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->limit(10)->get();
      $data=array();  // for exchange data
      $data2=array();  // for order data
      // exchange data start
      $start = $month = strtotime('2021-09-01');
      $current=date('Y-m-d');
      $end = strtotime($current);
      while($month < $end)
      {
          $count=0;
          $mn = date('Ym',$month);
          $result = DB::select("select * from tbl_exchange_cartridge where DATE_FORMAT(created_at,'%Y%m')='$mn'");
          $count=count($result);
          array_push($data,array("month"=>date('F Y', $month),"totalcount"=>$count)); // F = month name
          $month = strtotime("+1 month", $month);  
      }
      // exchange data end
      // order data start
      $data2=array();
      $start2 = $month2 = strtotime('2021-09-01');
      $current2=date('Y-m-d');
      $end2 = strtotime($current2);
      while($month2 < $end2)
      {
        $count=0;
        $mn = date('Ym',$month2);
        $result = DB::select("select * from tbl_order where DATE_FORMAT(created_at,'%Y%m')='$mn'");
        $count=count($result);
        array_push($data2,array("month"=>date('F Y', $month2),"totalcount"=>$count)); // F = month name
        $month2 = strtotime("+1 month", $month2);  
      }
      // order data end
      return View('admin.dashboard.dashboard',compact('exreq', 'product', 'brand', 'model', 'exdata', 'order', 'orderdata', 'data','data2', 'users', 'employee'));
    }
    public function myprofile()
    {
        $data = AdminLogin::select("*")->where("login_id",Session::get('adminid'))->get();
        return view("admin.auth.my_profile",compact('data'));
    }
    public function calendar()
    {
        $exreq = exchange::all();
        return View("admin.dashboard.calendar",compact('exreq'));
    }
    public function notification()
    {
        $data = notification::select("*")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_notification.user_id")->orderBy('notification_id', 'DESC')->get();
        echo json_encode($data);
    }
}
