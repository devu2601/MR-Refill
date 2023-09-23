<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\order;
use App\Models\item;
use App\Models\exchange;
use App\Models\Models;
use App\Models\city;
use App\Models\log;
use Mail;
 
use PDF;
 
class SendEmailController extends Controller
{
     
    public function index(Request $request,$user_id,$order_id)
    {
        $userdata  = users::select("*")->where("user_id",$user_id)->get();
        // dd($userdata);
        $data["email"]=$userdata[0]->user_email;
        $data["client_name"]=$userdata[0]->user_name;
        $data["subject"]="invoice";
        $orderdata = order::select("*")->where("order_id",$order_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->leftjoin("tbl_offers","tbl_offers.offer_id","=","tbl_order.offer_id")->get();
        $itemdata= item::select("*")->where("order_id",$order_id)->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
        

        $data["orderdata"]=$orderdata;
        $data["itemdata"]=$itemdata;
 
        $pdf = PDF::loadView('test.test', $data);
        // return $pdf->download('pdf.pdf');

        try{
            Mail::send('test.mail', $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
 
        }else{
            
            return redirect("/admin/dashboard");
           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
        }
        // return redirect("/admin/dashboard");
        return response()->json(compact('this'));
    }
    public function index2(Request $request,$user_id,$request_id)
    {
        $userdata  = users::select("*")->where("user_id",$user_id)->get();
        // dd($userdata);
        $data["email"]=$userdata[0]->user_email;
        $data["client_name"]=$userdata[0]->user_name;
        $data["subject"]="invoice";
        $invoice = exchange::select("*")->where("request_id",$request_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_exchange_cartridge.user_id")->leftjoin("tbl_model","tbl_model.model_id","=","tbl_exchange_cartridge.model_id")->leftjoin("tbl_cities","tbl_cities.city_id","=","tbl_exchange_cartridge.city_id")->get();
        $log_data = log::select("*")->where("request_id",$request_id)->where("log_status","complete")->get();
        $data["invoice"]=$invoice;
        $data["log_data"]=$log_data;
        $pdf = PDF::loadView('test.test_request', $data);
        // return $pdf->download('pdf.pdf');

        try{
            Mail::send('test.mail', $data, function($message)use($data,$pdf) {
            $message->to($data["email"], $data["client_name"])
            ->subject($data["subject"])
            ->attachData($pdf->output(), "invoice.pdf");
            });
        }catch(JWTException $exception){
            $this->serverstatuscode = "0";
            $this->serverstatusdes = $exception->getMessage();
        }
        if (Mail::failures()) {
             $this->statusdesc  =   "Error sending mail";
             $this->statuscode  =   "0";
 
        }else{
            
            return redirect("/admin/dashboard");
           $this->statusdesc  =   "Message sent Succesfully";
           $this->statuscode  =   "1";
        }
        return response()->json(compact('this'));
    }
}