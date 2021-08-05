<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;


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
            if (Auth::user()->is_verified == 0) {
                Auth::logout();
                Mail::to($user->email)->send(new VerifyEmail($user));
                return redirect('login')->with('success', 'Please verify your email to continue');
            }

            Auth::id(); // storing login user id
            return redirect('dashboard');
        } else {
            return redirect()->back()->with('fail', 'Incorrect email or password');
        }
    }
}
