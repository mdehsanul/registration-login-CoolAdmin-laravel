<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ForgetPasswordController extends Controller
{
    function forget_pass()
    {
        return view('forget-pass');
    }
}
