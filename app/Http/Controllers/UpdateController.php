<?php

namespace App\Http\Controllers;

use App\Models\User; // importing Models

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    function updateform($id)
    {
        $loginUserdata = User::find($id);
        return view('dashboard', compact('loginUserdata'));
    }

    function update(Request $request)
    {
        $userData = User::find($request->id);
        $userData->username = $request->username;
        $userData->phone_number = $request->telephone;
        $userData->is_email_verified = 'yes';
        $userData->password = $request->password;
        $userData->confirm_password = $request->cpassword;
        // image start
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('user_images/', $filename);
            $userData->avatar = $filename;
        }

        $userData->save();

        // return (json_encode(array('statusCode' => 200)));
        return redirect('dashboard');
    }
}
