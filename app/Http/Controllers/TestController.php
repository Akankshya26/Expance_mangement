<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('FrontEnd.login');
    }
    public function showsignup()
    {
        return view('FrontEnd.signup');
    }
    public function forgot()
    {
        return view('FrontEnd.forgetpsw');
    }
    public function rpass()
    {
        return view('FrontEnd.resetpassword');
    }
    public function dashbord()
    {
        return view('FrontEnd.dashbord');
    }
}
