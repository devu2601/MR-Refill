<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\Product_rating;
use App\Models\order;
use DB;

class Admin_users_controller extends Controller
{
    public function users()
    {
        $data = users::all();
        return View('user.allusers', compact('data'));
    }
    public function oneuser($id)
    {
        $singledata = users::select("*")->where("user_id",$id)->first();
        return View('user.single_user_details', compact('singledata'));
    }
    public function changestatus(Request $request,$id)
    {
        // $order_data = order::select("*")->where("tbl_product_rating","tbl_product_rating.order_id","=","tbl_order.order_id")->where("user_id",$id)->get();
        // dd($order_data);
        $data = users::select("*")->where("user_id",$id)->first();
        $obj = users::select("*")->where("user_id",$id)->first();
        if($data->user_status == "Active")
        {
            $obj->user_status = "Block";
            
            // DB::select("select * from  tbl_product_rating,tbl_order,tbl_user where tbl_order.order_id = tbl_product_rating.order_id and tbl_user.user_id = tbl_order.user_id set tbl_product_rating.rating_display = 'no' where tbl_user.user_id = $id ");

            // DB::select("update tbl_product_rating set rating_display = no where order_id in(select order_id from  tbl_product_rating,tbl_order,tbl_user where tbl_order.order_id = tbl_product_rating.order_id and tbl_user.user_id = tbl_order.user_id)");
            
           

        }
        else
        {
            $obj->user_status = "Active";
        }
        $obj->save();
        return redirect("/admin/users");
    }
}
