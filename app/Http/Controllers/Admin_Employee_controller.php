<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\employee;


class Admin_Employee_controller extends Controller
{
    public function all_employee()
    {
        $emp_data=employee::all();
        return View('admin.employee.all_employee', compact('emp_data'));
    }
    public function employee_reports()
    {
        return View('admin.employee.employee_reports');
    }
    public function emp_rating_review()
    {
        return View('admin.employee.employee_ratings');
    }
    public function employee_one($id)
    {
        $singleemployee=employee::select("*")->where("employee_id",$id)->first();
        return View('admin.employee.one_employee_view', compact("singleemployee"));
    }
    public function addnewemp()
    {
        return View('admin.employee.add_employee');
    }

    // insert function

    public function insertemp(Request $request)
    {
        $emp_data = employee::select("*")->where("employee_email",$request->txtemail)->get();
        if(count($emp_data)<=0)
        {
            $image = $request->txtimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/employee/'),$newname);
            
            $employeeobj = new employee();
            $employeeobj->employee_name = $request->txtempname;
            $employeeobj->employee_contact = $request->txtcontact;
            $employeeobj->employee_email = $request->txtemail;
            $employeeobj->employee_password = $request->txtpassword;
            $employeeobj->employee_profile = $newname;
            if($employeeobj->employee_active = $request->active=="yes")
            {
                $employeeobj->employee_active = "Active";
            }
            else
            {
                $employeeobj->employee_active = "In Active";
            }
            $employeeobj->save();
            // echo "hello";
            $password = $request->txtpassword;
            $user_name = $request->txtemail;
            $details = [
                "Password"=>$password,
                "User_name"=>$user_name,
                "message1"=>"User name:",
                "message2"=>"Password:",

            ];
            $email=$request->txtemail;
            \Mail::to($email)->send(new \App\Mail\NotifyMail($details));
            return redirect('/admin/employee/addnew')->with("status","Record inserted successfully");
        }
        else
        {
            return redirect('/admin/employee/addnew')->with("status","Record already Exist !!");
        }
        
        
    }
    public function emp_changestatus($id)
    {
        $data = employee::select("*")->where("employee_id",$id)->get();
        // dd($data[0]->employee_active);
        $status=$data[0]->employee_active;
        // dd($status);
        if($status=="In Active")
        {
            $obj = employee::where("employee_id",$id)->first();
            $obj->employee_active = "Active";
            $obj->save();
        }
        else
        {
            $obj = employee::where("employee_id",$id)->first();
            $obj->employee_active = "In Active";
            $obj->save();
        }
        return redirect("/admin/employee/all_employee");
    }

    // delete function

}
