<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // showing dashboard
    // function dashboard()
    // {
    //     return view('dashboard');
    // }

    // showing user information when user login
    function showdashboard(Request $request)
    {
        // dd(Auth::user());
        $loginUserdata = array();
        if (Auth::id()) {
            $loginUserdata = User::where('id', '=', Auth::id())->first();
        }
        return view('dashboard', compact('loginUserdata'));
    }
}
