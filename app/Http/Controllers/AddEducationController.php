<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Educations; // importing Models

use Illuminate\Http\Request;


class AddEducationController extends Controller
{

    // showing education form
    function educationform($id)
    {
        $loginUserdata = User::find($id);
        return view('dashboard', compact('loginUserdata'));
    }

    // storing education information
    function addeducation(Request $request)
    {
        $educationData = new Educations();
        $educationData->user_id = $request->user_id;
        $educationData->degree = $request->degree;
        $educationData->subject = $request->subject;
        $educationData->institute = $request->institute;
        $educationData->year = $request->year;
        $educationData->result = $request->result;
        $educationData->out_of = $request->out_of;
        $educationData->save();

        // return (json_encode(array('statusCode' => 200)));
        return redirect('dashboard');
    }

    // retrieve and send for display education data
    function geteducationdata(Request $request)
    {
        $educations = Educations::where('user_id', 'like', '%' . $request->user_id . '%')->get();
        // dd($educations);
        return response()->json($educations);
    }
}
