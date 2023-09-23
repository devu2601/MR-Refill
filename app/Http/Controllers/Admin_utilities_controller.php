<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Models\city;
use App\Models\news;
use App\Models\offers;
use App\Models\faq;
use App\Models\inquiry;
use App\Models\users;


class Admin_utilities_controller extends Controller
{
    public function offerinsertform()
    {
        return View("admin.utility.offer");
    }
    public function offerview()
    {
        $data = offers::all();
        return View('admin.utility.offers_view',compact("data"));
    }
    public function offerinsert(Request $request)
    {
        // dd("hello");
        $obj = new offers();
        $obj->offer_name = $request->txtoffername;
        $obj->offer_title = $request->txtoffertitle;
        $obj->offer_min_amt = $request->txtminamount;
        $obj->offer_max_amt = $request->txtmaxamount;
        $obj->offer_discount = $request->txtdiscamount;
        $obj->coupon_code = $request->txtcode;
        
        $obj->end_time = $request->txtendtime;
        $obj->offer_description = $request->txtdescription;
        $date = date('Y-m-d H:i:s');
        if($request->txtstarttime > $date)
        {
            $obj->start_time = $request->txtstarttime;
            // return redirect::back();
        }
        else
        {
            return redirect('/admin/utility/offer/insert/form')->with("status","Record Does Not Inserted Successfully!");
        }
        if($request->offerstatus == "Active")
        {
            $obj->offer_status = "Activ)e";
        }
        else
        {
            $obj->offer_status = "In Active";
        }
        if($request->onetimeuse == "yes")
        {
            $obj->offer_onetimeuse = "Yes";
        }
        else
        {
            $obj->offer_onetimeuse = "No";
        }
        $obj->save();
        return redirect('/admin/utility/offer/view')->with("status","Record Inserted Successfully!");
    }
    public function offerupdateform($id)
    {
        $data = offers::select("*")->where("offer_id",$id)->first();
        return view("admin.utility.offer_update",compact("data"));
    }
    public function offerupdate(Request $request,$id)
    {
        $obj = offers::select("*")->where("offer_id",$id)->first();
        $obj->offer_name = $request ->txtoffername;
        $obj->offer_title = $request ->txtoffertitle;
        $obj->offer_min_amt = $request ->txtminamount;
        $obj->offer_max_amt = $request ->txtmaxamount;
        $obj->offer_discount = $request ->txtdiscamount;
        $obj->offer_description = $request ->txtdescription;
        $obj->coupon_code = $request ->txtcode;
        $obj->start_time = $request ->txtstarttime;
        $obj->end_time = $request ->txtendtime;
        if($request->offerstatus == "Active")
        {
            $obj->offer_status = "Active";
        }
        else
        {
            $obj->offer_status = "In Active";
        }
        if($request->onetimeuse == "yes")
        {
            $obj->offer_onetimeuse = "Yes";
        }
        else
        {
            $obj->offer_onetimeuse = "No";
        }
        $obj->save();
        return redirect('/admin/utility/offer/view')->with("status","Record Updated Successfully!");
    }
    public function offerdelete(Request $request)
    {
        $id = $request->deleteid;
        // dd($id);
        offers::where("offer_id",$id)->delete();
        return redirect('/admin/utility/offer/view')->with("status","Record Deleted Successfully!");
    }
    public function inquiryview()
    {
        $data = inquiry::orderBy('inquriy_date_time','DESC')->select("*")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_inquiry.user_id")->get();
        return View('admin.utility.inquiry_view',compact("data"));
    }
    public function inquirydetails($id)
    {
        $data = inquiry::select("*")->where("inquiry_id",$id)->leftjoin("tbl_user","tbl_user.user_id","=","tbl_inquiry.user_id")->first();
        return View("admin.utility.inquiry_details",compact("data"));
    }
    public function inquirystatuschange($id)
    {
        $obj = inquiry::select("*")->where("inquiry_id",$id)->first();
        $obj->inquriy_status = "Complete";
        $obj->save();
        $data = inquiry::select("*")->leftjoin("tbl_user","tbl_user.user_id","=","tbl_inquiry.user_id")->get();
        return View("admin.utility.inquiry_view",compact("data"));
    }
    public function news()
    {
        return View('admin.utility.news');
    }
    public function newsview()
    {
        $data = news::all();
        return View('admin.utility.news_view',compact("data"));
    }
    public function newsdetails($id)
    {
        $data = news::select("*")->where("news_id",$id)->get();
        return View('admin.utility.news_details',compact("data"));
    }
    public function newsupdateform($id)
    {
        $data = news::select("*")->where("news_id",$id)->first();
        return View("admin.utility.news_update",compact("data"));
    }
    public function newsupdate(Request $request)
    {
        $id = $request->id;
        $oldimage1 = $request->image1;
        $oldimage2 = $request->image2;
        if($request->hasFile("txtimage1"))
        {
            unlink(public_path()."/uploads/news_image/".$oldimage1);
            $image1 = $request->txtimage1;
            $ext = $image1->extension();
            $newname1 = time()."_".rand(1111,9999).".".$ext;
            $image1->move(public_path('uploads/news_image/'),$newname1);
        }
        else
        {
            $newname1 = $oldimage1;
        }
        if($request->hasFile("txtimage2"))
        {
            unlink(public_path()."/uploads/news_image/".$oldimage2);
            $image2 = $request->txtimage2;
            $ext = $image2->extension();
            $newname2 = time()."_".rand(1111,9999).".".$ext;
            $image2->move(public_path('uploads/faq/'),$newname2);
        }
        else
        {
            $newname2 = $oldimage2;
        }
        $obj = news::select("*")->where("news_id",$id)->first();
        $obj->news_title = $request ->txttitle;
        $obj->news_description = $request ->txtdescription;
        $obj->news_img1 = $newname1;
        $obj->news_img2 = $newname2;
        $obj->news_date_time = $request ->txtdatetime;
        $obj->start_time = $request ->txtstarttime;
        $obj->end_time = $request ->txtendtime;
        if($obj->news_display = $request ->active=="yes")
        {
            $obj -> news_display = "Yes";
        }
        else
        {
            $obj -> news_display = "No";
        }
        
        $obj -> save();
        return redirect("/admin/utility/news/view")->with("status","Record Updated Successfully!");
    }
    public function newsdelete(Request $request)
    {
        $id = $request->deleteid;
        $image1 = $request->deleteimg1;
        $image2 = $request->deleteimg2;
        unlink(public_path('/uploads/news_image/').$image1);
        if(!empty($image2))
        {
            unlink(public_path()."/uploads/news_image/".$image2);
        }
        news::where("news_id",$id)->delete();
        return redirect("/admin/utility/news/view")->with("status","Record Deleted Successfully!");          
    } 
    public function faq()
    {
        return View('admin.utility.faq');
    }
    public function faqview()
    {
        $data = faq::all();
        return View("admin.utility.faq_view",compact("data"));
    }
    public function faqinsert(Request $request)
    {
        

        $obj = new faq();
        $obj->faq_question = $request->txtquestion;
        $obj->faq_answer = $request->txtanswer;
       
        if($request->active == "Active")
        {
            $obj->faq_status = "Active";
        }
        else
        {
            $obj->faq_status = "Block";
        }
        $obj->save(); 
        // $data = faq::all();
        return redirect("/admin/utility/faq/view");
    }
    public function faqupdateform($id)
    {
        $data = faq::select("*")->where("faq_id",$id)->first();
        return View("admin.utility.faq_update",compact("data"));
    }
    public function faqupdate(Request $request)
    {
        $id = $request->id;
        // $oldimage = $request->oldimage;
        // if($request->hasFile("txtimage1"))
        // {
        //     unlink(public_path()."/uploads/faq/".$oldimage);
        //     $image = $request->txtimage1;
        //     $ext = $image->extension();
        //     $newname = time()."_".rand(1111,9999).".".$ext;
        //     $image->move(public_path('uploads/faq/'),$newname);
        // }
        // else
        // {
        //     $newname = $oldimage;
        // }
        $obj = faq::select("*")->where("faq_id",$id)->first();
        $obj->faq_question = $request->txtquestion;
        $obj->faq_answer = $request->txtanswer;
        // $obj->faq_img_url = $newname;
        if($request->active == "Active")
        {
            $obj->faq_status = "Active";
        }
        else
        {
            $obj->faq_status = "Block";
        }
        $obj->save();
        return redirect('/admin/utility/faq/view')->with("status","Record Updated Successfully!");
    }
    public function faqdelete(Request $request)
    {
        $id = $request->deleteid;
        $image = $request->deleteimg;
        unlink(public_path()."/uploads/faq/".$image);
        faq::where("faq_id",$id)->delete();
        return redirect('/admin/utility/faq/view')->with("status","Record Deleted Successfully!");
    }
    public function state()    // Display Page 
    {
        return View('admin.utility.state');
    }
    public function city()  // City insert
    {

        $city_data = city::all();
        $state_data = state::all();
        return View('admin.utility.city',compact('city_data', 'state_data'));
    }
    public function cityview()  // City View
    {
        $city_data = city::select("*")->leftjoin("tbl_states","tbl_states.state_id","=","tbl_cities.state_id")->get();
        return View('admin.utility.city_view',compact('city_data'));
    }
    public function stateview() // State View
    {
        $state_data = state::all();
        return View('admin.utility.state_view',compact('state_data'));
    }

