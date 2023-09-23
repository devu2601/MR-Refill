<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class Admin_reports_controller extends Controller
{
    public function report_requests()
    {
        $data=array();
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
        //print_r($data);
        return View('admin.reports.requests',compact('data'));
    }
    public function report_orders()
    {
        $data=array();
        $start = $month = strtotime('2021-09-01');
        $current=date('Y-m-d');
        $end = strtotime($current);
        while($month < $end)
        {
            $count=0;
            $mn = date('Ym',$month);
            $result = DB::select("select * from tbl_order where DATE_FORMAT(created_at,'%Y%m')='$mn'");
            $count=count($result);
            array_push($data,array("month"=>date('F Y', $month),"totalcount"=>$count)); // F = month name
            $month = strtotime("+1 month", $month);  
        }
        //print_r($data);
        return View('admin.reports.orders',compact('data'));
    }
}
