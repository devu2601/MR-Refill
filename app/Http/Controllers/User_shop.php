<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User_register;
use App\Models\Brand;
use App\Models\offers;
use App\Models\cart;
use App\Models\order;
use App\Models\enquiry;
use App\Models\state;
use App\Models\Item;
use App\Models\city;
use App\Models\Location;
use App\Models\Product_rating;
use App\Models\notification;
use DB;
class User_shop extends Controller
{
    //
    public function productlist($name=null){
        if($name==null)
        {
            //$product_data = product::select("*")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->get();

            $product_data=DB::select("select *,(select avg(rating) from tbl_product_rating where product_id=p.product_id) as totalrating from tbl_products as p left join tbl_category as c on c.cat_id=p.cat_id left join tbl_brand as b on b.brand_id=p.brand_id where p.product_status='Active' and c.cat_status='Active' and b.brand_status='Active'");

            // $product_data = product::select("*")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->leftjoin("tbl_product_rating","tbl_product_rating.product_id","=","tbl_products.product_id")->get();

            // $product_data = DB::select("select AVG(rating) from tbl_product_rating,tbl_products,tbl_category,tbl_brand where tbl_product_rating.product_id and tbl_category.cat_id=tbl_products.cat_id and tbl_brand.brand_id=tbl_products.brand_id group by (tbl_product_rating.product_id);");

            // select *,AVG(rating) from tbl_product_rating,tbl_products,tbl_category,tbl_brand where tbl_product_rating.product_id and tbl_category.cat_id=tbl_products.cat_id and tbl_brand.brand_id=tbl_products.brand_id group by (tbl_product_rating.product_id);

            // dd($product_data);
        }
        else
        {
            $product_data=DB::select("select *,(select avg(rating) from tbl_product_rating where product_id=p.product_id) as totalrating from tbl_products as p left join tbl_category as c on c.cat_id=p.cat_id left join tbl_brand as b on b.brand_id=p.brand_id where p.product_status='Active' and c.cat_status='Active' and b.brand_status='Active' and p.product_name like '%$name%'");

            // $product_data = product::select("*")->where("product_status","Active")->where("brand_status","Active")->where("cat_status","Active")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->where('tbl_products.product_name','LIKE','%'.$name.'%')->get();
        }
        
        $product_data2 = DB::select("select * from tbl_products where product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 3");

        // $rating = DB::select("SELECT AVG(rating) rating FROM `tbl_product_rating` GROUP BY product_id");

        // dd($rating);
        // $rating = DB::select("(SELECT AVG(rating) FROM `tbl_product_rating` GROUP BY product_id)");

        

        $catdata = Category::all();
       
        return view ('User.User_productlist',compact('product_data','catdata','product_data2'));
    }

    public function productlist_search(Request $request){
        $searchterm = $request->txtsearch;
        
        return redirect('/User/productlist/'.$searchterm);
    }

    public function brandlist_search($id){
        

        // $product_data = product::select("*")->where("product_status","Active")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->where("tbl_products.brand_id",$id)->get();

        $product_data=DB::select("select *,(select avg(rating) from tbl_product_rating where product_id=p.product_id) as totalrating from tbl_products as p left join tbl_category as c on c.cat_id=p.cat_id left join tbl_brand as b on b.brand_id=p.brand_id where p.product_status='Active' and c.cat_status='Active' and b.brand_status='Active' and b.brand_id=$id and p.product_status = 'Active'");

        $product_data2 = DB::select("select * from tbl_products where product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 1");

        $catdata = Category::all();
       
        return view ('User.User_productlist',compact('product_data','product_data2','catdata'));
       

    }

    public function categorylist_search($id){
        

        // $product_data = product::select("*")->where("product_status","Active")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->where("tbl_products.cat_id",$id)->get();

        $product_data=DB::select("select *,(select avg(rating) from tbl_product_rating where product_id=p.product_id) as totalrating from tbl_products as p left join tbl_category as c on c.cat_id=p.cat_id left join tbl_brand as b on b.brand_id=p.brand_id where p.product_status='Active' and c.cat_status='Active' and b.brand_status='Active' and c.cat_id=$id and p.product_status = 'Active'");

        $product_data2 = DB::select("select * from tbl_products where product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 1");

        $catdata = Category::all();
       
        return view ('User.User_productlist',compact('product_data','product_data2','catdata'));
       

    }
    
