<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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
        $loginUserdata = array();
        if (session()->has('loginId')) {
            $loginUserdata = User::where('id', '=', session()->get('loginId'))->first();
        }
        return view('dashboard', compact('loginUserdata'));
    }
}
