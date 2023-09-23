<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use Session;


class Employe_AuthController extends Controller
{
    public function login()
    {
        return View('employee.auth.Login');
    }
    public function changepassword()
    {
        return View('employee.auth.Change_Password');  
    }
    public function updatepassword(Request $request)
    {
       $oldpassword = $request->txtoldpassword;
       $newpassword = $request->txtnewpassword;
       $id=Session::get("employee_id");
       $results = employee::select("*")->where("employee_id",$id)->where("employee_password",$oldpassword)->get();
       if(count($results)<=0)
       {
            return redirect("/changepassword")->with("message","Old Password does not match");
       }
       else
       {
                $loginobj = employee::where("employee_id",$id)->first();
                $loginobj->employee_password = $newpassword;
                $loginobj->save();
                return redirect("/employe/changepassword")->with("success","Password Updated Successfully");
       }
    }
    public function register()
    {
        return View('employee.auth.Register');
    }
    public function checklogin(Request $request)
    {
        $username = $request->txtusername;
        $password = $request->txtpassword;

        $result = employee::select("*")->where("employee_email",$username)->where("employee_password",$password)->where("employee_active","Active")->get();
        if(count($result)<=0) 
        {
            return redirect("/employe/login")->with("message","Username and password not match OR You have been blocked by 
            Admin");
        }
        else
        {
            Session::put('islogin',"yes");
            foreach($result as $row)
            {
                Session::put('employee_id',$row->employee_id);
                Session::put('employee_email',$row->employee_email);   
                Session::put('employee_name',$row->employee_name); 
                Session::put('employee_profile',$row->employee_profile); 
            }
            
            return redirect("/employe/dashboard");
        }
    }
   
    public function logout()
    {
        Session::flush();
        return redirect("/employe/login");
    }
}
    