    public function productbycategory($id){
        $product_data = product::select("*")->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->get();
        $catdata = Category::all();
        $product_data2 = DB::select("select * from tbl_products where product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 3");
        return view ('User.User_productlist',compact('product_data','product_data2','catdata'));
    }

    public function productlist_detail($id){
        $product_data = product::select("*")->where("product_id",$id)->leftjoin("tbl_category","tbl_category.cat_id","=","tbl_products.cat_id")->leftjoin("tbl_brand","tbl_brand.brand_id","=","tbl_products.brand_id")->get();

        $catid = $product_data[0]->cat_id;

        $cat_data = category::select("*")->where("cat_id",$catid)->get();
        // dd($catid);

        $related_data = DB::select("select * from tbl_products,tbl_brand,tbl_category where tbl_products.cat_id = $catid and tbl_brand.brand_id = tbl_products.brand_id and tbl_category.cat_id = tbl_products.cat_id and product_status = 'Active' and brand_status = 'Active' and cat_status = 'Active' ");

        // dd($related_data);

        $product_data2 = DB::select("select * from tbl_products where product_id in (SELECT `product_id` FROM `tbl_product_rating`  group by `product_id` order by avg(`rating`) DESC) limit 1");

        $rating = DB::select("SELECT AVG(rating) rating FROM `tbl_product_rating` where product_id = $id and order_id not in (select order_id from tbl_order where user_id=(select user_id from tbl_user where user_status='Block')) GROUP BY product_id");

        $review = DB::select("select * from tbl_product_rating as r left join tbl_order as o on o.order_id=r.order_id left join tbl_user as u on u.user_id=o.user_id where r.product_id='$id' and r.rating_display='yes' and u.user_status='Active'");

       // $review = Product_rating::select("*")->where("product_id",$id)->where("rating_display","yes")->leftjoin("tbl_order","tbl_order.order_id","=","tbl_product_rating.order_id")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->get();

        // $userdata = User_register::all();


        // dd($rating);
        
        // $catdata = Category::all();

        // $brand_data = Brand::all();

        // return view ('User.User_productlist_detail',compact('product_data','catdata','brand_data'));

        return view ('User.User_productlist_detail',compact('product_data','rating','review','related_data','cat_data'));
    }

    public function brandlist(){
        $brand_data = Brand::all();
        return view ('User.User_brandlist', compact('brand_data'));
    }

    public function categorylist(){
        $catdata = Category::all();
        return view ('User.User_categorylist',compact('catdata'));
    }

    
    public function enquiry(){
       
        $userid=Session::get("userid");
        // dd($userid);
        // dd(Session::get("userid"));
        $user_data=User_register::select("*")->where("user_id",$userid)->get();
       
        return view('User.User_services_enquiry',compact('user_data'));
    }

    

    public function cart(){
        $userid=Session::get("userid");
        $user_data=User_register::select("*")->where("user_id",$userid)->get();
        $cart_data = cart::select("*")->where("user_id",$userid)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_cart.product_id")->get();
        // $product_data = product::select("*")->where("product_id",$id)->first();
        
        // dd($product_data);
        return View('User.User_cart',compact('cart_data'));
    }

    public function cart_insert(Request $request,$id)
    {
        if(Session::get("isuserlogin")=="yes")
        {
            $userid=Session::get("userid");
            $cart_data = cart::select("*")->where("user_id",$userid)->where("product_id",$id)->get();
        
            if(count($cart_data)<=0)
            {
                $product_data = product::select("*")->where("product_id",$id)->first();
                $obj= new cart();
                $obj->user_id=$userid;
                $obj->product_id=$id;
                $obj->quantity=$request->quantity;
                $obj->price=$product_data->product_sales_price;
                $obj->save();
                return redirect('/User/cart');
            }
            else
            {
                $product_data = product::select("*")->where("product_id",$id)->first();
                $obj= cart::select("*")->where("user_id",$userid)->where("product_id",$id)->first();
                $obj->user_id=$userid;
                $obj->product_id=$id;
                $obj->quantity=$request->quantity + $obj->quantity;
                $obj->price=$product_data->product_sales_price;
                $obj->save();
                return redirect('/User/cart');
            }
        }
        else
        {
            return redirect("/User/login");
        }
        
    }

