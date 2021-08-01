<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // showing login form
    function login()
    {
        return view('login');
    }

    // login user
    function postloginData(Request $request)
    {
        $user =  User::where('email', '=', $request->email)->first();

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->email_verified_at == null) {
                Auth::logout();
                return redirect('login')->with('fail', 'Please verify your email to continue');
            }

            $request->session()->put('loginId', $user->id); // storing login user id
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('fail', 'Incorrect email or password');
        }
    }
}
