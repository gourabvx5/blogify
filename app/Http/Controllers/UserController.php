<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('pages.auth.login');
    }

    public function userCreate()
    {
        return "OK";
    }

    public function userRegister()
    {
        return view('pages.auth.registration');
    }
}
