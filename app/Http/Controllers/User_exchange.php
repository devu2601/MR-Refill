<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Models;
use App\Models\User_register;
use App\Models\exchange;
use App\Models\notification;
use App\Models\cart;
use App\Models\log;
use App\Models\city;
use App\Models\Location;
use App\Models\state;
use App\Models\RatingReview;
use DB;

class User_exchange extends Controller
{
    //
    public function exchange(){
        $model_list=models::all();
        return view('User.User_exchange',compact('model_list'));
    }
    public function getcity(Request $request)
    {
        $sid =  $request->stateid;
        $result = city::select("*")->where("state_id",$sid)->where("city_status","Active")->orderBy('city_name', 'ASC')->get();
        $op="";
        $op.="<option value=''>Please Select City</option>";
        foreach($result as $row)
        {
            $op.="<option value='".$row->city_id.",".$row->lattitude.",".$row->longtitude."'>".$row->city_name."</option>";
        }
        echo $op;
    }

    public function exchange_form($id)
    {
    
    // $username=Session::put("username");
        if(Session::has("userid"))
        {
    
        $model_data=models::select("*")->where("model_id",$id)->first();
        Session::put("model_id",$model_data->model_id);
        Session::put("model_price",$model_data->model_price);
        $userid=Session::get("userid");
        // dd($userid);
        // dd(Session::get("userid"));
        $user_data=User_register::select("*")->where("user_id",$userid)->first();
        // dd($user_data);
        $statedata = state::select("*")->where("state_status","Active")->get();
        return view('User.User_exchange_form',compact('model_data','user_data','statedata'));
        }
        else
        {
            return view('User.User_login');
        }
    }

    public function cartridge_refilling(){
        return view('User.User_services_cartridge_refilling');
    }

    public function insert_exchange_request(Request $request)
    {
    //    dd("adsfdsf");
        $userid=Session::get("userid");
        $model_id=Session::get("model_id");
        $model_price=Session::get("model_price");
        //$modelid=$model_id;
      
        $obj=new exchange();
        $obj->user_id= $userid;
        $obj->model_id= $model_id;
        $obj->city_id= $request->txtcity;
        $obj->exchange_date= date('Y-m-d ');
        $obj->exchange_time=  date('Y-m-d H:i:s');
        $obj->exchange_address= $request->txtadd;
        $obj->exchange_landmark=  $request->txtlandmark;
        $obj->exchange_pincode=  $request->txtpincode;
        $obj->exchange_latitude=  $request->txtlat;
        $obj->exchange_longititute= $request->txtlng;
        $obj->exchange_status= "pending";
        $obj->request_date_time=  date('Y-m-d H:i:s');
        
        $obj->payment_type=  $request->payment_method;
        $obj->payment_amount= $model_price;
        $obj->exchange_transaction_number=$request->trid;
     
        $obj->save();

        $reqdata = exchange::latest()->first();

        $objnoti = new notification();
        $objnoti->user_id = $userid;
        $objnoti->id = $reqdata->request_id;
        $objnoti->notification_type = "new_request";
        $objnoti->remark = "New request arrives";
        $objnoti->save();

        $objlog = new log();
        $objlog->request_id = $reqdata->request_id;
        $objlog->log_status =  "pending";
        $objlog->save();


        
        return redirect('/User/exchange/complete');


       
    }

    public function insert_exchange_request2(Request $request)
    {
    //    dd("adsfdsf");
        $userid=Session::get("userid");
        $model_id=Session::get("model_id");
        $model_price=Session::get("model_price");
        //$modelid=$model_id;
      
        $obj=new exchange();
        $obj->user_id= $userid;
        $obj->model_id= $model_id;
        $obj->city_id= $request->txtcityid;
        $obj->exchange_date= date('Y-m-d ');
        $obj->exchange_time=  date('Y-m-d H:i:s');
        $obj->exchange_address= $request->txtadd;
        $obj->exchange_landmark=  $request->txtlandmark;
        $obj->exchange_pincode=  $request->txtpincode;
        $obj->exchange_latitude=  $request->txtlat;
        $obj->exchange_longititute= $request->txtlng;
        $obj->exchange_status= "pending";
        $obj->request_date_time=  date('Y-m-d H:i:s');
        $obj->payment_type=  $request->payment_method;
        $obj->payment_amount= $model_price;
        $obj->save();

        $reqdata = exchange::latest()->first();

        $objnoti = new notification();
        $objnoti->user_id = $userid;
        $objnoti->id = $reqdata->request_id;
        $objnoti->notification_type = "new_request";
        $objnoti->remark = "New request arrives";
        $objnoti->save();

        $objlog = new log();
        $objlog->request_id = $reqdata->request_id;
        $objlog->log_status =  "pending";
        $objlog->save();
        
        return redirect('/User/exchange/complete');


       
    }

    public function exchange_complete(){

        return view('User.User_exchangecomplete');
    }

    

    public function view_exchange(){

        $userid=Session::get("userid");
        $pending=exchange::select("*")->where("user_id",$userid)->where("exchange_status","pending")->get();
        $assign=exchange::select("*")->where("user_id",$userid)->where("exchange_status","assigned")->get();
       // $complete=exchange::select("*")->where("user_id",$userid)->where("exchange_status","Admin complete")->get();
       $complete=DB::select("select *,(select count(*) from tbl_emp_rating where request_id=tbl_exchange_cartridge.request_id) as totalrecord from tbl_exchange_cartridge where user_id='$userid' and exchange_status='Admin complete'");
        $cancel=exchange::select("*")->where("user_id",$userid)->where("exchange_status","canceled")->get();
        
       

        return view('User.User_exchange_requests',compact('pending','assign','complete','cancel'));
    }

    public function deleterequests(Request $request,$id){

        exchange::where('request_id', $id)->update(['exchange_status' => "canceled"]);
        log::where('request_id', $id)->update(['log_status' => "canceled"]);
        $obj = new notification();
        $obj->user_id = Session::get("userid");
        $obj->id = $id;
        $obj->notification_type = "cancel_request";
        $obj->remark = "Request canceled by user";
        $obj->save();
        return redirect("/User/exchange/viewrequests");
    }
    public function exchange_invoice($req_id)
    {
        $invoice = exchange::select("*")->where("request_id",$req_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        

        return View("user.User_exchange_invoice",compact("invoice"));
    }

    public function exchange_review($requestid)
    {
        $requestid1 = $requestid;

        $emp_data= log::select("*")->where("request_id",$requestid)->first();



        return View("user.User_exchange_review",compact("emp_data","requestid1"));
    }

    public function exchange_review_insert(Request $request)
    {

        $obj = new RatingReview();

       $obj->request_id=$request->requestid;
       $obj->employee_id=$request->empid;
        $obj->emp_rating=$request->rating;
        $obj->emp_review=$request->review;
       
        $obj->save();
        

        return redirect("/User/home");
    }
    
}