    // insert functions

    public function cityinsert(Request $request)  // City Insert Page
    {
        $result = city::select("*")->where("city_name",strtolower($request->txtcityname))->get();
        if(count($result)<=0)
        {
            $obj = new city();
            $obj->city_name = $request->txtcityname;
            $obj->state_id = $request->txtstatename;
            $obj->lattitude = $request->txtlat;
            $obj->longtitude = $request->txtlong;
            $obj->save();
            return redirect('/admin/utility/city')->with("status","Record Inserted Successfully!");
        }
        else
        {
            return redirect('/admin/utility/city')->with("status","Record Already Exist ! ");
        }
        
        

        
    }
    public function stateinsert(Request $request)  //  State Insert Page
    {
        $result = state::select("*")->where("state_name",strtolower($request->txtstatename))->get();
        if(count($result)<=0)
        {
            $obj = new state();
            $obj->state_name = $request->txtstatename;
            $obj->save();

            return redirect('/admin/utility/state')->with("status","Record Inserted Successfully");
        }
        else
        {
            return redirect('/admin/utility/state')->with("status","Record Already Exist ! ");
        }
        
    }

    public function newsinsert(Request $request)
    {
        $image1 = $request->txtimage1;
        $ext = $image1->extension();
        $newname1 = time()."_".rand(1111,9999).".".$ext;
        $image1->move(public_path('uploads/news_image/'),$newname1);

        if($request->hasfile("txtimage2"))
        {
            $image2 = $request->txtimage2;
            $ext = $image2->extension();
            $newname2 = time()."_".rand(1111,9999).".".$ext;
            $image2->move(public_path('uploads/news_image/'),$newname2);
        }
        
        
        $obj = new news();
        $obj->news_title = $request ->txttitle;
        $obj->news_description = $request ->txtdescription;
        $obj->news_img1 = $newname1;
        if(!empty($newname2))
        {
            $obj->news_img2 = $newname2;
        }
        $obj->news_date_time = $request ->txtdatetime;
        $obj->start_time = $request ->txtstarttime;
        $obj->end_time = $request ->txtendtime;
        if($request ->active=="active")
        {
            $obj -> news_display = "Yes";
        }
        else
        {
            $obj -> news_display = "No";
        }
        
        $obj -> save();
        return redirect("/admin/utility/news");
    }


