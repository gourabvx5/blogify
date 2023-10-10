<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userLogin()
    {
        return view('pages.auth.login');
    }

    public function userRegister()
    {
        return view('pages.auth.registration');
    }
    public function userProfile()
    {
        return view('pages.post.profile.profile');
    }
}
