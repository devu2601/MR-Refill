<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_ChangePassword_Controller extends Controller
{
    public function changePassword()
    {
        return View('user.changePassword');
    }
}
