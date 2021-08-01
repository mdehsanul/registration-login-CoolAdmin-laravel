<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // log out
    function logout()
    {
        if (session()->has('loginId')) {
            session()->pull('loginId'); // pull is the function for forgot
            return redirect('login');
        }
    }
}
