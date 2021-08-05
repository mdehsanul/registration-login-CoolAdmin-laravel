<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    // log out
    function logout()
    {
        if (Auth::id()) {
            $user = User::where('id', '=', Auth::id())
                ->update(['is_verified' => "0"]);
            Auth::logout();
            return redirect('login');
        }
    }
}