    public function getcity_shop(Request $request)
    {
        $sid =  $request->stateid;
        
        // echo $sid;
        $result = city::select("*")->where("state_id",$sid)->where("city_status","Active")->get();
        $op="";
        $op.="<option value=''>Please Select City</option>";
        foreach($result as $row)
        {
            $op.="<option value='".$row->city_id.",".$row->lattitude.",".$row->longtitude."'>".$row->city_name."</option>";
        }
        echo $op;
    }
    
    public function checkout(){

        // $userid=Session::get("userid");
        if(Session::has("userid"))
        {
           
        
        $userid=Session::get("userid");
        // dd($userid);
        // dd(Session::get("userid"));
        $user_data=User_register::select("*")->where("user_id",$userid)->get();
        // dd($user_data);
        $statedata = state::select("*")->where("state_status","Active")->get();
        $cart_data = cart::select("*")->where("user_id",$userid)->where("product_status","Active")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_cart.product_id")->get();
        return view('User.User_checkout',compact('user_data','statedata','cart_data'));
        }
        else
        {
            return view('User.User_login');
        }
        return view('User.User_checkout');
    }
    public function ordercomplete(){
        return view('User.User_ordercomplete');
    }

    public function orderlist(){

        $userid=Session::get("userid");
        
        // $delivered=Item::select("*")->leftjoin("tbl_order","tbl_order.order_id","=","tbl_item.order_id")->where("tbl_order.user_id",$userid)->where("tbl_order.order_status","delivered")->get();
        // $order = Item::select("*")->where("order_id",$user_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_item.user_id")->get();
        $delivered = order::select("*")->where("user_id",$userid)->where("order_status","delivered")->get();
        // dd($delivered);
      //  $pending= order::select("*")->where("user_id",$userid)->where("order_status","Processing")->get();
        $pending= DB::select("select *,(select sum(item_total) from tbl_item where order_id=tbl_order.order_id and item_status='Canceled') as cancelamount from tbl_order where user_id='$userid' and order_status='Processing'");
        $cancled= order::select("*")->where("user_id",$userid)->where("item_status","Canceled")->leftjoin("tbl_item","tbl_item.order_id","=","tbl_order.order_id")->get();
       
        // foreach($pending as $row)
        // {
        //     $x= order::select("*")->where("user_id",$userid)->where("order_id",$row->order_id)->where("item_status","Ordered")->leftjoin("tbl_item","tbl_item.order_id","=","tbl_order.order_id")->get();
        //     foreach($x as $row)
        //     {
        //         $amt=$row->item_total;
        //         $total=0;
        //         $total=$total+$amt;
        //     }
            
        // }
        return view('User.User_orderlist',compact('delivered','pending','cancled'));
    }

    public function enquiry_insert(Request $request){
        $userid=Session::get("userid");

        $obj=new enquiry();
        $obj->user_id = $userid;
        $obj->inquriy_contact= $request->txtnumber;
        $obj->inquriy_email= $request->txtemail;
        $obj->inquriy_subject= $request->txtsubject;
        $obj->inquriy_status= "in process";
        $obj->inquriy_descriotion= $request->txtdescription;
        $obj->inquriy_date_time= date('Y-m-d H:i:s');;
        $obj->save();

        $enq_data = enquiry::latest()->first();
        $objenq = new notification();
        $objenq->user_id = $userid;
        $objenq->id = $enq_data->inquiry_id;
        $objenq->notification_type = "new_inquiry";
        $objenq->remark = "New inquiry arrives";
        $objenq->save();

        return redirect("/User/home");
    }
    
    
    public function deletecartproducts(Request $request,$id){

     cart::where('cart_id',$id)->delete();
      
        
       

        return redirect("/User/cart");
    }

    
    public function cart_update($id,$type)
    {
        
        $sql = cart::select("*")->where("cart_id",$id)->first();
        if($type=="plus")
        {

            $cart_data = cart::select("*")->where("cart_id",$id)->update(["quantity" => ($sql->quantity+1) ]);
        }
        else
        {
            //
            //
            if($sql->quantity>=2)
            {
            $cart_data = cart::select("*")->where("cart_id",$id)->update(["quantity" => ($sql->quantity-1) ]);
            }
            else
            {
                $cart_data = cart::select("*")->where("cart_id",$id)->delete();  
            }
        }
        return redirect('/User/cart');
       
    }

