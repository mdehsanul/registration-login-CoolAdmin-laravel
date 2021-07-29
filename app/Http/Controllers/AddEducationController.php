<?php

namespace App\Http\Controllers;

use App\Models\User; // importing Models

use Illuminate\Http\Request;

class AddEducationController extends Controller
{

    function educationform($id)
    {
        $loginUserdata = User::find($id);
        return view('dashboard', compact('loginUserdata'));
    }

    function addeducation(Request $request)
    {
        $educationData = User::find($request->id);
        $educationData->degree = $request->degree;
        $educationData->subject = $request->subject;
        $educationData->institute = $request->institute;
        $educationData->result = $request->result;
        $educationData->out_of = $request->out_of;

        $educationData->save();

        // return (json_encode(array('statusCode' => 200)));
        return redirect('dashboard');
    }
}
