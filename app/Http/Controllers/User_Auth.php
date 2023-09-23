<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\User_register;
use Session;
use DB;



class User_Auth extends Controller
{
    //
    public function home(){
        $product_data2 = DB::select("select * from tbl_products,tbl_brand,tbl_category where tbl_category.cat_id = tbl_products.cat_id and tbl_brand.brand_id = tbl_products.brand_id and product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 5");
        return view('User.User_home',compact('product_data2'));
    }

    public function login(){
        return view ('User.User_login');
    }

    public function login_otp(){
        return view ('User.User_login_otp');
    }
    public function userlogout()
    {
        Session::forget('isuserlogin');
        Session::forget('userotp');
        Session::forget('userid');
        Session::forget('username');
        Session::forget('product_id');
        return redirect("/User/home");
    }
    
    public function checkotplogin(Request $request)
    {
        $otp = $request->txtotp;
        $result = User_register::select("*")->where("user_id",Session::get("userid"))->where("user_otp",$otp)->get();
       
        if(count($result)<=0)
        {
            if(Session::has("counter"))
            {
               
                if(Session::get("counter")>2)
                {
                    //NEW OTP
                    $useremail = Session::get("usermail");
                    $otp = rand(1111,9999);
                    $data = [
                        'text'=> "Your Login OTP  is ",
                        'otp' => $otp,
                    ];      
                    \Mail::to($useremail)->send(new \App\Mail\MyLoginOTP($data));

                    $obj = User_register::where("user_email",$useremail)->first();
                    $obj->user_otp= $otp;
                    $obj->save();
                    Session::forget("counter");

                    return redirect("/User/login/otp")->with("message","WRONG OTP !! NEW OTP Sent");
                    //NEW OTP
                }
                else
                {
                    $s =Session::get("counter");
                    $s=$s+1;
                    Session::put("counter",$s);
                }
            }
            else
            {
                Session::put("counter",1);
            }
            return redirect("/User/login/otp")->with("message","OTP not match. ".(4-Session::get("counter"))." Attemp Left");
        }
        else
        {
            Session::put("isuserlogin","yes");
            Session::forget("counter");
            if(Session::get("product_id")!=0)
            {
                $product_id = Session::get("product_id");
                return redirect("/User/productlist/detail/$product_id");
            }
            else
            {
                return redirect("/User/home");
            }
            
        }
    }
    public function checklogin(Request $request){

        $useremail = $request->txtemail;
        Session::put("usermail",$useremail);
      

        $result = User_register::select("*")->where("user_email",$useremail)->where("user_status","Active")->get();



        if(count($result)<=0)
        {
            
            return redirect("/User/login")->with("message","Email not found or you have been BLOCKED, contact us");
        }
        else
        {
            $otp = rand(1111,9999);
                    $data = [
                        'text'=> "Your Login OTP  is ",
                        'otp' => $otp,
                    ];      
            \Mail::to($useremail)->send(new \App\Mail\MyLoginOTP($data));
            //mail
            //fcojhqytwbjkncwg
            //mrrefilll3@gmail.com
            //mail

            $obj = User_register::where("user_email",$useremail)->first();
            $obj->user_otp= $otp;
            $obj->save();
            Session::put("userotp",$otp);
            foreach($result as $row)
            {
                Session::put("userid",$row->user_id);
                Session::put("username",$row->user_name);
            }
            return redirect("/User/login/otp");
        }



    }

    public function register(){
        return view ('User.User_register');
    }

   

    public function register_otp(){
        return view ('User.User_register_otp');
    }

    

    public function checkotpregister(Request $request)
    {
        $otp = $request->txtotp;
        $result = User_register::select("*")->where("user_id",Session::get("userid"))->where("user_otp",$otp)->get();
       
        if(count($result)<=0)
        {
            if(Session::has("counter"))
            {
                if(Session::get("counter")>2)
                {
                    //NEW OTP
                    $otp = rand(1111,9999);
                    $data = [
                        'text'=> "Your Reigster OTP  is ",
                        'otp' => $otp,
                    ];
                    \Mail::to($useremail)->send(new \App\Mail\MyLoginOTP($data));

                    $obj = User_register::where("user_email",$useremail)->first();
                    $obj->user_otp= $otp;
                    $obj->save();

                    Session()->forget('counter');

                    return redirect("/User/register/otp")->with("message","NEW OTP Sent");
                    //NEW OTP
                }
                else
                {
                    Session::put(Session::get("counter")+1);
                }
            }
            else
            {
                Session::put("counter",1);
            }
            return redirect("/User/register/otp")->with("message","OTP not match.".(4-Session::get("counter"))." Attemp Left");
        }
        else
        {
            Session::put("isuserlogin","yes");
            Session::forget("counter");
            return redirect("/User/home");
        }
    }
    
    public function checkregister(Request $request)
    {
        $user_data = User_register::all();
        $counter = 0;
        foreach($user_data as $row)
        {
            if($row->user_email == $request->regemail)
            {
                $counter = 1;
            }
        }
        if($counter == 1)
        {
            return redirect("/User/register")->with("message","Email id already exist");
        }
        else
        {
            $image = $request->regimage;
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/users/'),$newname);
            //abc.jpg


            $obj = new User_register();
            $obj->user_name = $request->regname ;
            $obj->user_contact =  $request->regphno ;
            $obj->user_status =  "Active";
            $obj->user_email =  $request->regemail ;
            // $obj->user_otp =  $request->regotp ;
            $obj->user_otp =  rand(1111,9999); ;
            $obj->user_profile = $newname;
            $obj->user_registretion_date_time = "2022-01-03 15:46:01";
            $obj->save();
            

                $useremail = $request->regemail;

            $result = User_register::select("*")->where("user_email",$useremail)->get();


                $otp = rand(1111,9999);
                $data = [
                    'text'=> "Your Reigster OTP  is ",
                    'otp' => $otp,
                ];
                \Mail::to($useremail)->send(new \App\Mail\MyLoginOTP($data));
                //mail
                //fcojhqytwbjkncwg
                //mrrefilll3@gmail.com
                //mail

                $obj = User_register::where("user_email",$useremail)->first();
                $obj->user_otp= $otp;
                $obj->save();
                Session::put("userotp",$otp);
                foreach($result as $row)
                {
                    Session::put("userid",$row->user_id);
                    Session::put("username",$row->user_name);
                }
            return redirect("/User/login/otp");
        }
        
        

    }

   

    public function profile(){
        $userid=Session::get("userid");
        $user_data=User_register::select("*")->where("user_id",$userid)->get();
        return view('User.User_profile',compact('user_data'));
    }

    public function updateprofile(Request $request){
        $userid=Session::get("userid");
        $user_data=User_register::select("*")->where("user_id",$userid)->get();
        $oldimage = $request->oldimage;
        // dd($oldimage);

        if($request->hasfile("profilepic"))
        {
            unlink(public_path()."/uploads/users/".$oldimage);
            $image = $request->profilepic;   
            $ext = $image->extension();//jpg
            $newname = time()."_".rand(1111,9999).".".$ext;//46541516_4587.jpg
            $image->move(public_path('uploads/users/'),$newname);
        }
        else
        {
            $newname = $oldimage;
        }
        

        //
        User_register::select("user_name","user_contact","user_email","user_profile")->where("user_id",$userid)->update(['user_name' => $request->Name ,'user_contact' => $request->contact ,'user_email' => $request->email, 'user_profile' => $newname]);
        //

        Session::put("username",$request->Name);

        return redirect("/User/profile");
    }
    

    
}