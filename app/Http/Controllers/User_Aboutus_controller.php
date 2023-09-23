<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Aboutus_controller extends Controller
{
    public function aboutus()
    {
        return View('user.aboutus');
    }
}
