<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exchange;
use App\Models\Models; 
use App\Models\employee;
use App\Models\users;
use App\Models\log;

class Admin_Exchange_cartridge extends Controller
{
    public function pending()
    {
        $pending_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","pending")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return View('admin.exchange.pending', compact("pending_data"));
    }
    public function approved()
    {
        $approved_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","approved")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return View('admin.exchange.approved', compact("approved_data"));
    }
    public function assign()
    {
        $assign_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","assigned")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return View('admin.exchange.assign', compact("assign_data"));
    }
    public function complete()
    {
        $complete_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","complete")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return View('admin.exchange.complete', compact("complete_data"));
    }
    public function cancel()
    {
        $cancel_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","canceled")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return view('admin.exchange.cancel', compact("cancel_data"));
    }
    public function map()
    {
        $data = exchange::all();
        return view("admin.exchange.exchange_map",compact("data"));
    }
    public function admin_complete()
    {
        $admin_complete_data = exchange::orderBy('request_date_time','DESC')->select("*")->where("exchange_status","Admin complete")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return View('admin.exchange.admin_complete', compact("admin_complete_data"));
    }
    public function status_change_admin_complete(Request $request,$req_id)
    {
        $obj = exchange::select("*")->where("request_id",$req_id)->first();
        $obj->exchange_status = "Admin complete";
        $obj->save();
        return redirect("/admin/exchange/admin_complete");
    }
    public function model()
    {
        return View('admin.exchange.model');
    } 
    public function log()
    {
        $data  = log::all();
        return View("admin.exchange.log",compact("data"));
    }
    public function logdetails($id)
    {
        $data = log::select("*")->where("log_id",$id)->leftjoin("tbl_employee","tbl_employee.employee_id","=","tbl_log.employee_id")->get();
        return View("admin.exchange.log_details",compact("data"));
    }
    public function viewmodel()
    {
        $model_data = Models::all();
        return View('admin.exchange.model_view', compact("model_data"));
    }
    public function pendingdetails($id)
    {
        $pending_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        // dd($pending_data);
        $employee_data = employee::select("*")->where("employee_active","Active")->get();

        return View("admin.exchange.pending_details", compact("pending_data","employee_data"));
    }
    
    public function approveddetails($id)
    {
        $approved_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $employee_data = employee::select("*")->where("employee_active","Active")->get();

        return View("admin.exchange.approved_details", compact("approved_data","employee_data"));
    }
    public function assigneddetails($id)
    {
        $assigned_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $log_data = log::select("*")->where("request_id",$id)->leftjoin("tbl_employee","tbl_employee.employee_id","=","tbl_log.employee_id")->get();
        

        return View("admin.exchange.assign_details", compact("assigned_data","log_data"));
    }
    public function canceldetails($id)
    {
        $canceled_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $employee_data = log::select("*")->where("request_id",$id)->leftjoin("tbl_employee","tbl_employee.employee_id","=","tbl_log.employee_id")->get();
        // dd($employee_data);
        return View("admin.exchange.cancel_details", compact("canceled_data","employee_data"));
    }
    public function admin_completedetails($id)
    {
        $admin_complete_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $employee_data = employee::select("*")->where("employee_active","Active")->get();

        return View("admin.exchange.admin_complete_details", compact("admin_complete_data","employee_data"));
    }
    public function completedetails($id)
    {
        $complete_data = exchange::select("*")->where("request_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $employee_data = employee::select("*")->where("employee_active","Active")->get();

        return View("admin.exchange.complete_details", compact("complete_data","employee_data"));
    }
    public function canclerequest($id)
    {
        exchange::where("request_id",$id)->delete();
        return redirect("/admin/exchange/pending");
    }
    public function status_change_assign(Request $request,$req_id)
    {
        $emp_id = $request->emp_assign;
        $obj = exchange::where("request_id",$req_id)->first();
        $obj->exchange_status = "assigned";
        $obj->save();
        
        $objlog =log::where("request_id",$req_id)->first();
        $objlog->employee_id = $emp_id;
        $objlog->log_status = "assigned";
        $objlog->save();
        return redirect("/admin/exchange/assign");       
    }
    public function status_change_approved($req_id,Request $request)
    {
        $obj = exchange::where("request_id",$req_id)->first();
        $obj->exchange_status = "approved";
        $obj->save();
        
        $objlog = log::where("request_id",$req_id)->first();
        $objlog->request_id = $req_id;
        // $objlog->employee_id = ;
        $objlog->log_status = "approved";
        $objlog->save();
        return redirect("admin/exchange/approved");
    }
    public function modelinsert(Request $request)
    {
        $result = Models::select("*")->where("model_name",strtolower($request->txtmodelname))->get();
        if(count($result)<=0)
        {
            $image = $request->txtmodelimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/models/'),$newname);
            //abc.jpg
    
    
            $obj = new Models();
            $obj->model_name = $request->txtmodelname;
            $obj->model_img_url = $newname;
            $obj->model_price = $request->txtprice;
            if($request->model_status == "Active")
            {
                $obj->model_status="Active";
                
            }
            else
            {
                $obj->model_status="Block";
            }
            $obj->save();
    
            return redirect('/admin/exchange/model')->with("status","Record Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/exchange/model')->with("status","Model Already Exist!"); 
        }
    }
    public function change_status_model($id)
    {
        $data = Models::select("*")->where("model_id",$id)->first();
        $obj = Models::select("*")->where("model_id",$id)->first();
        if($data->model_status == "Active")
        {
            $obj->model_status="Block";
            
        }
        else
        {
            $obj->model_status="Active";
        }
        $obj->save();
        return redirect("/admin/exchange/model/view"); 
    }
    public function modeldelete(Request $request)
    {
        $id =$request->deleteid;
        $image =$request->deleteimg;
        unlink(public_path()."/uploads/models/".$image);
        Models::where('model_id',$id)->delete();
        return redirect('/admin/exchange/model/view')->with("status","delete sucess"); 
    }
    public function updatemodel($id)
    {
        $singlerow = Models::where("model_id",$id)->get();
        return View("admin.exchange.updatemodel", compact("singlerow"));
    }
    public function savemodel(Request $request)
    {
        $id =  $request->txtmodelid;
        $oldimage = $request->txtoldimage;

        if($request->hasFile("txtmodelimage"))
        {
            unlink(public_path()."/uploads/models/".$oldimage);
            $image = $request->txtmodelimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('/uploads/models/'),$newname);
        }
        else
        {
            $newname=$oldimage;
        }
        
        $modelobj = Models::where("model_id",$id)->first();
        $modelobj->model_name = $request->txtmodelname;
        $modelobj->model_price = $request->txtmodelprice;
        $modelobj->model_img_url = $newname;
        $modelobj->save();
        

        return redirect('/admin/exchange/model/view')->with("status","Record Updated successfully");
    }
    public function invoice($req_id)
    {
        $invoice = exchange::select("*")->where("request_id",$req_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $data = log::select("*")->where("request_id",$req_id)->where("log_status","complete")->get();
        

        return View("admin.exchange.invoice",compact("invoice","data"));
    }
    public function cancelrequest(Request $request,$id)
    {
        $req_id = $id;
        // dd($req_id);
        $obj = exchange::where("request_id",$req_id)->first();
        $obj->exchange_status = "canceled";
        $obj->save();
        
        $objlog = log::where("request_id",$req_id)->first();
        $objlog->request_id = $req_id;
        // $objlog->employee_id = ;
        $objlog->log_status = "canceled";
        $objlog->save();
        return redirect("/admin/exchange/cancel");
    }
}


