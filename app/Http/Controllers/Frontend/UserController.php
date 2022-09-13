<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login_view()
    {
        return view('frontend.user.login');
    }

    public function sign_up_view()
    {
        return view('frontend.user.sign-up');
    }
}
