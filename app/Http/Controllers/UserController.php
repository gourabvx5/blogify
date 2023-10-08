<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userRegister()
    {
        return view('pages.auth.registration');
    }
    public function userCreate(Request $request)
    {
        $userdata = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=>'required',
        ]);

        User::create($userdata);


        return redirect('pages.auth.login');

    }

    public function user_authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/');
        }

        // return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function userLogin()
    {
        return view('pages.auth.login');
    }


}