    // change status

    public function change_status_offer(Request $request,$id)
    {
        $data = offers::select("*")->where("offer_id",$id)->first();
        $obj = offers::select("*")->where("offer_id",$id)->first();
        if($data->offer_status == "Active")
        {
            $obj->offer_status="Block";
        }
        else
        {
            $obj->offer_status="Active";
        }
        $obj->save();
        return redirect("/admin/utility/offer/view");
    }
    // public function change_status_news(Request $request,$id)
    // {
    //     $data = news::select("*")->where("offer_id",$id)->first();
    //     $obj = news::select("*")->where("offer_id",$id)->first();
    //     if($data->offer_status == "Active")
    //     {
    //         $obj->offer_status="Block";
    //     }
    //     else
    //     {
    //         $obj->offer_status="Active";
    //     }
    //     $obj->save();
    //     return redirect("/admin/utility/offer/view");
    // }
    public function change_status_faq(Request $request,$id)
    {
        $data = faq::select("*")->where("faq_id",$id)->first();
        $obj = faq::select("*")->where("faq_id",$id)->first();
        if($data->faq_status == "Active")
        {
            $obj->faq_status="Block";
        }
        else
        {
            $obj->faq_status="Active";
        }
        $obj->save();
        return redirect("/admin/utility/faq/view");
    }

    //delete function


    public function city_status_change($id)  // City Delete Page
    {
        $data = city::select("*")->where("city_id",$id)->first();
        $obj = city::select("*")->where("city_id",$id)->first();
        if($data->city_status == "Active")
        {
            $obj->city_status="Block";
        }
        else
        {
            $obj->city_status="Active";
        }
        $obj->save();
        return redirect('/admin/utility/city/view');

    }
    public function state_status_change($id)  // State Delete Page
    {
        $data = state::select("*")->where("state_id",$id)->first();
        $obj = state::select("*")->where("state_id",$id)->first();
        if($data->state_status == "Active")
        {
            $obj->state_status="Block";
        }
        else
        {
            $obj->state_status="Active";
        }
        $obj->save();
        return redirect('/admin/utility/state/view');
    }

                                //Update function


    public function updatecity($id)  // City Update Page
    {
        $singlecity = city::where("city_id",$id)->leftjoin("tbl_states","tbl_states.state_id","=","tbl_cities.state_id")->get();
        $state_data = state::select("*")->get();
        return View("admin.utility.update_city",compact('singlecity','state_data'));
    }
    public function savecity(Request $request)  // Update Save Record
    {
        $id =  $request->txtcityid;
        $cityobj = city::where("city_id",$id)->first();
        $cityobj->city_name = $request->txtcityname;
        $cityobj->state_id = $request->txtstatename;
        $cityobj->save();
        
        return redirect('/admin/utility/city/view')->with("status","Record Updated successfully");
    }
    public function updatestate($id)  // State Update Page
    {
        $singlestate = state::where("state_id",$id)->get();
        return View("admin.utility.update_state",compact('singlestate'));
    }
    public function savestate(Request $request)   // Update Save Record
    {
        $id = $request->txtstateid;
        $stateobj = state::where("state_id",$id)->first();
        $stateobj->state_name = $request->txtstatename;
        $stateobj->save();

        return redirect('/admin/utility/state/view')->with("status","Record Updated successfully");
    }
    

}