    public function order_insert(Request $request)
    {
        $userid=Session::get("userid");
        
        $obj=new order();
        $obj->user_id=$userid;
        $obj->offer_id=$request->offerid;
        $obj->order_address=$request->address1;
        $obj->order_landmark=$request->txtlandmark;
        $obj->order_pincode=$request->txtpincode;
        $obj->lattitude=$request->txtlat;
        $obj->longtitude=$request->txtlng;
        $obj->order_total_pay=$request->total;
        $obj->order_discount=$request->discount2;
        $obj->order_payment_type=$request->payment_method;
        $obj->order_transaction_number=$request->trid;
        $obj->payment_status="Paid";
        $obj->order_status="Processing";
        $obj->order_date_time=date('Y-m-d H:i:s');

        $obj->save();

        $oid = $obj->order_id;

        $cartdata = cart::where("user_id",$userid)->where("product_status","Active")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_cart.product_id")->get();
        // dd($cartdata);
        foreach($cartdata as $row)
        {
            $i = new Item();
            $i->order_id = $oid;
            $i->product_id = $row->product_id;
            $i->item_quantity = $row->quantity;
            $i->item_price = $row->price;
            $i->item_total = ($row->quantity *  $row->price);
            $i->item_status = "Ordered"; 
            $i->save();
        }
        $cartdata = cart::where("user_id",$userid)->delete();

        $order_data = order::latest()->first();
        
        $objnotify = new notification();
        $objnotify->user_id = $userid;
        $objnotify->id = $order_data->order_id;
        $objnotify->notification_type = "new_order";
        $objnotify->remark = "New order arrives";
        $objnotify->save();


        
       
        return redirect('/User/ordercomplete');
       
    }

    public function order_insert2(Request $request)
    {
        $userid=Session::get("userid");
        // dd($request->discount2);
        $obj=new order();
        $obj->user_id=$userid;
        $obj->offer_id=$request->offerid;
        $obj->order_address=$request->address1;
        $obj->order_landmark=$request->txtlandmark;
        $obj->order_pincode=$request->txtpincode;
        $obj->lattitude=$request->txtlat;
        $obj->longtitude=$request->txtlng;
        $obj->order_total_pay=$request->total;
        $obj->order_discount=$request->discount2;
        $obj->order_payment_type=$request->payment_method;
        $obj->order_transaction_number="1234567890";
        $obj->payment_status="pending";
        $obj->order_status="Processing";
        $obj->order_date_time=date('Y-m-d H:i:s');

        $obj->save();

        $oid = $obj->order_id;

        $cartdata = cart::where("user_id",$userid)->where("product_status","Active")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_cart.product_id")->get();
        // dd($cartdata);
        foreach($cartdata as $row)
        {
            $i = new Item();
            $i->order_id = $oid;
            $i->product_id = $row->product_id;
            $i->item_quantity = $row->quantity;
            $i->item_price = $row->price;
            $i->item_total = ($row->quantity *  $row->price);
            $i->item_status = "Ordered"; 
            $i->save();
        }
        $cartdata = cart::where("user_id",$userid)->delete();

        $order_data = order::latest()->first();
        
        $objnotify = new notification();
        $objnotify->user_id = $userid;
        $objnotify->id = $order_data->order_id;
        $objnotify->notification_type = "new_order";
        $objnotify->remark = "New order arrives";
        $objnotify->save();
        
       
        return redirect('/User/ordercomplete');
       
    }

    public function order_view($id){

        $order_details = Item::select("*")->where("order_id",$id)->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();

        

        // dd($order_details);

           return view("User.User_orderview",compact('order_details'));
       }

       public function order_view2($id){

        $order_details = Item::select("*")->where("order_id",$id)->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();

        $order_details = DB::select("select *,(select count(*) from tbl_product_rating where product_id=i.product_id and order_id=i.order_id) as totalrating from tbl_item as i left join tbl_products as p on p.product_id=i.product_id left join tbl_category as c on c.cat_id=p.cat_id where i.order_id='$id' and i.item_status='Ordered'");

        // dd($order_details);

           return view("User.User_orderview2",compact('order_details'));
       }

