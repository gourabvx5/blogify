<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function userRegistration(Request $request)
    {
<<<<<<< HEAD
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
    public function userProfile()
    {
        return view('pages.post.profile.profile');
=======
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'blog_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        try {
            $validatedData['password'] = Hash::make($validatedData['password']);
            $user = User::create($validatedData);
            return response()->json([
                "status" => "success",
                "message" => "Registration successful",
                "user" => $user
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage()
            ], 500);
        }
>>>>>>> 101dc51837f5b6817ecd0ca04d988adab4982d17
    }
}
