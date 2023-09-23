<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exchange;
use App\Models\log;
use App\Models\notification;
use App\Models\tbl_user;
use App\Models\employee;
use App\Models\RatingReview;
use Session;
use DB;

class employecontroller extends Controller
{
    public function empdashboard()
    {
      $exreq = count(exchange::all());
      $expen = count(exchange::select("*")->where("exchange_status","pending")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get());
      $excom = count(exchange::select("*")->where("exchange_status","complete")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get());
      //$order = count(order::all());
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
      return view('employee.employe.Dashboard',compact('exreq','data','expen','excom'));
    }
    public function empmyprofile()
    {
        $id=Session::get("employee_id");
        $data = employee::where("employee_id",$id)->first();
        return view('employee.employe.MyProfile',compact('data'));
    }
    public function updateprofile($id)
    {
        $data = employee::where("employee_id",$id)->get();
        
        return view("employee.employe.MyProfile",compact('data'));
    }
    public function saveprofile(Request $request)
    {
        $id = $request->txtemployeid;
        $oldimage= $request->txtimage1;
        if ($request->hasfile("txtimage")) 
        {
            unlink(public_path()."/uploads/employee/".$oldimage);
            $image = $request->txtimage;
            $ext = $image->extension();
            $newname = time()."_".rand(1111,9999).".".$ext;
            $image->move(public_path("uploads/employee/"),$newname);
        }
        else
        {
            $newname = $oldimage;
        }
        $profile = employee::where("employee_id",Session::get("employee_id"))->first();
        $profile->employee_name = $request->txtname;
        $profile->employee_contact = $request->txtcontactno;
        $profile->employee_email = $request->txtemail;
        // $profile->employee_password = $request->txtpassword;
        $profile->employee_profile = $newname;
        if ($profile->employee_active = $request->active=="Active") 
        {
            $profile->employee_active = "Active";
        }
        else
        {
            $profile->employee_active = "In Active";
        }
        $profile->save();

        return redirect("/employe/myprofile")->with("status","Profile Updated Successfully!");

    }
    public function empexchangereqNew()
    {
        $id=Session::get("employee_id");
        $request_data = exchange::select("*")->where("employee_id",$id)->where("exchange_status","assigned")->leftjoin("tbl_log","tbl_log.request_id","=","tbl_exchange_cartridge.request_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->get();
        return view('employee.employe.ExchangeRequest_New',compact("request_data"));
    }
    public function empexchangerequestcomplete()
    {
        $id=Session::get("employee_id");
        $request_data = exchange::select("*")->where("employee_id",$id)->where("exchange_status","complete")->leftjoin("tbl_log","tbl_log.request_id","=","tbl_exchange_cartridge.request_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->get();
        return view('employee.employe.ExchangeRequest_Complete',compact("request_data"));
    }
    public function empexchangereqcomplete(Request $request,$reqid)
    {
        $request_data = exchange::select("*")->where("request_id",$reqid)->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        // echo $reqid;

        $objlog = log::where("request_id",$reqid)->first();
        $objlog->log_status = "complete";
        $objlog->log_description = $request->txtdescription;
        $objlog->save();
        $objreq = exchange::where("request_id",$reqid)->first();
        $objreq->exchange_status = "complete";
        if(!empty($request->amount))
        {
            $objreq->exchange_extra_cost = $request->amount;
            $objreq->extra_cost_type = $request->txtpaymenttype;
        }
        $objreq->save();
        $userdata = log::where("request_id",$reqid)->first();
        $objnoti = new notification();
        $objnoti->user_id = $userdata->user_id;
        $objnoti->id = $reqid;
        $objnoti->notification_type = "complete request";
        $objnoti->remark = "One request complete by employee";
        $objnoti->save();
        return view('employee.employe.ExchangeRequest_Complete',compact("request_data"));
    }
    public function empexchangereqview($id)
    {
        $singlerequest = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->first();
        return view('employee.employe.ExchangeRequest_View',compact("singlerequest"));
    }

    // public function ratingreview()
    // {
    //     $data = RatingReview::select("*")->where("tbl_emp_rating.employee_id",Session::get("employee_id"))->leftjoin("tbl_exchange_cartridge","tbl_exchange_cartridge.request_id","=","tbl_emp_rating.request_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_employee","tbl_employee.employee_id","=","tbl_emp_rating.employee_id")->get();
    //     return view('employee.employe.Rating&Review',compact("data"));
    // } 
    public function ratingreview()
    {
        $data = RatingReview::select("*")->leftjoin("tbl_exchange_cartridge","tbl_exchange_cartridge.request_id","=","tbl_emp_rating.request_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_employee","tbl_employee.employee_id","=","tbl_emp_rating.employee_id")->get();
        return view('employee.employe.Rating&Review',compact("data"));
    }
    public function calender()
    {
        $exreq = exchange::select("*")->where("exchange_status","pending")->get();
        return view('employee.employe.Calender',compact('exreq'));
    }
    public function notification()
    {
        $data = log::orderBy("log_id","DESC")->select("*")->where("employee_id",Session::get('employee_id'))->leftjoin("tbl_exchange_cartridge","tbl_exchange_cartridge.request_id","=","tbl_log.request_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->get();

        // dd($data);

        echo json_encode($data);
    } 
}