       public function order_view3($id){

        $order_details = Item::select("*")->where("item_id",$id)->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();

        
        // dd($order_details);

           return view("User.User_orderview3",compact('order_details'));
       }

    public function order_delete($id){

        $order_delete = Item::select("*")->where("order_id",$id)->update(["item_status" => "Canceled" ]);

        $order_delete_main = order::select("*")->where("order_id",$id)->update(["order_status" => "Canceled" ]);

        $userid = Session::get("userid");
        // dd($userid);

        
        $objnoti = new notification();
        $objnoti->user_id = $userid;
        $objnoti->id = $id;
        $objnoti->notification_type = "cancel_order";
        $objnoti->remark = "Ordered canceled by user";
        $objnoti->save();


        // dd($order_details);

           return redirect("/User/orderlist");
       }
    
     public function order_product_delete($id,$product){

        $totalitems = count(Item::select("*")->where("order_id",$id)->get());
        $canceleditems = count(Item::select("*")->where("order_id",$id)->where("item_status","Canceled")->get());

        if(($canceleditems+1)>=$totalitems)
        {
            order::select("*")->where("order_id",$id)->update(["order_status" => "Canceled" ]);
            Item::select("*")->where("order_id",$id)->where("product_id",$product)->update(["item_status" => "Canceled" ]);

            $userid = Session::get("userid");
            $objnoti = new notification();
            $objnoti->user_id = $userid;
            $objnoti->id = $id;
            $objnoti->notification_type = "cancel_order";
            $objnoti->remark = "Ordered canceled by user";
            $objnoti->save();
            
            return redirect("/User/orderlist");
        }
        else
        {
            Item::select("*")->where("order_id",$id)->where("product_id",$product)->update(["item_status" => "Canceled" ]);
            return redirect("/User/orderview/$id");
        }


       }

       function checkcoupon(Request $request)
       {

        $date=date('Y-m-d H:i:s');
       // dd($date);

           $response=array();
           $coupon=$request->coupon;



           $total=$request->total;
           
           $data = DB::select("select * from tbl_offers where coupon_code='$coupon' and $total>=offer_min_amt and $total<=offer_max_amt and '$date'<=end_time and '$date'>=start_time");
           if(count($data)<=0)
           {
               $response["status"]="invalid";
           }
           else
           {
                foreach($data as $row)
                {
                    $user_id= Session::get('userid');
                    if($row->offer_onetimeuse=="Yes")
                    {
                        $check = DB::select("select * from tbl_order where user_id='$user_id' and offer_id='$row->offer_id'");
                        if(count($check)<=0)
                        {
                            $response["status"]="valid";
                            $response["discount"]=$row->offer_discount;
                            $response["offer_id"]=$row->offer_id ;
                        }
                        else
                        {
                            $response["status"]="ofinvalid";
                        } 
                    }
                    else
                    {
                        $response["status"]="valid";
                        $response["discount"]=$row->offer_discount;
                        $response["offer_id"]=$row->offer_id ;
                    }
                    
                }
           }
           echo json_encode($response);
       }

       public function productlist_review(Request $request,$productid,$orderid){

        $productid1 = $productid;
        $orderid1 = $orderid;

        
        return view("user.User_product_review",compact("productid1","orderid1"));
 
   }
   public function productlist_review_insert(Request $request){

    $obj = new Product_rating();

    $obj->product_id=$request->productid;
    $obj->rating=$request->rating;
    $obj->review_text=$request->review;
    $obj->order_id=$request->orderid;
    $obj->rating_display="yes";
    $obj->save();

    
    return redirect("/User/home");

}
   public function order_invoice($order_id)
   {
        $orderdata = order::select("*")->where("order_id",$order_id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_order.user_id")->leftjoin("tbl_offers","tbl_offers.offer_id","=","tbl_order.offer_id")->get();
        $itemdata= item::select("*")->where("order_id",$order_id)->where("item_status","Ordered")->leftjoin("tbl_products","tbl_products.product_id","=","tbl_item.product_id")->get();
    
        return view("user.User_order_invoice",compact("orderdata","itemdata"));
   }

    
    
}
