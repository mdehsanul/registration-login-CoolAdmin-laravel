<?php

namespace App\Http\Controllers;

use App\Mail\VerifyEmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{

    // showing registration form
    function register()
    {
        return view('register');
    }

    // storing registration data and sending mail
    function postRegistrationData(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required | unique:users',
            'telephone' => 'required',
            'password' => 'required',
            'cpassword' => 'required',
            'image' => 'required'
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('user_images/', $filename);
        };

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->telephone,
            'password' => bcrypt($request->password),
            'confirm_password' => bcrypt($request->cpassword),
            'avatar' => $filename,
        ]);

        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $user->id,
        ]);

        Mail::to($user->email)->send(new VerifyEmail($user));
        return redirect('login')->with('success', 'Please click on the mail sent to your email');
    }
}
