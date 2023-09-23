<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;
use App\Models\offers;
use App\Models\faq;

class User_common extends Controller
{
    //

    public function test(){
        return view('User.User_test');
    }

    public function aboutus(){
        return view('User.User_about_aboutus');
    }

    public function news(){
        // $time = date('Y-m-d h:i:s');
        // dd($time);
        $news = news::select("*")->where("news_display","Yes")->get();
        return view('User.User_about_news',compact('news'));
    }

    public function news_detail(){
        return view('User.User_about_news_detail');
    }

    public function updates(){
        return view('User.User_about_updates');
    }

    
    public function contact(){
        return view('User.User_contact');
    }
    public function faq(){
        $faq_data = faq::select("*")->where("faq_status","Active")->get();
        return view('User.User_faq',compact('faq_data'));
    }

    public function offer(){
        $offer_data = offers::all();
        return view('User.User_offer',compact('offer_data'));
    }

    
}
