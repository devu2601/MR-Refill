<?php

namespace App\Http\Controllers;
use App\Models\AdminLogin;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return View('admin.auth.login');
    }
    public function forgotpassword()
    {
        return View('admin.auth.forgotpassword');
    }
    public function changepassword()
    {
        return view('admin.auth.Change_Password');
    }
    public function checkpassword(Request $request)
    {
        $oldpassword = $request->txtoldpassword;
        $newpassword = $request->txtnewpassword;
        $confirmpassword = $request->txtconfirmpassword;
        $result = AdminLogin::select("*")->where("password",$oldpassword)->get();
        // echo $result;
        if(count($result)<=0)
        {
            return redirect("/changepassword")->with("message","Old password does not match");
        }
        else
        {
            if(strcmp($newpassword,$confirmpassword)==0)
            {
                $login_obj = AdminLogin::where("password",$oldpassword)->first();
                $login_obj->password = $request->txtnewpassword;
                $login_obj->save();
                return redirect("/admin/changepassword")->with("success","Password updated successfully");
            }
            else
            {
                return redirect("/admin/changepassword")->with("message","New password and confirm password does not match");
            }
            
        }
    }
    public function checklogin(Request $request)
    {
        $username = $request->txtusername;
        $password = $request->txtpassword;
        
        $result = AdminLogin::select("*")->where("username",$username)->where("password",$password)->get();
        
        if(count($result)<=0)
        {
            return redirect("/admin/login")->with("message","Username or password not match");
        }
        else
        {
            Session::put('islogin', "yes");
            foreach($result as $row)
            {
                Session::put('adminid', $row->login_id);
                Session::put('name', $row->name);
                Session::put('email', $row->email);
                Session::put('profile', $row->photo);
            }
            return redirect("/admin/dashboard");
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect("/admin/login");
    }
}
