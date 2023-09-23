<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\item;
use App\Models\product;
use App\Models\offers;
use App\Models\users;


class Admin_Order_controller extends Controller
{
    // display functions

    public function pending()
    {
        $pending_data = order::orderBy('order_date_time','DESC')->select("*")->where("order_status","pending")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        return View('admin.order.pending', compact("pending_data"));
    }
    public function process()
    {
        $process_data = order::orderBy('order_date_time','DESC')->select("*")->where("order_status","Processing")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        return View('admin.order.process', compact("process_data"));
    }
    public function delivery()
    {
        $delivery_data = order::orderBy('order_date_time','DESC')->select("*")->where("order_status","delivered")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        return View('admin.order.delivery', compact("delivery_data"));
    }
    public function deliverydetails($id)
    {
        $delivery_data = order::select("*")->where("order_status","delivered")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        // dd($delivery_data);  
        $itemdata= item::select("*")->where("order_id",$id)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        // dd($itemdata);
        return View("admin.order.delivery_details",compact("delivery_data","itemdata"));
    }
    public function cancel()
    {
        // $cancel_data = order::orderBy('order_date_time','DESC')->select("*")->where("item_status","canceled")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->leftjoin("tbl_item","tbl_item.order_id","=","tbl_order.order_id")->get();
        $cancel_data = item::orderBy('item_id','DESC')->select("*")->where("item_status","Canceled")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->leftjoin("tbl_order","tbl_order.order_id","=","tbl_item.order_id")->get();
        return View('admin.order.cancel', compact("cancel_data"));
    }
    public function pendingdetails($id)
    {
        $pending_data = order::select("*")->where("order_status","pending")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        $itemdata= item::select("*")->where("order_id",$id)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        return View("admin.order.pending_details",compact("pending_data","itemdata"));
    }
    public function canceldetails($id)
    {
        // $cancel_data = order::select("*")->where("order_status","cancel")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        
        $itemdata= item::select("*")->where("order_id",$id)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        $cancel_data= order::select("*")->where("item_status","Canceled")->leftjoin("tbl_item","tbl_item.order_id","=","tbl_order.order_id")->get();
        return View('admin.order.cancel_details',compact("cancel_data","itemdata"));
    }
    public function process_details($id)
    {
        $process_data = order::select("*")->where("order_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();
        $offer_data = offers::select("*")->leftjoin("tbl_order","tbl_order.offer_id","=","tbl_offers.offer_id")->get();
        $itemdata = item::select("*")->where("order_id",$id)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        return View('admin.order.order_process_details', compact("process_data","offer_data","itemdata"));        
    }
    public function invoice($id)
    {
        $orderdata = order::select("*")->where("order_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->leftjoin("tbl_offers","tbl_offers.offer_id","=","tbl_order.offer_id")->get();
        $itemdata= item::select("*")->where("order_id",$id)->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        
        return view("admin.order.invoice",compact("orderdata","itemdata"));
    }
    public function statuschange($id,Request $request)
    {
        $orderdata = order::select("*")->where("order_id",$id)->first();

        if($orderdata->order_status=="pending")
        {
            $obj = order::select("*")->where("order_id",$id)->first();
            $obj->order_status = "Processing";
            $obj->save();
            return redirect('/admin/order/process');
        }
        if($orderdata->order_status=="Processing")
        {
            $obj = order::select("*")->where("order_id",$id)->first();
            $obj->order_status = "delivered";
            $obj->save();
            return redirect('/admin/order/delivery');
        }
    }
    public function map()
    {
        $data = order::all();
        return view("admin.order.order_map",compact("data"));
    }
}
