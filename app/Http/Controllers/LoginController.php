<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    function login()
    {
        return view('login');
    }

    function postloginData(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user =  User::where('email', '=', $request->email)->first();
        if ($user) {
            if ($request->password === $user->password) {
                $request->session()->put('loginId', $user->id); // storing login user id
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'password not match');
            }
        } else {
            return back()->with('fail', 'email is not registered');
        }
    }
}
