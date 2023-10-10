<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('pages.users.login');
    }
    public function userRegister()
    {
        return view('pages.users.registration');
    }
    public function userProfile()
    {
        return view('pages.users.profile');
    }
}
