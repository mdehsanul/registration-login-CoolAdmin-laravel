<?php

namespace App\Http\Controllers;

use App\Models\VerifyUser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyEmail extends Controller
{
    function verifyEmail($token)
    {
        $verifiedUser = VerifyUser::where('token', $token)->first();
        if (isset($verifiedUser)) {
            $user = $verifiedUser->user;
            if (!$user->is_verified = 0) {
                $user->is_verified = 1;
                $user->email_verified_at = Carbon::now();
                $user->save();
                return redirect('login')->with('success', 'Your email has been verified');
            } else {
                return redirect()->back()->with('info', 'Your email has already been verified');
            }
        } else {
            return redirect('login')->with('fail', 'Something went wrong!!');
        }
    }
}
