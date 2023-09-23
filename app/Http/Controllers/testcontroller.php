<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\item;
use App\Models\exchange;
use App\Models\city;
use App\Models\Models;


class testcontroller extends Controller
{
    public function test()
    {
        $orderdata = order::select("*")->where("order_id","61")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->leftjoin("tbl_offers","tbl_offers.offer_id","=","tbl_order.offer_id")->get();
        $itemdata= item::select("*")->where("order_id","61")->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        return View('test.test',compact("orderdata","itemdata"));
    }
    public function test_request()
    {
        $invoice = exchange::select("*")->where("request_id","1")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        return view("test.test_request",compact("invoice"));
    }
}
