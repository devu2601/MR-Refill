<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mailsendemployee extends Controller
{
    //

    public function empmail()
    {
        $password = "123456";
        $details = [
            "password"=>$password,
            "message"=>"user name:",

        ];
        $email="vershilhoshi123@gmail.com";
        \Mail::to($email)->send(new \App\Mail\NotifyMail($details));
        
    }
}
