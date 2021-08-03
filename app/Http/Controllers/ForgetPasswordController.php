<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ForgetPasswordController extends Controller
{

    // show forget password email form
    function showForgetPasswordForm()
    {
        return view('forget.forget-password');
    }


    // submit reset password email
    function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);

        DB::table('reset_passwords')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('emails.forgetPassword', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        return back()->with('success', 'We have mailed your password reset link!');
    }


    // reset password form
    function showResetPasswordForm($token)
    {
        return view('reset.reset-password', ['token' => $token]);
    }


    // submit reset password
    function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
            'cpassword' => 'required'
        ]);

        $updatePassword = DB::table('reset_passwords')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('fail', 'Invalid token!');
        }

        $user = User::where('email', $request->email)
            ->update(['password' => bcrypt($request->password)], ['confirm_password' => bcrypt($request->cpassword)]);

        DB::table('reset_passwords')->where(['email' => $request->email])->delete();
        return redirect('login')->with('success', 'Your password has been changed!');
    }
}
